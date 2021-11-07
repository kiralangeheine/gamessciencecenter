<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Create a shortcut for params.
$params = $this->item->params;
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
$canEdit = $this->item->params->get('access-edit');
$info    = $params->get('info_block_position', 0);

// Check if associations are implemented. If they are, define the parameter.
$assocParam = (JLanguageAssociations::isEnabled() && $params->get('show_associations'));

$currentDate   = JFactory::getDate()->format('Y-m-d H:i:s');
$isUnpublished = ($this->item->state == 0 || $this->item->publish_up > $currentDate)
	|| ($this->item->publish_down < $currentDate && $this->item->publish_down !== JFactory::getDbo()->getNullDate());

?>
<article class="contenttype_1col_text">
    <div class="colfull">
        <h1><?php echo $this->item->jcfields[6]->rawvalue; ?></h1><br>
        <h3><?php echo $this->item->jcfields[18]->rawvalue; ?></h3>
        <p><?php echo $this->item->jcfields[12]->rawvalue; ?></p>
        <p><?php echo $this->item->jcfields[15]->rawvalue; ?></p>
    </div>
</article>

