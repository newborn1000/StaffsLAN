<!DOCTYPE html>
<html lang="en-us">
        <head>
                <meta charset="utf-8">
                <title>StaffsLAN v1.0</title>
                <meta name="viewport" content="width=1024">
                <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

                <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
                <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                <script src="/assets/js/script.js"></script>
                <link href="/assets/css/lan.css" rel="stylesheet">
                <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
				<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
				<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        </head>
        <body>
        	<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
        		<div class="container container-full">
                    <div class="row">
                        <div class="col-xs-2 col-sm-1 col-md-2" id="site-logo">
                            StaffsLAN
                        </div>

                        <div class="col-xs-10 col-sm-11 col-md-10" id="sitebar">
                            <?php if(isset($current_user)) { ?> Welcome <em><?=$current_user->username;?></em><?php } ?>
                        </div>
                    </div>
        		</div>
        	</nav>

        	<div class="container container-full">
	        	<div class="row">
	        		<div id="sidebar" class="col-sm-1 col-md-2">
    	    			<ul>
	        				<li><a href="#"><i class="icon-home"></i><span class="hidden-sm">LAN Home</a></a></li>
	        				<li><a href="#"><i class="icon-ticket"></i><span class="hidden-sm">Online Check-in</a></a></li>
	        				<li><a href="/map/"><i class="icon-map-marker"></i><span class="hidden-sm">Live Map</a></a></li>
	        				<li><a href="#"><i class="icon-sitemap"></i><span class="hidden-sm">Tournaments</a></a></li>
	        				<li><a href="#"><i class="icon-signal"></i><span class="hidden-sm">Servers</a></a></li>
	        				<li><a href="#"><i class="icon-calendar"></i><span class="hidden-sm">Schedule</a></a></li>
	        				<li><a href="#"><i class="icon-info"></i><span class="hidden-sm">Information</a></a></li>
	        				<li><a href="#"><i class="icon-signin"></i><span class="hidden-sm">Sign in/out</a></a></li>
	        				<li><a href="#"><i class="icon-question"></i><span class="hidden-sm">Call for Help!</a></a></li>
	        			</ul>
	        		</div>
	        		<div id="content" class="col-sm-11 col-md-10 ">