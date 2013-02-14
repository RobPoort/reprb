<?php
	/**
	*	admin part Helper file
	*/
defined('_JEXEC') or die('Restricted Access');

	/**
	*	reprb component Helper
	*/
abstract class RepRbtHelper
{
	/**
	*	Configure the linkbar
	*/
	public static function addSubmenu($submenu)
	{
		JSubMenuHelper::addEntry(JText::_('COM_REPRB_SUBMENU_REGIONS'), 'index.php?option=com_reprb', $submenu == 'regions');		
		JSubMenuHelper::addEntry(JText::_('COM_REPRB_SUBMENU_CITIES'), 'index.php?option=com_reprb&view=cities', $submenu == 'cities');
		
		
		//set some global property
		$document = JFactory::getDocument();
		$document->addStyleDeclaration('.reprb_32x32'.'{background-image:url(../media/com_reprb/images/reprb-32x32.png);}');		
	}
	
	/**
	*	get the actions
	*/
	public static function getActions($messageId = 0)
	{
		jimport('joomla.access.access');
		$user = JFactory::getUser();
		$result = new JObject;
		
		if(empty($messageId))
		{
			$assetName = 'com_reprb';
		} else
		{
			$assetName = 'com_reprb.message.'.(int)$messageId;
		}
		
		$actions = JAccess::getActions('com_reprb', 'component');
		foreach($actions as $action)
		{
			$result->set($action->name, $user->authorise($action->name, $assetName));
		}
		return $result;
	}
}