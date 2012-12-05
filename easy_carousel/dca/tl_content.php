<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package easy_carousel
 * @link    http://www.christianbarkowsky.de
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


$GLOBALS['TL_DCA']['tl_content']['palettes']['ce_cbw_easycarousel'] = '{type_legend},type;{easycarousel_legend},cbw_easycarousel_id';

$GLOBALS['TL_DCA']['tl_content']['fields']['cbw_easycarousel_id'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['cbw_easycarousel_id'],
	'exclude'                 => true,
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

?>