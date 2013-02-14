<?php
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.application.component.view');

class RepRbViewRegions extends JView
{
	public function display($tpl = null){
		
		$this->items = 'Hier de regio\'s dus';
		
		parent::display($tpl);
	}
}