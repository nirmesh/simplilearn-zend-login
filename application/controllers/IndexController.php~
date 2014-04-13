<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
#	$date->setTimezone(new DateTimeZone('Asia/Kolkata'));
	date_default_timezone_set('Asia/Kolkata');
	$this->view->current_date_and_time = date('M d, Y - H:i:s');
    }


}

