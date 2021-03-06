<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Affiliates.' . $_EXTKEY,
	'Affiliatesfe',
	array(
		'Affiliates' => 'list, show, new, create, edit, update, delete, sync, callapi, comissionjunction, affiliatewindow, webgains, rakuten, search',
		'Search' => 'insurance',
		'Widgets' => 'favview, favviewshow'
	),
	// non-cacheable actions
	array(
		'Affiliates' => 'list, create, update, delete, comissionjunction, affiliatewindow, search, webgains, rakuten',
		'Comissionjunction' => 'sync',
		
	)
);


/**
 * Affiliate Plugin
 */
 
 
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Affiliates.' . $_EXTKEY,
    'Pi1',
    array(
        'Search' => 'quicksearch, processquicksearch ',

    ),
    // non-cacheable actions
    array(
        'Search' => 'processquicksearch',

    )
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Affiliates.' . $_EXTKEY,
    'Pi2',
    array(
        'Widgets' => 'editprofile',

    ),
    // non-cacheable actions
    array(
        'Widgets' => 'editprofile',

    )
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Affiliates.' . $_EXTKEY,
    'Pi3',
    array(
        'Widgets' => 'userfav, test, addfav, favview, favviewshow',

    ),
    // non-cacheable actions
    array(
        'Widgets' => 'userfav, test, addfav',

    )
);