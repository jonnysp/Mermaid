<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2026 Jonny Spitzner
 *
 * @license LGPL-3.0+
 */

use Contao\ArrayUtil;
use Contao\System;
use Symfony\Component\HttpFoundation\Request;

/**
 * Front end modules
 */
ArrayUtil::arrayInsert($GLOBALS['TL_CTE'], 1, array
	(
		'includes' => array
		(
			'mermaid_viewer'    => 'MermaidViewer'
		)
	)
);
