<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Calendar
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Modules
	'Contao\ContentCbwEasyCarousel'      => 'system/modules/easy_carousel/elements/ContentCbwEasyCarousel.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_cbw_easycarousel'			=> 'system/modules/easy_carousel/templates',
));

?>