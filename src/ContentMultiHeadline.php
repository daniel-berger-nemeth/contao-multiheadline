<?php

/**
 * PHP version 	5
 * @copyright  	Copyright (C) 2017 Daniel Nemeth
 * @package	   	multiheadline
 * @author		Daniel Nemeth <office@daniel-nemeth.com>
 * @license	   	http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Class ContentMultiHeadline
 * Provides the logic for content element multiheadline
 *
 * @copyright  	Copyright (C) 2017 Daniel Nemeth
 * @package	   	danielnemeth
 * @author		Daniel Nemeth <office@daniel-nemeth.com>
 */
class ContentMultiHeadline extends \ContentElement
{

	/**
	 * Element template
	 */
	protected $strTemplate = 'ce_multiheadline';


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		$strHeadline = implode('<br>', deserialize($this->multiheadline));
		$this->Template->multiHeadline = $strHeadline;
		$this->Template->hl = $this->multiheadlineh;
		return;
	}
}
