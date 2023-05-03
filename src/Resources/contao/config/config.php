<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2023 Jonny Spitzner
 *
 * @license LGPL-3.0+
 */

/**
 * Style sheet
 */
if (TL_MODE == 'BE')
{
	$GLOBALS['TL_JAVASCRIPT'][] = 'bundles/jonnyspmermaid/mermaid.min.js';
}


/**
 * Front end modules
 */
array_insert($GLOBALS['TL_CTE'], 1, array
(
	'includes' => array
	(
		'mermaid_viewer'    => 'MermaidViewer'
	)
));

