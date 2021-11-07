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
<article class="contenttype_2col_text_3image">
    <div class="colblock">
        <div class="col1">
            <h1><?php echo $this->item->jcfields[6]->rawvalue; ?></h1>
            <p><?php echo $this->item->jcfields[12]->rawvalue; ?></p>
            <img style="max-width: 40%; max-height: 17vw; margin-right: 1vw; margin-top: 3vw;"
                 src="<?php echo $this->item->jcfields[5]->rawvalue; ?>">
            <img style="max-width: 40%; max-height: 17vw; margin-top: 3vw;"
                  src="<?php echo $this->item->jcfields[9]->rawvalue; ?>">
        </div>
        <div class="col2">
            <img style="max-width: 100%; margin-bottom: 3vw;" src="<?php echo $this->item->jcfields[10]->rawvalue; ?>">
            <p><?php echo $this->item->jcfields[13]->rawvalue; ?></p>
        </div>
    </div>

</article>
