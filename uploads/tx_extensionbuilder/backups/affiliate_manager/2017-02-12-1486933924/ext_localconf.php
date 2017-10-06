<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Affiliates.' . $_EXTKEY,
	'Affiliatesfe',
	array(
		'Affiliates' => 'list, show, edit, update, delete, new',
		
	),
	// non-cacheable actions
	array(
		'Affiliates' => 'update, delete',
		
	)
);
