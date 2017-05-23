<?php

/**
 * PHP version 	5
 * @copyright  	Copyright (C) 2017 Daniel Nemeth
 * @package	   	multiheadline
 * @author		Daniel Nemeth <office@daniel-nemeth.com>
 * @license	   	http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'ContentMultiHeadline'					=> 'system/modules/multiheadline/src/ContentMultiHeadline.php'
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	// Elements
	'ce_multiheadline'						=> 'system/modules/multiheadline/templates/elements'
));
