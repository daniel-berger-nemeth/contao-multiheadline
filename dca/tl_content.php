<?php

/**
 * PHP version 	5
 * @copyright  	Copyright (C) 2017 Daniel Nemeth
 * @package	   	multiheadline
 * @author		Daniel Nemeth <office@daniel-nemeth.com>
 * @license	   	http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Table tl_content
 */

// Palettes
$GLOBALS['TL_DCA']['tl_content']['palettes']['multiheadline'] = '{type_legend},type,multiheadline,multiheadlineh;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

// Fields
$GLOBALS['TL_DCA']['tl_content']['fields']['multiheadline'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['multiheadline'],
	'exclude'                 => true,
	'inputType'               => 'textwizard',
	'eval'                    => array('maxlength'=>200, 'allowHtml'=>true, 'mandatory' => true),
	'sql'                     => "text NOT NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['multiheadlineh'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['multiheadlineh'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'),
	'eval'                    => array('mandatory' => true),
	'sql'                     => "varchar(2) NOT NULL default ''"
);
