<?php
error_reporting(E_ALL ^ E_NOTICE);

include "config/loginModule/view.php";
//nclude "focus.php";

//the route page calls the auth() function which is on the view.php page
auth();