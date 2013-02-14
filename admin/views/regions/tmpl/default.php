<?php
defined('_JEXEC') or die('Restricted Access');

jimport('joomla.html.html');
JHtml::_('behavior.tooltip');
?>
<h2>Regions</h2>
<pre>
	<?php
		var_dump($this->items); 
	?>
</pre>