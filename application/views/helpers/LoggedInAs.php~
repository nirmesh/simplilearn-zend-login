<?php
class Zend_View_Helper_LoggedInAs extends Zend_View_Helper_Abstract
{
	public function loggedInAs()
	{
		$auth = Zend_Auth::getInstance();
		if($auth->hasIdentity()){
			$username = $auth->getIdentity()->username;
			$logoutUrl =  $this->view->url(array('controller'=>'auth','action'=>'logout'),null,true);
			return 'Welcome'.$username.'. <a href="'.$logoutUrl.'">Logout</a>';
			
			
		}
		$request = Zend_Controller_Front::getInstance()->getRequest();
		$controller = $request->getControllerName();
		$action = $request->getActionName();
		if($controller=='Auth' && $action = 'index'){
			return '';
		}
		$loginUrl = $this->view->url(array('controller'=>'auth','action'=>'index'),null,true);
		return '<a href="'.$loginUrl.'">Login</a>';
		

			
	}
}
?>
