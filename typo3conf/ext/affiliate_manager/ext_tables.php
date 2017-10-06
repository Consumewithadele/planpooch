<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Affiliates.' . $_EXTKEY,
	'Affiliatesfe',
	'Affiliates'
);


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Affiliates.' . $_EXTKEY,
    'Pi1',
    'Quick Search'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Affiliates.' . $_EXTKEY,
    'Pi2',
    'Login Placeholder'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Affiliates.' . $_EXTKEY,
    'Pi3',
    'Favorites'
);

if (TYPO3_MODE === 'BE') {

$TBE_STYLES['skins'][$_EXTKEY]['name'] = $_EXTKEY;
$TBE_STYLES['skins'][$_EXTKEY]['stylesheetDirectories']['structure'] = 'EXT:' . ($_EXTKEY) . '/Resources/Public/css/Backend/';
//$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';


	/**
	 * Registers a Backend Module
	 */
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'Affiliates.' . $_EXTKEY,
		'web',	 // Make module a submodule of 'web'
		'affiliatesbe',	// Submodule key
		'',						// Position
		array(
			'Affiliates' => 'list, show, new, create, edit, update, delete, sync, callapi, comissionjunction, affiliatewindow, rakuten, webgains, search, showcategories, updatecategories, addnewcategories, processaddnewcategories, deletecategories',
			//'Affiliatenetwork' => 'sync',

		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_affiliatesbe.xlf',
		)
	);

}

/*** FlexForm ***/
$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_affiliatesfe'; 

$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/Main.xml');
/*** FlexForm ***/


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Affiliates');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_affiliatemanager_domain_model_affiliates', 'EXT:affiliate_manager/Resources/Private/Language/locallang_csh_tx_affiliatemanager_domain_model_affiliates.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_affiliatemanager_domain_model_affiliates');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_affiliatemanager_domain_model_insurance');
