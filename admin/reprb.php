<?php
	/**
	* admin part
	*/
defined('_JEXEC') or die('Restricted Access');

//Access check
If(!JFactory::getUser()->authorize('core.manage', 'com_reprb')){
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

//requier helper file
JLoader::register('RepRblistHelper', dirname(__FILE__) . DS . 'helpers' . DS . 'reprb.php');

jimport('joomla.application.component.controller');

//get an instance of the controller
$controller = JController::getInstance('RepRb');

//perform the requested task
$controller->execute(JRequest::getCmd('task'));

//redirect if set by the controller
$controller ->redirect();