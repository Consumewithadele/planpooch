<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Affiliates.' . $_EXTKEY,
	'Affiliatesfe',
	'Affiliates'
);

if (TYPO3_MODE === 'BE') {

	/**
	 * Registers a Backend Module
	 */
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'Affiliates.' . $_EXTKEY,
		'web',	 // Make module a submodule of 'web'
		'affiliatesbe',	// Submodule key
		'',						// Position
		array(
			'Affiliates' => 'list, show, new, create, edit, update, delete',
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_affiliatesbe.xlf',
		)
	);

}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Affiliates');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_affiliatemanager_domain_model_affiliates', 'EXT:affiliate_manager/Resources/Private/Language/locallang_csh_tx_affiliatemanager_domain_model_affiliates.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_affiliatemanager_domain_model_affiliates');
