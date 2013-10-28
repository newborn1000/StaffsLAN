<?php

class Model_Ticket extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'lan_id',
		'student_number',
		'is_volunteer',
	);

	protected static $_table_name = 'tickets';

	protected static $_belongs_to = array(
	    'user' => array(
	        'key_from' => 'student_number',
	        'model_to' => 'Model_User',
	        'key_to' => 'student_number',
	        'cascade_save' => false,
	        'cascade_delete' => false,
	    ),
	    'lan' => array(
	        'key_from' => 'lan_id',
	        'model_to' => 'Model_Lan',
	        'key_to' => 'id',
	        'cascade_save' => false,
	        'cascade_delete' => false,
	    )
	);

	public static function userHasTicket($lan, $student) {
		return Model_Ticket::query()->where(array(array('lan_id' => $lan), array('student_number' => $student)))->count() > 0;
	}

	public static function addTicket($number, $volunteer = false) {
		$check = Model_Ticket::query()->where(array(array('lan_id' => Model_Lan::nextLAN()->id), array('student_number' => $number)))->count() > 0;

		if($check) {
			echo "Not importing " . $number . " as they already have a ticket for LAN: " . Model_Lan::nextLAN()->lan_title . "\n";
			return;
		}

		$tmp = new Model_Ticket(array('lan_id' => Model_Lan::nextLAN()->id, 'student_number' => $number, 'is_volunteer' => ($volunteer ? 1 : 0)));
		$tmp->save();

		echo "Imported " . ($volunteer ? "volunteer" : "standard") . " ticket for student number " . $number . "\n";
	}

	public static function importCSV($file, $product_name, $volunteer = false) {
		$file = file_get_contents(APPPATH . "data/" . $file);

		$lines = explode("\n", $file);

		$total = 0;

		$tickets = array();

		foreach($lines as $line) {
			$arr = str_getcsv($line);
			if(count($arr) > 1) {
				if($arr[0] == $product_name && is_numeric($arr[4])) {
					$total++;
					$tickets[] = $arr[4];
				}
			}
		}

		$lan = Model_Lan::nextLAN();

		foreach($tickets as $t) {
			Model_Ticket::addTicket($t, $volunteer);
		}

		echo "Imported " . count($tickets) . " tickets.\n";
	}

}
