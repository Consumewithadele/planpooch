<?php
return array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,sourceid,description,imageurl,url,category,petnumber, cost, address, businesshours, phonenumber, rating, sync',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('affiliate_manager') . 'Resources/Public/Icons/tx_affiliatemanager_domain_model_affiliates.gif'
	),
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, sourceid, description, imageurl, url, category, petnumber, cost, currency, address, businesshours, phonenumber, rating, affiliatechannel, prevcost, retailer, inscost, inscycle',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, name, sourceid, description, category, rating, sync, --div--;Images, imageurl, url, --div--;Product, cost, prevcost, currency, --div--;Hotel, petnumber, --div--;Retailer Information, retailer, affiliatechannel, address, postalcode, businesshours, phonenumber, --div--;Insurance, insurancecoverage, insurancefees, insurancedeath, insurancelost, insurancefeesexcess, inscost, inscycle, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, hidden;;1, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'renderType' => 'selectSingle',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_affiliatemanager_domain_model_affiliates',
				'foreign_table_where' => 'AND tx_affiliatemanager_domain_model_affiliates.pid=###CURRENT_PID### AND tx_affiliatemanager_domain_model_affiliates.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'sourceid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.sourceid',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
			'defaultExtras' => 'richtext[]'
		),
		
		
		
		
		'imageurl' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.imageurl',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		
		
		
		'url' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.url',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),


		'active' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.active',
			'config' => array(
				'type' => 'check',
				'default' => 1
			)
		),
		
		/*start additional fields here*/
		'petnumber' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.petnumber',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'cost' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.cost',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'prevcost' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.prevcost',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		
		'inscost' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.inscost',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		
		'inscycle' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.inscycle',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		
		
		
		'currency' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.currency',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		
		'retailer' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.retailer',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		
		'address' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.address',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'phonenumber' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.phonenumber',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'rating' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.rating',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'businesshours' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.businesshours',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		
		'affiliatechannel' => array(
				'label' => 'Affiliate Channel',
				'config' => array(
						'type' => 'none'
				)
		),
		
		'sync' => array(
        'label' => 'LLL:EXT:affiliate_manager/Resources/Private/Language/locallang_db.xlf:tx_affiliatemanager_domain_model_affiliates.sync',
        'exclude' => 1,
        'config' => array(
                'type' => 'check',
                'default' => '0'
        )
		),
		
		
		
		
		
		
		
		
		
		
		'insurancecoverage' => array(
			'exclude' => 1,
			'label' => 'Insurance Coverage',
			'config' => array(
				'type' => 'text',
				'cols' => 30,
				'rows' => 8,
				'eval' => 'trim'
			),
			'defaultExtras' => 'richtext[]'
		),
		
		'insurancefees' => array(
			'exclude' => 1,
			'label' => 'Insurance Fees',
			'config' => array(
				'type' => 'text',
				'cols' => 30,
				'rows' => 8,
				'eval' => 'trim'
			),
			'defaultExtras' => 'richtext[]'
		),

		'insurancedeath' => array(
			'exclude' => 1,
			'label' => 'Insurance Death',
			'config' => array(
				'type' => 'text',
				'cols' => 30,
				'rows' => 8,
				'eval' => 'trim'
			),
			'defaultExtras' => 'richtext[]'
		),

		'insurancelost' => array(
			'exclude' => 1,
			'label' => 'Insurance Loss',
			'config' => array(
				'type' => 'text',
				'cols' => 30,
				'rows' => 8,
				'eval' => 'trim'
			),
			'defaultExtras' => 'richtext[]'
		),

		'insurancefeesexcess' => array(
			'exclude' => 1,
			'label' => 'Insurance Fees Excess',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),

		'postalcode' => array(
			'exclude' => 1,
			'label' => 'Postal Code',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		
		'pid' => array(
    		'config' => array(
      		'type' => 'passthrough',
    		)	
		),


















		
		
		
		
		
		
	),
);