<?php

class Controller_Sign extends Controller_Base
{
	public function action_index()
	{
		$data['log'] = Model_Inout::query()->where(array(array('user_id' => $this->currentUser->id), array('lan_id' => Model_Lan::nextLAN()->id)))->get();
		$view = View::forge('sign', $data);
		return Response::forge($view);
	}

	public function action_in() {
		Model_Inout::SignIn($this->currentUser->id);

		Response::redirect('/sign');
	}

	public function action_out() {
		Model_Inout::SignOut($this->currentUser->id);

		Response::redirect('/sign');
	}
}

?>