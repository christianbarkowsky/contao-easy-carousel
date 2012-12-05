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
 * Run in a custom namespace, so the class can be replaced
 */
namespace Contao;



class ContentCbwEasyCarousel extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_cbw_easycarousel';


	/**
	 * Display a wildcard in the back end
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$this->Template = new \BackendTemplate('be_wildcard');
    		$this->Template->wildcard = '### CBW EASY CAROUSEL ###';

			return $this->Template->parse();
		}

		return parent::generate();
	}
	
	
	/**
	 * Generate the module
	 */
	protected function compile()
	{
		if (TL_MODE == 'FE')
		{
			$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/easy-carousel/assets/js/jquery.carouFredSel-6.1.0-packed.js|static';
		}
	}
}
