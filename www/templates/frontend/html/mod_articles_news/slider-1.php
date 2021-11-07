<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<section class="slider_startseite<?php echo $moduleclass_sfx; ?>">
	<?php foreach ($list as $item) : ?>
        <article>
            <h2>
                <?php echo ($item->title);?>
            </h2>
        </article>
	<?php endforeach; ?>
</section>
