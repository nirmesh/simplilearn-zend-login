<?php

class Application_Form_Login extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
	$this->setName('login');
	$this->setMethod('post');
	$this->addElement('text','username',array(
		'filters'=>array(),
		'validators'=>array(array('StringLength',false,array(0,50))),
		'required'=>true,
		'label'=>'Username:'
	));
	
	$this->addElement('password','password',array(
		'filters'=>array('StringTrim','StringToLower'),
		'validators'=>array(array('StringLength',false,array(0,50))),
		'required'=>true,
		'label'=>'Password:'
	));

	$this->addElement('submit','login',array(
		'required'=>'false',
		'ignore'=>'true',
		'label'=>'login'
	));
    }


}

