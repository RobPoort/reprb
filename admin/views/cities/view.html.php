<?php
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.view');

class RepRbViewCities extends JView
{
	public function display($tpl = null){
		
		$this->items = 'Hier de cities';
		
		parent::display($tpl);
	}
}