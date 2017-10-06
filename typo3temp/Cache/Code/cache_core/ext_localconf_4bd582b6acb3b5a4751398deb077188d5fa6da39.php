<?php
/**
 * Compiled ext_localconf.php cache file
 */

global $TYPO3_CONF_VARS, $T3_SERVICES, $T3_VAR;

/**
 * Extension: core
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/core/ext_localconf.php
 */

$_EXTKEY = 'core';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

/** @var \TYPO3\CMS\Extbase\SignalSlot\Dispatcher $signalSlotDispatcher */
$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);

if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    // FAL SECURITY CHECKS
    $signalSlotDispatcher->connect(
        \TYPO3\CMS\Core\Resource\ResourceFactory::class,
        \TYPO3\CMS\Core\Resource\ResourceFactoryInterface::SIGNAL_PostProcessStorage,
        \TYPO3\CMS\Core\Resource\Security\StoragePermissionsAspect::class,
        'addUserPermissionsToStorage'
    );
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \TYPO3\CMS\Core\Hooks\BackendUserGroupIntegrityCheck::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/alt_doc.php']['makeEditForm_accessCheck'][] = \TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect::class . '->isAllowedToShowEditForm';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms_inline.php']['checkAccess'][] = \TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect::class . '->isAllowedToShowEditForm';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['checkModifyAccessList'][] = \TYPO3\CMS\Core\Resource\Security\FileMetadataPermissionsAspect::class;

    // PACKAGE MANAGEMENT
    $signalSlotDispatcher->connect(
        'PackageManagement',
        'packagesMayHaveChanged',
        \TYPO3\CMS\Core\Package\PackageManager::class,
        'scanAvailablePackages'
    );
}

$signalSlotDispatcher->connect(
    \TYPO3\CMS\Core\Resource\ResourceStorage::class,
    \TYPO3\CMS\Core\Resource\ResourceStorageInterface::SIGNAL_PostFileDelete,
    \TYPO3\CMS\Core\Resource\Processing\FileDeletionAspect::class,
    'removeFromRepository'
);

$signalSlotDispatcher->connect(
    \TYPO3\CMS\Core\Resource\ResourceStorage::class,
    \TYPO3\CMS\Core\Resource\ResourceStorageInterface::SIGNAL_PostFileAdd,
    \TYPO3\CMS\Core\Resource\Processing\FileDeletionAspect::class,
    'cleanupProcessedFilesPostFileAdd'
);

$signalSlotDispatcher->connect(
    \TYPO3\CMS\Core\Resource\ResourceStorage::class,
    \TYPO3\CMS\Core\Resource\ResourceStorageInterface::SIGNAL_PostFileReplace,
    \TYPO3\CMS\Core\Resource\Processing\FileDeletionAspect::class,
    'cleanupProcessedFilesPostFileReplace'
);

if (!\TYPO3\CMS\Core\Core\Bootstrap::usesComposerClassLoading()) {
    $signalSlotDispatcher->connect(
        \TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class,
        'afterExtensionInstall',
        \TYPO3\CMS\Core\Core\ClassLoadingInformation::class,
        'dumpClassLoadingInformation'
    );
    $signalSlotDispatcher->connect(
        \TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class,
        'afterExtensionUninstall',
        \TYPO3\CMS\Core\Core\ClassLoadingInformation::class,
        'dumpClassLoadingInformation'
    );
}
$signalSlotDispatcher->connect(
    TYPO3\CMS\Core\Resource\ResourceStorage::class,
    \TYPO3\CMS\Core\Resource\Service\FileProcessingService::SIGNAL_PreFileProcess,
    \TYPO3\CMS\Core\Resource\OnlineMedia\Processing\PreviewProcessing::class,
    'processFile'
);

unset($signalSlotDispatcher);

$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['dumpFile'] = \TYPO3\CMS\Core\Controller\FileDumpController::class . '::dumpAction';

/** @var \TYPO3\CMS\Core\Resource\Rendering\RendererRegistry $rendererRegistry */
$rendererRegistry = \TYPO3\CMS\Core\Resource\Rendering\RendererRegistry::getInstance();
$rendererRegistry->registerRendererClass(\TYPO3\CMS\Core\Resource\Rendering\AudioTagRenderer::class);
$rendererRegistry->registerRendererClass(\TYPO3\CMS\Core\Resource\Rendering\VideoTagRenderer::class);
$rendererRegistry->registerRendererClass(\TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer::class);
$rendererRegistry->registerRendererClass(\TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer::class);
unset($rendererRegistry);

$textExtractorRegistry = \TYPO3\CMS\Core\Resource\TextExtraction\TextExtractorRegistry::getInstance();
$textExtractorRegistry->registerTextExtractor(\TYPO3\CMS\Core\Resource\TextExtraction\PlainTextExtractor::class);
unset($textExtractorRegistry);

$extractorRegistry = \TYPO3\CMS\Core\Resource\Index\ExtractorRegistry::getInstance();
$extractorRegistry->registerExtractionService(\TYPO3\CMS\Core\Resource\OnlineMedia\Metadata\Extractor::class);
unset($extractorRegistry);


/**
 * Extension: extbase
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/extbase/ext_localconf.php
 */

$_EXTKEY = 'extbase';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// We set the default implementation for Storage Backend & Query Settings in Backend and Frontend.
// The code below is NO PUBLIC API!
/** @var $extbaseObjectContainer \TYPO3\CMS\Extbase\Object\Container\Container */
$extbaseObjectContainer = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class);
// Singleton
$extbaseObjectContainer->registerImplementation(\TYPO3\CMS\Extbase\Persistence\QueryInterface::class, \TYPO3\CMS\Extbase\Persistence\Generic\Query::class);
$extbaseObjectContainer->registerImplementation(\TYPO3\CMS\Extbase\Persistence\QueryResultInterface::class, \TYPO3\CMS\Extbase\Persistence\Generic\QueryResult::class);
$extbaseObjectContainer->registerImplementation(\TYPO3\CMS\Extbase\Persistence\PersistenceManagerInterface::class, \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager::class);
$extbaseObjectContainer->registerImplementation(\TYPO3\CMS\Extbase\Persistence\Generic\Storage\BackendInterface::class, \TYPO3\CMS\Extbase\Persistence\Generic\Storage\Typo3DbBackend::class);
$extbaseObjectContainer->registerImplementation(\TYPO3\CMS\Extbase\Persistence\Generic\QuerySettingsInterface::class, \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings::class);
unset($extbaseObjectContainer);

// Register type converters
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\ArrayConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\BooleanConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FloatConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\IntegerConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\ObjectStorageConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\PersistentObjectConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\ObjectConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\StringConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\CoreTypeConverter::class);
// Experimental FAL<->extbase converters
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FileConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FileReferenceConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FolderBasedFileCollectionConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\StaticFileCollectionConverter::class);
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(\TYPO3\CMS\Extbase\Property\TypeConverter\FolderConverter::class);

if (TYPO3_MODE === 'BE') {
    // registers Extbase at the cli_dispatcher with key "extbase".
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['extbase'] = [
        function () {
            $bootstrap = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Core\Bootstrap::class);
            echo $bootstrap->run('', []);
        },
        '_CLI_lowlevel'
    ];
    // register help command
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = \TYPO3\CMS\Extbase\Command\HelpCommandController::class;
}


/**
 * Extension: extensionmanager
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/extensionmanager/ext_localconf.php
 */

$_EXTKEY = 'extensionmanager';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register extension list update task
$_EXTCONF = unserialize($_EXTCONF);
if (empty($_EXTCONF['offlineMode'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Extensionmanager\Task\UpdateExtensionListTask::class] = [
        'extension' => $_EXTKEY,
        'title' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.name',
        'description' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf:task.updateExtensionListTask.description',
        'additionalFields' => '',
    ];
}

if (TYPO3_MODE === 'BE') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = \TYPO3\CMS\Extensionmanager\Command\ExtensionCommandController::class;
    if (!(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
        $signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
        $signalSlotDispatcher->connect(
            \TYPO3\CMS\Extensionmanager\Service\ExtensionManagementService::class,
            'willInstallExtensions',
            \TYPO3\CMS\Core\Package\PackageManager::class,
            'scanAvailablePackages'
        );
        $signalSlotDispatcher->connect(
            \TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class,
            'tablesDefinitionIsBeingBuilt',
            \TYPO3\CMS\Core\Cache\DatabaseSchemaService::class,
            'addCachingFrameworkRequiredDatabaseSchemaForInstallUtility'
        );
        $signalSlotDispatcher->connect(
            \TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class,
            'tablesDefinitionIsBeingBuilt',
            \TYPO3\CMS\Core\Category\CategoryRegistry::class,
            'addExtensionCategoryDatabaseSchemaToTablesDefinition'
        );
    }
}


/**
 * Extension: lang
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/lang/ext_localconf.php
 */

$_EXTKEY = 'lang';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register language update command controller
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = \TYPO3\CMS\Lang\Command\LanguageCommandController::class;


/**
 * Extension: saltedpasswords
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/saltedpasswords/ext_localconf.php
 */

$_EXTKEY = 'saltedpasswords';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Form evaluation function for fe_users
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals'][\TYPO3\CMS\Saltedpasswords\Evaluation\FrontendEvaluator::class] = '';
// Form evaluation function for be_users
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals'][\TYPO3\CMS\Saltedpasswords\Evaluation\BackendEvaluator::class] = '';

// Hook for processing "forgotPassword" in felogin
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['felogin']['password_changed'][] = \TYPO3\CMS\Saltedpasswords\Utility\SaltedPasswordsUtility::class . '->feloginForgotPasswordHook';

// Extension may register additional salted hashing methods in this array
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/saltedpasswords']['saltMethods'] = [];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService('saltedpasswords', 'auth', \TYPO3\CMS\Saltedpasswords\SaltedPasswordService::class, [
    'title' => 'FE/BE Authentification salted',
    'description' => 'Salting of passwords for Frontend and Backend',
    'subtype' => 'authUserFE,authUserBE',
    'available' => true,
    'priority' => 70,
    // must be higher than \TYPO3\CMS\Sv\AuthenticationService (50) and rsaauth (60) but lower than OpenID (75)
    'quality' => 70,
    'os' => '',
    'exec' => '',
    'className' => \TYPO3\CMS\Saltedpasswords\SaltedPasswordService::class
]);

// Register bulk update task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Saltedpasswords\Task\BulkUpdateTask::class] = [
    'extension' => 'saltedpasswords',
    'title' => 'LLL:EXT:saltedpasswords/Resources/Private/Language/locallang.xlf:ext.saltedpasswords.tasks.bulkupdate.name',
    'description' => 'LLL:EXT:saltedpasswords/Resources/Private/Language/locallang.xlf:ext.saltedpasswords.tasks.bulkupdate.description',
    'additionalFields' => \TYPO3\CMS\Saltedpasswords\Task\BulkUpdateFieldProvider::class
];


/**
 * Extension: backend
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/backend/ext_localconf.php
 */

$_EXTKEY = 'backend';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class)->connect(
        \TYPO3\CMS\Core\Tree\TableConfiguration\DatabaseTreeDataProvider::class,
        \TYPO3\CMS\Core\Tree\TableConfiguration\DatabaseTreeDataProvider::SIGNAL_PostProcessTreeData,
        \TYPO3\CMS\Backend\Security\CategoryPermissionsAspect::class,
        'addUserPermissionsToCategoryTreeData'
    );

    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433106] = \TYPO3\CMS\Backend\Backend\ToolbarItems\ClearCacheToolbarItem::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433107] = \TYPO3\CMS\Backend\Backend\ToolbarItems\HelpToolbarItem::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433108] = \TYPO3\CMS\Backend\Backend\ToolbarItems\LiveSearchToolbarItem::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433109] = \TYPO3\CMS\Backend\Backend\ToolbarItems\ShortcutToolbarItem::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433110] = \TYPO3\CMS\Backend\Backend\ToolbarItems\SystemInformationToolbarItem::class;
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][1435433111] = \TYPO3\CMS\Backend\Backend\ToolbarItems\UserToolbarItem::class;

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['loginProviders'][1433416747] = [
        'provider' => \TYPO3\CMS\Backend\LoginProvider\UsernamePasswordLoginProvider::class,
        'sorting' => 50,
        'icon-class' => 'fa-key',
        'label' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:login.link'
    ];

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['avatarProviders']['defaultAvatarProvider'] = [
        'provider' => \TYPO3\CMS\Backend\Backend\Avatar\DefaultAvatarProvider::class
    ];
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tsfebeuserauth.php']['frontendEditingController']['default'] = \TYPO3\CMS\Core\FrontendEditing\FrontendEditingController::class;

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['page'] = 'pages';

// Include base TSconfig setup
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:backend/Configuration/PageTSconfig/NewContentElementWizard.ts">');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:backend/Configuration/UserTSconfig/Options.ts">');


/**
 * Extension: frontend
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/frontend/ext_localconf.php
 */

$_EXTKEY = 'frontend';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'FE' && !isset($_REQUEST['eID'])) {
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class)->connect(
        \TYPO3\CMS\Core\Resource\Index\MetaDataRepository::class,
        'recordPostRetrieval',
        \TYPO3\CMS\Frontend\Aspect\FileMetadataOverlayAspect::class,
        'languageAndWorkspaceOverlay'
    );
}

// Register all available content objects
$GLOBALS['TYPO3_CONF_VARS']['FE']['ContentObjects'] = array_merge($GLOBALS['TYPO3_CONF_VARS']['FE']['ContentObjects'], [
    'TEXT'             => \TYPO3\CMS\Frontend\ContentObject\TextContentObject::class,
    'CASE'             => \TYPO3\CMS\Frontend\ContentObject\CaseContentObject::class,
    'COA'              => \TYPO3\CMS\Frontend\ContentObject\ContentObjectArrayContentObject::class,
    'COA_INT'          => \TYPO3\CMS\Frontend\ContentObject\ContentObjectArrayInternalContentObject::class,
    'USER'             => \TYPO3\CMS\Frontend\ContentObject\UserContentObject::class,
    'USER_INT'         => \TYPO3\CMS\Frontend\ContentObject\UserInternalContentObject::class,
    'FILE'             => \TYPO3\CMS\Frontend\ContentObject\FileContentObject::class,
    'FILES'            => \TYPO3\CMS\Frontend\ContentObject\FilesContentObject::class,
    'IMAGE'            => \TYPO3\CMS\Frontend\ContentObject\ImageContentObject::class,
    'IMG_RESOURCE'     => \TYPO3\CMS\Frontend\ContentObject\ImageResourceContentObject::class,
    'CONTENT'          => \TYPO3\CMS\Frontend\ContentObject\ContentContentObject::class,
    'RECORDS'          => \TYPO3\CMS\Frontend\ContentObject\RecordsContentObject::class,
    'HMENU'            => \TYPO3\CMS\Frontend\ContentObject\HierarchicalMenuContentObject::class,
    'LOAD_REGISTER'    => \TYPO3\CMS\Frontend\ContentObject\LoadRegisterContentObject::class,
    'RESTORE_REGISTER' => \TYPO3\CMS\Frontend\ContentObject\RestoreRegisterContentObject::class,
    'TEMPLATE'         => \TYPO3\CMS\Frontend\ContentObject\TemplateContentObject::class,
    'FLUIDTEMPLATE'    => \TYPO3\CMS\Frontend\ContentObject\FluidTemplateContentObject::class,
    'SVG'              => \TYPO3\CMS\Frontend\ContentObject\ScalableVectorGraphicsContentObject::class,
    'EDITPANEL'        => \TYPO3\CMS\Frontend\ContentObject\EditPanelContentObject::class
]);

if (TYPO3_MODE === 'FE') {

    // Register eID provider for showpic
    $GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['tx_cms_showpic'] = \TYPO3\CMS\Frontend\Controller\ShowImageController::class . '::processRequest';
    // Register eID provider for ExtDirect for the frontend
    $GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['ExtDirect'] = \TYPO3\CMS\Frontend\Controller\ExtDirectEidController::class . '::processRequest';
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
	options.saveDocView = 1
	options.saveDocNew = 1
	options.saveDocNew.pages = 0
	options.saveDocNew.sys_file = 0
	options.saveDocNew.sys_file_metadata = 0
	options.disableDelete.sys_file = 1
');

// Registering hooks for the treelist cache
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \TYPO3\CMS\Frontend\Hooks\TreelistCacheUpdateHooks::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][] = \TYPO3\CMS\Frontend\Hooks\TreelistCacheUpdateHooks::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['moveRecordClass'][] = \TYPO3\CMS\Frontend\Hooks\TreelistCacheUpdateHooks::class;

// Register hook to show preview info
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['hook_previewInfo']['cms'] = \TYPO3\CMS\Frontend\Hooks\FrontendHooks::class . '->hook_previewInfo';

// Register search key shortcuts
$GLOBALS['TYPO3_CONF_VARS']['SYS']['livesearch']['content'] = 'tt_content';

// Register URL handler for external pages.
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['urlProcessing']['urlHandlers']['frontendExternalUrl'] = [
    'handler' => \TYPO3\CMS\Frontend\Page\ExternalPageUrlHandler::class,
];


/**
 * Extension: install
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/install/ext_localconf.php
 */

$_EXTKEY = 'install';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// TYPO3 CMS 7
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['accessRightParameters'] = \TYPO3\CMS\Install\Updates\AccessRightParametersUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['backendUserStartModule'] = \TYPO3\CMS\Install\Updates\BackendUserStartModuleUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['languageIsoCode'] = \TYPO3\CMS\Install\Updates\LanguageIsoCodeUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['PageShortcutParent'] = \TYPO3\CMS\Install\Updates\PageShortcutParentUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['backendShortcuts'] = \TYPO3\CMS\Install\Updates\MigrateShortcutUrlsAgainUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['processedFilesChecksum'] = \TYPO3\CMS\Install\Updates\ProcessedFileChecksumUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['filesReplacePermission'] = \TYPO3\CMS\Install\Updates\FilesReplacePermissionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['tableCType'] = \TYPO3\CMS\Install\Updates\TableFlexFormToTtContentFieldsUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\FileListInAccessModuleListUpdate::class] = \TYPO3\CMS\Install\Updates\FileListInAccessModuleListUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\FileListIsStartModuleUpdate::class] = \TYPO3\CMS\Install\Updates\FileListIsStartModuleUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['textmediaCType'] = \TYPO3\CMS\Install\Updates\ContentTypesToTextMediaUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\WorkspacesNotificationSettingsUpdate::class] = \TYPO3\CMS\Install\Updates\WorkspacesNotificationSettingsUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['textmediaAssets'] = \TYPO3\CMS\Install\Updates\MigrateMediaToAssetsForTextMediaCe::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['compatibility6Extension'] = \TYPO3\CMS\Install\Updates\Compatibility6ExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['mediaceExtension'] = \TYPO3\CMS\Install\Updates\MediaceExtractionUpdate::class;
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['openidExtension'] = \TYPO3\CMS\Install\Updates\OpenidExtractionUpdate::class;

$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
$signalSlotDispatcher->connect(
    \TYPO3\CMS\Install\Service\SqlExpectedSchemaService::class,
    'tablesDefinitionIsBeingBuilt',
    \TYPO3\CMS\Core\Cache\DatabaseSchemaService::class,
    'addCachingFrameworkRequiredDatabaseSchemaForSqlExpectedSchemaService'
);
$signalSlotDispatcher->connect(
    \TYPO3\CMS\Install\Service\SqlExpectedSchemaService::class,
    'tablesDefinitionIsBeingBuilt',
    \TYPO3\CMS\Core\Category\CategoryRegistry::class,
    'addCategoryDatabaseSchemaToTablesDefinition'
);

// Do not delete this wizard. This makes sure new installations get the TER repository set in the database.
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][\TYPO3\CMS\Install\Updates\ExtensionManagerTables::class]
    = \TYPO3\CMS\Install\Updates\ExtensionManagerTables::class;


/**
 * Extension: recordlist
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/recordlist/ext_localconf.php
 */

$_EXTKEY = 'recordlist';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // register default link handlers
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
        TCEMAIN.linkHandler {
            page {
                handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\PageLinkHandler
                label = LLL:EXT:lang/locallang_browse_links.xlf:page
            }
            file {
                handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\FileLinkHandler
                label = LLL:EXT:lang/locallang_browse_links.xlf:file
                displayAfter = page
                scanAfter = page
            }
            folder {
                handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\FolderLinkHandler
                label = LLL:EXT:lang/locallang_browse_links.xlf:folder
                displayAfter = file
                scanAfter = file
            }
            url {
                handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\UrlLinkHandler
                label = LLL:EXT:lang/locallang_browse_links.xlf:extUrl
                displayAfter = folder
                scanAfter = mail
            }
            mail {
                handler = TYPO3\\CMS\\Recordlist\\LinkHandler\\MailLinkHandler
                label = LLL:EXT:lang/locallang_browse_links.xlf:email
                displayAfter = url
            }
        }
    ');
}


/**
 * Extension: sv
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/sv/ext_localconf.php
 */

$_EXTKEY = 'sv';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register base authentication service
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService(
    'sv',
    'auth',
    \TYPO3\CMS\Sv\AuthenticationService::class,
    [
        'title' => 'User authentication',
        'description' => 'Authentication with username/password.',
        'subtype' => 'getUserBE,getUserFE,authUserFE,getGroupsFE,processLoginDataBE,processLoginDataFE',
        'available' => true,
        'priority' => 50,
        'quality' => 50,
        'os' => '',
        'exec' => '',
        'className' => \TYPO3\CMS\Sv\AuthenticationService::class
    ]
);


/**
 * Extension: t3skin
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/t3skin/ext_localconf.php
 */

$_EXTKEY = 't3skin';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	RTE.default.skin = EXT:t3skin/rtehtmlarea/htmlarea.css
	RTE.default.FE.skin = EXT:t3skin/rtehtmlarea/htmlarea.css
');


/**
 * Extension: documentation
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/documentation/ext_localconf.php
 */

$_EXTKEY = 'documentation';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Open extension manual from within Extension Manager
$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
$signalSlotDispatcher->connect(
    \TYPO3\CMS\Extensionmanager\ViewHelpers\ProcessAvailableActionsViewHelper::class,
    'processActions',
    \TYPO3\CMS\Documentation\Slots\ExtensionManager::class,
    'processActions'
);


/**
 * Extension: rtehtmlarea
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/rtehtmlarea/ext_localconf.php
 */

$_EXTKEY = 'rtehtmlarea';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register FormEngine node type resolver hook to render RTE in FormEngine if enabled
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeResolver'][1433167475] = [
    'nodeName' => 'text',
    'priority' => 40,
    'class' => \TYPO3\CMS\Rtehtmlarea\Form\Resolver\RichTextNodeResolver::class,
];

// Make the extension version number available to the extension scripts
require_once \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('rtehtmlarea') . 'ext_emconf.php';

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['version'] = $EM_CONF['rtehtmlarea']['version'];
// Unserializing the configuration so we can use it here
$_EXTCONF = unserialize($_EXTCONF);

// Add default RTE transformation configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/Configuration/PageTSconfig/Proc/pageTSConfig.txt">');

// Add default Page TS Config RTE configuration
if (strstr($_EXTCONF['defaultConfiguration'], 'Minimal')) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['defaultConfiguration'] = 'Advanced';
} elseif (strstr($_EXTCONF['defaultConfiguration'], 'Demo')) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['defaultConfiguration'] = 'Demo';
} else {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['defaultConfiguration'] = 'Typical';
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/Configuration/PageTSconfig/' . $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['defaultConfiguration'] . '/pageTSConfig.txt">');
// Add default User TS Config RTE configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/Configuration/UserTSconfig/' . $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['defaultConfiguration'] . '/userTSConfig.txt">');

// Registering soft reference parser for image tags in RTE content
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['softRefParser']['rtehtmlarea_images'] = \TYPO3\CMS\Rtehtmlarea\Hook\SoftReferenceHook::class;

// Add Status Report about Conflicting Extensions
if (TYPO3_MODE === 'BE') {
    // Take note of conflicting extensions
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['conflicts'] = $EM_CONF['rtehtmlarea']['constraints']['conflicts'];
    // Register Status Report Hook
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['reports']['tx_reports']['status']['providers']['htmlArea RTE'][] = \TYPO3\CMS\Rtehtmlarea\Hook\StatusReportConflictsCheckHook::class;
}

// Set warning in the Update Wizard of the Install Tool for deprecated Page TS Config properties
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['checkForDeprecatedRtePageTSConfigProperties'] = \TYPO3\CMS\Rtehtmlarea\Hook\Install\DeprecatedRteProperties::class;
// Set warning in the Update Wizard of the Install Tool for replacement of "acronym" button by "abbreviation" button
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['checkForRteAcronymButtonRenamedToAbbreviation'] = \TYPO3\CMS\Rtehtmlarea\Hook\Install\RteAcronymButtonRenamedToAbbreviation::class;

// Initialize plugin registration array
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins'] = [];

// Editor Mode configuration
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['EditorMode'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['EditorMode']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\EditorMode::class;

// General Element configuration
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['EditElement'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['EditElement']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\EditElement::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['EditElement']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['MicrodataSchema'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['MicrodataSchema']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\MicroDataSchema::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['MicrodataSchema']['disableInFE'] = 0;

// Inline Elements configuration
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefaultInline'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefaultInline']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\DefaultInline::class;
if ($_EXTCONF['enableInlineElements']) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['InlineElements'] = [];
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['InlineElements']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\InlineElements::class;
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/Configuration/PageTSconfig/Extensions/InlineElements/pageTSConfig.txt">');
}

// Block Elements configuration
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['BlockElements'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['BlockElements']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\BlockElements::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefinitionList'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefinitionList']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\DefinitionList::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['BlockStyle'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['BlockStyle']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\BlockStyle::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['CharacterMap'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['CharacterMap']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\CharacterMap::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['Abbreviation'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['Abbreviation']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\Abbreviation::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['Abbreviation']['disableInFE'] = 1;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['UserElements'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['UserElements']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\UserElements::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['UserElements']['disableInFE'] = 1;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TextStyle'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TextStyle']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\TextStyle::class;

// Enable images and add default Page TS Config RTE configuration for enabling images with the Minimal and Typical default configuration
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['enableImages'] = $_EXTCONF['enableImages'] ?: 0;
if ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['defaultConfiguration'] == 'Demo') {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['enableImages'] = 1;
}
if ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['enableImages']) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefaultImage'] = [];
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefaultImage']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\DefaultImage::class;

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Image'] = [];
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Image']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\Typo3Image::class;
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Image']['disableInFE'] = 1;

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/Configuration/PageTSconfig/Image/pageTSConfig.txt">');
}
// Add frontend image rendering TypoScript anyways
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript('rtehtmlarea', 'setup', '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/Configuration/TypoScript/ImageRendering/setup.txt">', 'defaultContentRendering');

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefaultLink'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefaultLink']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\DefaultLink::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Link'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Link']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\Typo3Link::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Link']['disableInFE'] = 1;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Link']['additionalAttributes'] = 'rel';

// Add default Page TS Config RTE configuration for enabling links accessibility icons
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['enableAccessibilityIcons'] = $_EXTCONF['enableAccessibilityIcons'] ?: 0;
if ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['enableAccessibilityIcons']) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/Configuration/PageTSconfig/AccessibilityIcons/pageTSConfig.txt">');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript('rtehtmlarea', 'setup', '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/res/accessibilityicons/setup.txt">', 'defaultContentRendering');
}

// Register features that use the style attribute
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['allowStyleAttribute'] = isset($_EXTCONF['allowStyleAttribute']) && !$_EXTCONF['allowStyleAttribute'] ? 0 : 1;
if ($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['allowStyleAttribute']) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Color'] = [];
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Color']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\Typo3Color::class;
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3Color']['disableInFE'] = 0;

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SelectFont'] = [];
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SelectFont']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\SelectFont::class;
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SelectFont']['disableInFE'] = 0;
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:rtehtmlarea/Configuration/PageTSconfig/Style/pageTSConfig.txt">');
}

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TextIndicator'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TextIndicator']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\TextIndicator::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TextIndicator']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['InsertSmiley'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['InsertSmiley']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\InsertSmiley::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['InsertSmiley']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['Language'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['Language']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\Language::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['Language']['disableInFE'] = 0;

// Spell checking configuration
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['rtehtmlarea_spellchecker'] = \TYPO3\CMS\Rtehtmlarea\Controller\SpellCheckingController::class . '::processRequest';

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SpellChecker'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SpellChecker']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\Spellchecker::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SpellChecker']['disableInFE'] = 0;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SpellChecker']['AspellDirectory'] = $_EXTCONF['AspellDirectory'] ? $_EXTCONF['AspellDirectory'] : '/usr/bin/aspell';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SpellChecker']['noSpellCheckLanguages'] = $_EXTCONF['noSpellCheckLanguages'] ? $_EXTCONF['noSpellCheckLanguages'] : 'ja,km,ko,lo,th,zh,b5,gb';
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['SpellChecker']['forceCommandMode'] = $_EXTCONF['forceCommandMode'] ? $_EXTCONF['forceCommandMode'] : 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['FindReplace'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['FindReplace']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\FindReplace::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['FindReplace']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['RemoveFormat'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['RemoveFormat']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\RemoveFormat::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['RemoveFormat']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['PlainText'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['PlainText']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\Plaintext::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['PlainText']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefaultClean'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['DefaultClean']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\DefaultClean::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3HtmlParser'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3HtmlParser']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\Typo3HtmlParser::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TYPO3HtmlParser']['disableInFE'] = 1;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['QuickTag'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['QuickTag']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\QuickTag::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['QuickTag']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TableOperations'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TableOperations']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\TableOperations::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['TableOperations']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['AboutEditor'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['AboutEditor']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\AboutEditor::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['AboutEditor']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['ContextMenu'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['ContextMenu']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\ContextMenu::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['ContextMenu']['disableInFE'] = 0;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['UndoRedo'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['UndoRedo']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\UndoRedo::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['UndoRedo']['disableInFE'] = 0;

// Copy & Paste configuration
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['CopyPaste'] = [];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['CopyPaste']['objectReference'] = \TYPO3\CMS\Rtehtmlarea\Extension\CopyPaste::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['rtehtmlarea']['plugins']['CopyPaste']['disableInFE'] = 0;


/**
 * Extension: rsaauth
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/rsaauth/ext_localconf.php
 */

$_EXTKEY = 'rsaauth';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Add the service
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService('rsaauth', 'auth', \TYPO3\CMS\Rsaauth\RsaAuthService::class, [
    'title' => 'RSA authentication',
    'description' => 'Authenticates users by using encrypted passwords',
    'subtype' => 'processLoginDataBE,processLoginDataFE',
    'available' => true,
    'priority' => 60,
    // tx_svauth_sv1 has 50, t3sec_saltedpw has 55. This service must have higher priority!
    'quality' => 60,
    // tx_svauth_sv1 has 50. This service must have higher quality!
    'os' => '',
    'exec' => '',
    // Do not put a dependency on openssh here or service loading will fail!
    'className' => \TYPO3\CMS\Rsaauth\RsaAuthService::class
]);

// Add hook for user setup module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/setup/mod/index.php']['setupScriptHook']['rsaauth'] = \TYPO3\CMS\Rsaauth\Hook\UserSetupHook::class . '->getLoginScripts';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/setup/mod/index.php']['modifyUserDataBeforeSave']['rsaauth'] = \TYPO3\CMS\Rsaauth\Hook\UserSetupHook::class . '->decryptPassword';
// Add a hook to the FE login form (felogin system extension)
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['felogin']['loginFormOnSubmitFuncs']['rsaauth'] = \TYPO3\CMS\Rsaauth\Hook\FrontendLoginHook::class . '->loginFormHook';
// Add a hook to show Backend warnings
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['displayWarningMessages']['rsaauth'] = \TYPO3\CMS\Rsaauth\BackendWarnings::class;

// eID for FrontendLoginRsaPublicKey
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['RsaPublicKeyGenerationController'] = \TYPO3\CMS\Rsaauth\Controller\RsaPublicKeyGenerationController::class . '::processRequest';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class)->connect(
    \TYPO3\CMS\Backend\LoginProvider\UsernamePasswordLoginProvider::class,
    \TYPO3\CMS\Backend\LoginProvider\UsernamePasswordLoginProvider::SIGNAL_getPageRenderer,
    \TYPO3\CMS\Rsaauth\Slot\UsernamePasswordProviderSlot::class,
    'getPageRenderer'
);

// Register automatic decryption in DataHandler
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['rsaauth'] = \TYPO3\CMS\Rsaauth\Hook\DecryptionHook::class;

// Add own form element
$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1436965601] = [
    'nodeName' => 'rsaInput',
    'priority' => '70',
    'class' => \TYPO3\CMS\Rsaauth\Form\Element\RsaInputElement::class,
];


/**
 * Extension: belog
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/belog/ext_localconf.php
 */

$_EXTKEY = 'belog';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {
    $signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
    $signalSlotDispatcher->connect(
        \TYPO3\CMS\Backend\Backend\ToolbarItems\SystemInformationToolbarItem::class,
        'loadMessages',
        \TYPO3\CMS\Belog\Controller\SystemInformationController::class,
        'appendMessage'
    );
}


/**
 * Extension: beuser
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/beuser/ext_localconf.php
 */

$_EXTKEY = 'beuser';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauth.php']['logoff_pre_processing'][] = \TYPO3\CMS\Beuser\Hook\SwitchBackUserHook::class . '->switchBack';


/**
 * Extension: css_styled_content
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/css_styled_content/ext_localconf.php
 */

$_EXTKEY = 'css_styled_content';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Get the extension configuration
$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);

// Disable image positions that make no sense on CType=image (it leaves just "above left", "center" and "right")
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	TCEFORM.tt_content.imageorient.types.image.removeItems = 8,9,10,17,18,25,26
');

// Mark the delivered TypoScript templates as "content rendering template" (providing the hooks of "static template 43" = content (default))
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'cssstyledcontent/static/';
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'cssstyledcontent/static/v6.2/';

// Register for hook to show preview of tt_content element of CType="image" in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['image'] =
    \TYPO3\CMS\CssStyledContent\Hooks\PageLayoutView\ImagePreviewRenderer::class;

// Register for hook to show preview of tt_content element of CType="textpic" in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['textpic'] =
    \TYPO3\CMS\CssStyledContent\Hooks\PageLayoutView\TextpicPreviewRenderer::class;

// Register for hook to show preview of tt_content element of CType="text" in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['text'] =
    \TYPO3\CMS\CssStyledContent\Hooks\PageLayoutView\TextPreviewRenderer::class;

if (TYPO3_MODE === 'BE') {
    call_user_func(
        function ($extKey) {
            // Get the extension configuration
            $extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$extKey]);

            if (!isset($extConf['loadContentElementWizardTsConfig']) || (int)$extConf['loadContentElementWizardTsConfig'] === 1) {
                // Include new content elements to modWizards
                \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:css_styled_content/Configuration/PageTSconfig/NewContentElementWizard.ts">');
            }

            $dispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
            $dispatcher->connect(
                \TYPO3\CMS\Extensionmanager\Controller\ConfigurationController::class,
                'afterExtensionConfigurationWrite',
                \TYPO3\CMS\CssStyledContent\Hooks\TcaCacheClearing::class,
                'clearTcaCache'
            );
        },
        $_EXTKEY
    );
}


/**
 * Extension: felogin
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/felogin/ext_localconf.php
 */

$_EXTKEY = 'felogin';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Add a default TypoScript for the CType "login" (also replaces history login functionality)
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript('TYPO3.CMS.Felogin', 'constants', '
styles.content.loginform {
    # cat=content/cLogin; type=int+; label= PID of user archive: Enter the page-uid number (PID) of the folder where you keep your fe_users that are supposed to login on this site. This setting is necessary, if login is going to work!
  pid =
    # cat=content/cLogin; type=; label= Login template: Enter the path for the HTML template to be used
  templateFile = EXT:felogin/Resources/Private/Templates/FrontendLogin.html
}
', 'defaultContentRendering');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript('TYPO3.CMS.Felogin', 'setup', '
# Setting "felogin" plugin TypoScript
tt_content.login = COA
tt_content.login {
	10 =< lib.stdheader
	20 >
	20 =< plugin.tx_felogin_pi1
}
', 'defaultContentRendering');

// add login to new content element wizard
if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	mod.wizards.newContentElement.wizardItems.forms {
		elements.login {
			iconIdentifier = content-elements-login
			title = LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:forms_login_title
			description = LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:forms_login_description
			tt_content_defValues {
				CType = login
			}
		}
		show :=addToList(login)
	}
	');
}

// Page module hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['felogin'] = \TYPO3\CMS\Felogin\Hooks\CmsLayout::class;


/**
 * Extension: fluid_styled_content
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/fluid_styled_content/ext_localconf.php
 */

$_EXTKEY = 'fluid_styled_content';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Define TypoScript as content rendering template
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'fluidstyledcontent/Configuration/TypoScript/Static/';

// Register for hook to show preview of tt_content element of CType="textmedia" in page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['textmedia'] = \TYPO3\CMS\FluidStyledContent\Hooks\TextmediaPreviewRenderer::class;

if (TYPO3_MODE === 'BE') {
    call_user_func(
        function ($extKey) {
            // Get the extension configuration
            $extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$extKey]);

            if (!isset($extConf['loadContentElementWizardTsConfig']) || (int)$extConf['loadContentElementWizardTsConfig'] === 1) {
                // Include new content elements to modWizards
                \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:fluid_styled_content/Configuration/PageTSconfig/NewContentElementWizard.ts">');
            }

            $dispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
            $dispatcher->connect(
                \TYPO3\CMS\Extensionmanager\Controller\ConfigurationController::class,
                'afterExtensionConfigurationWrite',
                \TYPO3\CMS\FluidStyledContent\Hooks\TcaCacheClearing::class,
                'clearTcaCache'
            );
        },
        $_EXTKEY
    );
}


/**
 * Extension: form
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/form/ext_localconf.php
 */

$_EXTKEY = 'form';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Apply PageTSconfig
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:form/Configuration/PageTS/modWizards.ts">'
    );

    // Backend view
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['mailform'] =
        \TYPO3\CMS\Form\Hooks\PageLayoutView\MailformPreviewRenderer::class;
} else {
    // Handling of cObjects "FORM" and "FORM_INT"
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_content.php']['cObjTypeAndClass'][] = [
        'FORM',
        \TYPO3\CMS\Form\Hooks\ContentObjectHook::class
    ];
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_content.php']['cObjTypeAndClass'][] = [
        'FORM_INT',
        \TYPO3\CMS\Form\Hooks\ContentObjectHook::class
    ];

    // Extbase handling
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter(
        \TYPO3\CMS\Form\Domain\Property\TypeConverter\ArrayToValidationElementConverter::class
    );

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'TYPO3.CMS.Form',
        'Form',
        ['Frontend' => 'show, confirmation, dispatchConfirmationButtonClick, process, afterProcess'],
        ['Frontend' => 'show, confirmation, dispatchConfirmationButtonClick, process, afterProcess']
    );

    $signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
    $signalSlotDispatcher->connect(
        \TYPO3\CMS\Form\Domain\Builder\FormBuilder::class,
        'txFormHandleIncomingValues',
        \TYPO3\CMS\Form\Hooks\HandleIncomingFormValues::class,
        'handleIncomingFormValues'
    );
}


/**
 * Extension: impexp
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/impexp/ext_localconf.php
 */

$_EXTKEY = 'impexp';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/backend.php']['constructPostProcess'][] = 'TYPO3\\CMS\\Impexp\\Hook\\BackendControllerHook->addJavaScript';


/**
 * Extension: lowlevel
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/lowlevel/ext_localconf.php
 */

$_EXTKEY = 'lowlevel';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Setting up scripts that can be run from the cli_dispatch.phpsh script.
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['lowlevel_refindex'] = [
        function () {
            // Call the functionality
            if (in_array('-e', $_SERVER['argv']) || in_array('-c', $_SERVER['argv'])) {
                $testOnly = in_array('-c', $_SERVER['argv']);
                $refIndexObj = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Database\ReferenceIndex::class);
                list($headerContent, $bodyContent) = $refIndexObj->updateIndex($testOnly, !in_array('-s', $_SERVER['argv']));
                $bodyContent = str_replace('##LF##', LF, $bodyContent);
            } else {
                echo '
			Options:
			-c = Check refindex
			-e = Update refindex
			-s = Silent
			';
                die;
            }
        },
        '_CLI_lowlevel'
    ];
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['lowlevel_cleaner'] = [
        function () {
            $cleanerObj = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Lowlevel\CleanerCommand::class);
            $cleanerObj->cli_main($_SERVER['argv']);
        },
        '_CLI_lowlevel'
    ];
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['lowlevel_admin'] = [
        function () {
            $adminObj = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Lowlevel\AdminCommand::class);
            $adminObj->cli_main($_SERVER['argv']);
        },
        '_CLI_lowlevel'
    ];
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['missing_files'] = [\TYPO3\CMS\Lowlevel\MissingFilesCommand::class];
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['missing_relations'] = [\TYPO3\CMS\Lowlevel\MissingRelationsCommand::class];
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['double_files'] = [\TYPO3\CMS\Lowlevel\DoubleFilesCommand::class];
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['rte_images'] = [\TYPO3\CMS\Lowlevel\RteImagesCommand::class];
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['lost_files'] = [\TYPO3\CMS\Lowlevel\LostFilesCommand::class];
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['orphan_records'] = [\TYPO3\CMS\Lowlevel\OrphanRecordsCommand::class];
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['deleted'] = [\TYPO3\CMS\Lowlevel\DeletedRecordsCommand::class];
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['versions'] = [\TYPO3\CMS\Lowlevel\VersionsCommand::class];
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['cleanflexform'] = [\TYPO3\CMS\Lowlevel\CleanFlexformCommand::class];
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['lowlevel']['cleanerModules']['syslog'] = [\TYPO3\CMS\Lowlevel\SyslogCommand::class];
}


/**
 * Extension: recycler
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/recycler/ext_localconf.php
 */

$_EXTKEY = 'recycler';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Recycler\Task\CleanerTask::class] = [
    'extension' => 'recycler',
    'title' => 'LLL:EXT:recycler/Resources/Private/Language/locallang_tasks.xlf:cleanerTaskTitle',
    'description' => 'LLL:EXT:recycler/Resources/Private/Language/locallang_tasks.xlf:cleanerTaskDescription',
    'additionalFields' => \TYPO3\CMS\Recycler\Task\CleanerFieldProvider::class
];


/**
 * Extension: reports
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/reports/ext_localconf.php
 */

$_EXTKEY = 'reports';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Reports\Task\SystemStatusUpdateTask::class] = [
    'extension' => 'reports',
    'title' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_updateTaskTitle',
    'description' => 'LLL:EXT:reports/Resources/Private/Language/locallang_reports.xlf:status_updateTaskDescription',
    'additionalFields' => \TYPO3\CMS\Reports\Task\SystemStatusUpdateTaskNotificationEmailField::class
];

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['displayWarningMessages']['tx_reports_WarningMessagePostProcessor'] = \TYPO3\CMS\Reports\Report\Status\WarningMessagePostProcessor::class;


/**
 * Extension: scheduler
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/scheduler/ext_localconf.php
 */

$_EXTKEY = 'scheduler';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register the Scheduler as a possible key for CLI calls
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['cliKeys']['scheduler'] = [
    function () {
        $schedulerCliController = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Scheduler\Controller\SchedulerCliController::class);
        $schedulerCliController->run();
    },
    '_CLI_scheduler'
];
// Get the extensions's configuration
$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['scheduler']);
// If sample tasks should be shown,
// register information for the test and sleep tasks
if (!empty($extConf['showSampleTasks'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Example\TestTask::class] = [
        'extension' => 'scheduler',
        'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:testTask.name',
        'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:testTask.description',
        'additionalFields' => \TYPO3\CMS\Scheduler\Example\TestTaskAdditionalFieldProvider::class
    ];
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Example\SleepTask::class] = [
        'extension' => 'scheduler',
        'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:sleepTask.name',
        'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:sleepTask.description',
        'additionalFields' => \TYPO3\CMS\Scheduler\Example\SleepTaskAdditionalFieldProvider::class
    ];
}

// Add caching framework garbage collection task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\CachingFrameworkGarbageCollectionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:cachingFrameworkGarbageCollection.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:cachingFrameworkGarbageCollection.description',
    'additionalFields' => \TYPO3\CMS\Scheduler\Task\CachingFrameworkGarbageCollectionAdditionalFieldProvider::class
];

// Add task to index file in a storage
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\FileStorageIndexingTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageIndexing.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageIndexing.description',
    'additionalFields' => \TYPO3\CMS\Scheduler\Task\FileStorageIndexingAdditionalFieldProvider::class
];

// Add task for extracting metadata from files in a storage
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\FileStorageExtractionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageExtraction.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:fileStorageExtraction.description',
    'additionalFields' => \TYPO3\CMS\Scheduler\Task\FileStorageExtractionAdditionalFieldProvider::class

];

// Add recycler directory cleanup task. Windows is not supported
// because "filectime" does not change after moving a file
if (TYPO3_OS !== 'WIN') {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\RecyclerGarbageCollectionTask::class] = [
        'extension' => 'scheduler',
        'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:recyclerGarbageCollection.name',
        'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:recyclerGarbageCollection.description',
        'additionalFields' => \TYPO3\CMS\Scheduler\Task\RecyclerGarbageCollectionAdditionalFieldProvider::class
    ];
}

// Save any previous option array for table garbage collection task
// to temporary variable so it can be pre-populated by other
// extensions and LocalConfiguration/AdditionalConfiguration
$garbageCollectionTaskOptions = [];
if (is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options'])) {
    $garbageCollectionTaskOptions = $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options'];
}
// Initialize tables sub-array if not set already
if (!is_array($garbageCollectionTaskOptions['tables'])) {
    $garbageCollectionTaskOptions['tables'] = [];
}
// Add table garbage collection task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:tableGarbageCollection.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:tableGarbageCollection.description',
    'additionalFields' => \TYPO3\CMS\Scheduler\Task\TableGarbageCollectionAdditionalFieldProvider::class,
    'options' => $garbageCollectionTaskOptions
];
unset($garbageCollectionTaskOptions);

// Register sys_log and sys_history table in table garbage collection task
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options']['tables']['sys_log'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options']['tables']['sys_log'] = [
        'dateField' => 'tstamp',
        'expirePeriod' => 180
    ];
}

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options']['tables']['sys_history'])) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options']['tables']['sys_history'] = [
        'dateField' => 'tstamp',
        'expirePeriod' => 30
    ];
}

// Add task for optimizing database tables
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks'][\TYPO3\CMS\Scheduler\Task\OptimizeDatabaseTableTask::class] = [
    'extension' => 'scheduler',
    'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:optimizeDatabaseTable.name',
    'description' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang.xlf:optimizeDatabaseTable.description',
    'additionalFields' => \TYPO3\CMS\Scheduler\Task\OptimizeDatabaseTableAdditionalFieldProvider::class

];


/**
 * Extension: sys_note
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/sys_note/ext_localconf.php
 */

$_EXTKEY = 'sys_note';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Register "switchableControllerActions" manually because there is no plugin or module for sys_note available
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['extbase']['extensions']['SysNote']['modules']['Note']['controllers'] = [
    'Note' => [
        'actions' => ['list']
    ]
];

// Hook into the list module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['recordlist/Modules/Recordlist/index.php']['drawFooterHook']['sys_note'] = \TYPO3\CMS\SysNote\Hook\RecordListHook::class . '->render';
// Hook into the page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/db_layout.php']['drawFooterHook']['sys_note'] = \TYPO3\CMS\SysNote\Hook\PageHook::class . '->render';
// Hook into the info module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/web_info/class.tx_cms_webinfo.php']['drawFooterHook']['sys_note'] = \TYPO3\CMS\SysNote\Hook\InfoModuleHook::class . '->render';


/**
 * Extension: t3editor
 * File: /kunden/homepages/42/d696594703/htdocs/typo3/sysext/t3editor/ext_localconf.php
 */

$_EXTKEY = 't3editor';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

if (TYPO3_MODE === 'BE') {
    // Register hooks for tstemplate module
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['preStartPageHook'][] = \TYPO3\CMS\T3editor\Hook\TypoScriptTemplateInfoHook::class . '->preStartPageHook';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/tstemplate_info/class.tx_tstemplateinfo.php']['postOutputProcessingHook'][] = \TYPO3\CMS\T3editor\Hook\TypoScriptTemplateInfoHook::class . '->postOutputProcessingHook';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/t3editor/classes/class.tx_t3editor.php']['ajaxSaveCode']['tx_tstemplateinfo'] = \TYPO3\CMS\T3editor\Hook\TypoScriptTemplateInfoHook::class . '->save';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/t3editor/classes/class.tx_t3editor.php']['ajaxSaveCode']['file_edit'] = \TYPO3\CMS\T3editor\Hook\FileEditHook::class . '->save';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['preStartPageHook'][] = \TYPO3\CMS\T3editor\Hook\FileEditHook::class . '->preStartPageHook';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/file_edit.php']['preOutputProcessingHook'][] = \TYPO3\CMS\T3editor\Hook\FileEditHook::class . '->preOutputProcessingHook';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/file_edit.php']['postOutputProcessingHook'][] = \TYPO3\CMS\T3editor\Hook\FileEditHook::class . '->postOutputProcessingHook';
}

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1433089350] = [
    'nodeName' => 't3editor',
    'priority' => 40,
    'class' => \TYPO3\CMS\T3editor\Form\Element\T3editorElement::class,
];


/**
 * Extension: vhs
 * File: /kunden/homepages/42/d696594703/htdocs/typo3conf/ext/vhs/ext_localconf.php
 */

$_EXTKEY = 'vhs';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['vhs']['setup'] = unserialize($_EXTCONF);
if (!isset($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['vhs']['setup']['disableAssetHandling']) || !$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['vhs']['setup']['disableAssetHandling']) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['usePageCache'][] = 'FluidTYPO3\\Vhs\\Service\\AssetService';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-output'][] = 'FluidTYPO3\\Vhs\\Service\\AssetService->buildAllUncached';
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc'][] = 'FluidTYPO3\\Vhs\\Service\\AssetService->clearCacheCommand';
}

if (FALSE === is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['vhs_main'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['vhs_main'] = [
		'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\StringFrontend',
		'options' => [
			'defaultLifetime' => 804600
		],
		'groups' => ['pages', 'all']
	];
}

if (FALSE === is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['vhs_markdown'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['vhs_markdown'] = [
		'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\StringFrontend',
		'options' => [
			'defaultLifetime' => 804600
		],
		'groups' => ['pages', 'all']
	];
}

// add navigtion hide, url and urltype to fix the rendering of external url doktypes
$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= (TRUE === empty($GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields']) ? '' : ',') . 'nav_hide,url,urltype';


/**
 * Extension: affiliate_manager
 * File: /kunden/homepages/42/d696594703/htdocs/typo3conf/ext/affiliate_manager/ext_localconf.php
 */

$_EXTKEY = 'affiliate_manager';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


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


/**
 * Extension: static_info_tables
 * File: /kunden/homepages/42/d696594703/htdocs/typo3conf/ext/static_info_tables/ext_localconf.php
 */

$_EXTKEY = 'static_info_tables';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

// Get the extensions's configuration
$extConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['static_info_tables']);

// Including Extbase configuration
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:static_info_tables/Configuration/TypoScript/Extbase/setup.txt">');

// Register cache static_info_tables
if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['static_info_tables'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['static_info_tables'] = [];
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['static_info_tables']['groups'] = ['all'];
}
if (!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['static_info_tables']['frontend'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['static_info_tables']['frontend'] = \TYPO3\CMS\Core\Cache\Frontend\PhpFrontend::class;
}
if (!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['static_info_tables']['backend'])) {
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['static_info_tables']['backend'] = \TYPO3\CMS\Core\Cache\Backend\FileBackend::class;
}

// Configure clear cache post processing for extended domain model
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['static_info_tables'] = \SJBR\StaticInfoTables\Cache\ClassCacheManager::class . '->reBuild';

// Names of static entities
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['static_info_tables']['entities'] = ['Country', 'CountryZone', 'Currency', 'Language', 'Territory'];

// Register cached domain model classes autoloader
require_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('static_info_tables') . 'Classes/Cache/CachedClassLoader.php');
\SJBR\StaticInfoTables\Cache\CachedClassLoader::registerAutoloader();

// Possible label fields for different languages. Default as last.
$labelTable = [
	'static_territories' => [
		'label_fields' => [
			'tr_name_##', 'tr_name_en',
		],
		'isocode_field' => [
			'tr_iso_##',
		]
	],
	'static_countries' => [
		'label_fields' => [
			'cn_short_##', 'cn_short_en',
		],
		'isocode_field' => [
			'cn_iso_##',
		]
	],
	'static_country_zones' => [
		'label_fields' => [
			'zn_name_##', 'zn_name_local',
		],
		'isocode_field' => [
			'zn_code', 'zn_country_iso_##',
		]
	],
	'static_languages' => [
		'label_fields' => [
			'lg_name_##', 'lg_name_en',
		],
		'isocode_field' => [
			'lg_iso_##', 'lg_country_iso_##',
		]
	],
	'static_currencies' => [
		'label_fields' => [
			'cu_name_##', 'cu_name_en',
		],
		'isocode_field' => [
			'cu_iso_##',
		]
	]
];

if (isset($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['static_info_tables']['tables']) && is_array($GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['static_info_tables']['tables'])) {
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['static_info_tables']['tables'] = array_merge($labelTable, $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['static_info_tables']['tables']);
} else {
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['static_info_tables']['tables'] = $labelTable;
}

// Add data handling hook to manage ISO codes redundancies on records
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = \SJBR\StaticInfoTables\Hook\Core\DataHandling\ProcessDataMap::class;

// Register slot for AfterExtensionInstall signal
$dispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
$dispatcher->connect(\TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class, 'afterExtensionInstall', \SJBR\StaticInfoTables\Slot\Extensionmanager\AfterExtensionInstall::class, 'executeUpdateScript');

// Enabling the Static Info Tables Manager module
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['static_info_tables']['enableManager'] = isset($extConf['enableManager']) ? $extConf['enableManager'] : '0';

// Make the extension version and constraints available when creating language packs and to other extensions
$emConfUtility = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extensionmanager\Utility\EmConfUtility::class);
$emConf = $emConfUtility->includeEmConf(['key' => 'static_info_tables', 'siteRelPath' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::siteRelPath('static_info_tables')]);
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['static_info_tables']['version'] = $emConf['static_info_tables']['version'];
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['static_info_tables']['constraints'] = $emConf['static_info_tables']['constraints'];

unset($labelTable);
unset($extConf);
unset($dispatcher);
unset($emConfUtility);
unset($emConf);


/**
 * Extension: femanager
 * File: /kunden/homepages/42/d696594703/htdocs/typo3conf/ext/femanager/ext_localconf.php
 */

$_EXTKEY = 'femanager';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'In2code.femanager',
    'Pi1',
    [
        'User' => 'list, show, fileUpload, fileDelete, validate, loginAs',
        'New' => 'create, new, confirmCreateRequest, createStatus',
        'Edit' => 'edit, update, delete, confirmUpdateRequest',
        'Invitation' => 'new, create, edit, update, delete, status'
    ],
    [
        'User' => 'list, fileUpload, fileDelete, validate, loginAs',
        'New' => 'create, new, confirmCreateRequest, createStatus',
        'Edit' => 'edit, update, delete, confirmUpdateRequest',
        'Invitation' => 'new, create, edit, update, delete'
    ]
);

// eID for File Upload (FE)
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['femanagerFileUpload'] = 'EXT:femanager/Classes/Eid/FileUploadEid.php';

// eID for File Delete (FE)
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['femanagerFileDelete'] = 'EXT:femanager/Classes/Eid/FileDeleteEid.php';

// eID for Field Validation (FE)
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['femanagerValidate'] = 'EXT:femanager/Classes/Eid/ValidateEid.php';

// eID for FeUser simulation (FE)
$GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['femanagerLoginAs'] = 'EXT:femanager/Classes/Eid/LoginAsEid.php';


/**
 * Extension: tt_address
 * File: /kunden/homepages/42/d696594703/htdocs/typo3conf/ext/tt_address/ext_localconf.php
 */

$_EXTKEY = 'tt_address';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
	options.saveDocNew.tt_address_group = 1
	options.saveDocNew.tt_address = 1
');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    $_EXTKEY,
    'pi1/class.tx_ttaddress_pi1.php',
    '_pi1',
    'list_type',
    1
);

if (TYPO3_MODE === 'BE') {
    $settings = \TYPO3\TtAddress\Utility\SettingsUtility::getSettings();
    if ($settings->isStoreBackwardsCompatName()) {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] =
            'TYPO3\\TtAddress\\Hooks\\DataHandler\\BackwardsCompatibilityNameFormat';
    }
}

// Update scripts
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['tt_address_group'] = 'TYPO3\\TtAddress\\Updates\\AddressGroupToSysCategory';
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['tt_address_image'] = 'TYPO3\\TtAddress\\Updates\\ImageToFileReference';


/**
 * Extension: ods_ajaxmailsubscription
 * File: /kunden/homepages/42/d696594703/htdocs/typo3conf/ext/ods_ajaxmailsubscription/ext_localconf.php
 */

$_EXTKEY = 'ods_ajaxmailsubscription';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined ('TYPO3_MODE')) die ('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43($_EXTKEY,'pi1/class.tx_odsajaxmailsubscription_pi1.php','_pi1','list_type',0);



/**
 * Extension: easylogin2
 * File: /kunden/homepages/42/d696594703/htdocs/typo3conf/ext/easylogin2/ext_localconf.php
 */

$_EXTKEY = 'easylogin2';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'DIX.' . $_EXTKEY,
	'Easylogin',
	array(
		'Dixeasylogin' => 'index, providerselected, verify',
		
	),
	// non-cacheable actions
	array(
		'Dixeasylogin' => 'index, providerselected, verify',
		
	)
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService(
	$_EXTKEY,
	'auth' /* sv type */,
	'DIX\\Easylogin2\\Service\\AuthenticationService' /* sv key */,
	array(
		'title' => 'Authentication service',
		'description' => 'Authentication service for easylogin2',
		'subtype' => 'getUserFE,authUserFE',
		'available' => true,
		'priority' => 80,
		'quality' => 80,
		'os' => '',
		'exec' => '',
		'className' => 'DIX\\Easylogin2\\Service\\AuthenticationService',
	)
);

// http://resterland.ch/intern/sitenews/news/detail/News/request-parameters-could-not-be-validated-chash-comparison-failed.html
$GLOBALS['TYPO3_CONF_VARS']['FE']['pageNotFoundOnCHashError'] = 0;

// adding default realurl configuration (like in the realurl manual).
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration'][] = 'EXT:easylogin2/Classes/Helper/Realurl.php:tx_easylogin2_realurl->autoconfgen';


/**
 * Extension: gkh_rss_import
 * File: /kunden/homepages/42/d696594703/htdocs/typo3conf/ext/gkh_rss_import/ext_localconf.php
 */

$_EXTKEY = 'gkh_rss_import';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

  ## Extending TypoScript from static template uid=43 to set up userdefined tag:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($_EXTKEY,'editorcfg','
	tt_content.CSS_editor.ch.tx_gkhrssimport_pi1 = < plugin.tx_gkhrssimport_pi1.CSS_editor
',43);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43($_EXTKEY,'pi1/class.tx_gkhrssimport_pi1.php','_pi1','list_type',1);



/**
 * Extension: metaseo
 * File: /kunden/homepages/42/d696594703/htdocs/typo3conf/ext/metaseo/ext_localconf.php
 */

$_EXTKEY = 'metaseo';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or exit;

$confArr = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['metaseo']);

// ##############################################
// BACKEND
// ##############################################
if (TYPO3_MODE == 'BE') {
    // Field validations
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tce']['formevals']['tx_metaseo_backend_validation_float']
        = 'EXT:metaseo/Classes/Backend/Validator/ValidatorImport.php';

    /*
     * BackendCompliantTsfeController suppresses redirect http headers sent by TypoScriptFrontendController
     * by faking default scheme for pages processed by TypoScriptFrontendController (use for Ajax requests only)
     */
    if (isset($_SERVER['HTTP_X_TX_METASEO_AJAX'])) { //original header is 'X-Tx-Metaseo-Ajax' (prefixed by webserver)
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']
            ['TYPO3\\CMS\\Frontend\\Controller\\TypoScriptFrontendController'] = array(
                'className' => 'Metaseo\\Metaseo\\Frontend\\Controller\\BackendCompliantTsfeController'
            );
    }
}

// ##############################################
// SEO
// ##############################################

$GLOBALS['TYPO3_CONF_VARS']['FE']['pageOverlayFields']
    .= ',tx_metaseo_pagetitle,tx_metaseo_pagetitle_rel,tx_metaseo_pagetitle_prefix,'
    . 'tx_metaseo_pagetitle_suffix,tx_metaseo_canonicalurl';
$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields']
    .= ',tx_metaseo_pagetitle_prefix,tx_metaseo_pagetitle_suffix,tx_metaseo_inheritance';

// Typolink post proc hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_content.php']['typoLink_PostProc'][]
    = 'Metaseo\\Metaseo\\Hook\\SitemapIndexLinkHook->hook_linkParse';

// HTTP Header extension
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['isOutputting']['metaseo']
    = 'Metaseo\\Metaseo\\Hook\\HttpHook->main';


// ##############################################
// SITEMAP
// ##############################################
// Frontend indexed
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['pageIndexing'][]
    = 'Metaseo\\Metaseo\\Hook\\SitemapIndexPageHook';

// ##############################################
// HOOKS
// ##############################################


// EXT:tt_news
if (!empty($confArr['enableIntegrationTTNews'])) {
    // Metatag fetch hook
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tt_news']['extraItemMarkerHook']['metaseo']
        = 'Metaseo\\Metaseo\\Hook\\Extension\\TtnewsExtension';
}

// EXT:news
if (!empty($confArr['enableIntegrationNews'])) {
    // Metatag fetch hook
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['news']['hooks']['listAction']['metaseo']
        = 'Metaseo\\Metaseo\\Hook\\Extension\\NewsExtension->listActionHook';
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['news']['hooks']['detailAction']['metaseo']
        = 'Metaseo\\Metaseo\\Hook\\Extension\\NewsExtension->detailActionHook';
}

// ############################################################################
// CLI
// ############################################################################

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][]
    = 'Metaseo\\Metaseo\\Command\\MetaseoCommandController';

// ##############################################
// SCHEDULER
// ##############################################

// Cleanup task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']
['Metaseo\\Metaseo\\Scheduler\\Task\\GarbageCollectionTask'] = array(
    'extension'   => $_EXTKEY,
    'title'       => 'Sitemap garbage collection',
    'description' => 'Cleanup old sitemap entries'
);

// Sitemap XML task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['Metaseo\\Metaseo\\Scheduler\\Task\\SitemapXmlTask']
    = array(
        'extension'   => $_EXTKEY,
        'title'       => 'Sitemap.xml builder',
        'description' => 'Build sitemap xml as static file (in uploads/tx_metaseo/sitemap-xml/)'
    );

// Sitemap TXT task
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['Metaseo\\Metaseo\\Scheduler\\Task\\SitemapTxtTask']
    = array(
        'extension'   => $_EXTKEY,
        'title'       => 'Sitemap.txt builder',
        'description' => 'Build sitemap txt as static file (in uploads/tx_metaseo/sitemap-txt/)'
    );


/**
 * Extension: news
 * File: /kunden/homepages/42/d696594703/htdocs/typo3conf/ext/news/ext_localconf.php
 */

$_EXTKEY = 'news';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


defined('TYPO3_MODE') or die();

$boot = function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'GeorgRinger.news',
        'Pi1',
        [
            'News' => 'list,detail,selectedList,dateMenu,searchForm,searchResult',
            'Category' => 'list',
            'Tag' => 'list',
        ],
        [
            'News' => 'searchForm,searchResult',
        ]
    );

    // Page module hook
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info']['news' . '_pi1']['news'] =
        \GeorgRinger\News\Hooks\PageLayoutView::class . '->getExtensionSummary';

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc']['news_clearcache'] =
        \GeorgRinger\News\Hooks\DataHandler::class . '->clearCachePostProc';

    // Edit restriction for news records
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass']['news'] =
        \GeorgRinger\News\Hooks\DataHandler::class;

    // FormEngine: Rendering of fields
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms.php']['getSingleFieldClass']['news'] =
        \GeorgRinger\News\Hooks\FormEngine::class;

    // FormEngine: Rendering of the whole FormEngine
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms.php']['getMainFieldsClass']['news'] =
        \GeorgRinger\News\Hooks\FormEngine::class;

    // Modify flexform values
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['getFlexFormDSClass']['news'] =
        \GeorgRinger\News\Hooks\BackendUtility::class;
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing']['news']
        = \GeorgRinger\News\Hooks\BackendUtility::class;

    // Modify flexform fields since core 8.5 via formEngine: Inject a data provider between TcaFlexPrepare and TcaFlexProcess
    if (\TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version) >= 8005000) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][\GeorgRinger\News\Backend\FormDataProvider\NewsFlexFormManipulation::class] = [
            'depends' => [
                \TYPO3\CMS\Backend\Form\FormDataProvider\TcaFlexPrepare::class,
            ],
            'before' => [
                \TYPO3\CMS\Backend\Form\FormDataProvider\TcaFlexProcess::class,
            ],
        ];
    }

    // Hide content elements in page module for 7
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/class.db_list.inc']['makeQueryArray']['news'] =
        \GeorgRinger\News\Hooks\Backend\RecordListQueryHook::class;
    // Hide content elements in page module for 8
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['TYPO3\\CMS\\Recordlist\\RecordList\\DatabaseRecordList']['buildQueryParameters'][]
        = \GeorgRinger\News\Hooks\Backend\RecordListQueryHook8::class;

    // Inline records hook
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tceforms_inline.php']['tceformsInlineHook']['news'] =
        \GeorgRinger\News\Hooks\InlineElementHook::class;

    // Xclass InlineRecordContainer
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\TYPO3\CMS\Backend\Form\Container\InlineRecordContainer::class] = [
        'className' => \GeorgRinger\News\Xclass\InlineRecordContainerForNews::class,
    ];

    /* ===========================================================================
        Custom cache, done with the caching framework
    =========================================================================== */
    if (!is_array($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_news_category'])) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_news_category'] = [];
    }
    // Define string frontend as default frontend, this must be set with TYPO3 4.5 and below
    // and overrides the default variable frontend of 4.6
    if (!isset($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_news_category']['frontend'])) {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_news_category']['frontend'] = \TYPO3\CMS\Core\Cache\Frontend\StringFrontend::class;
    }

    /* ===========================================================================
        Add TSconfig
    =========================================================================== */
    // For linkvalidator
    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('linkvalidator')) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:news/Configuration/TSconfig/Page/mod.linkvalidator.txt">');
    }
    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('guide')) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('  <INCLUDE_TYPOSCRIPT: source="DIR:EXT:news/Configuration/TSconfig/Tours" extensions="ts">');
    }

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
    <INCLUDE_TYPOSCRIPT: source="FILE:EXT:news/Configuration/TSconfig/ContentElementWizard.txt">
    <INCLUDE_TYPOSCRIPT: source="FILE:EXT:news/Configuration/TSconfig/Administration.txt">
    ');

    /* ===========================================================================
        Hooks
    =========================================================================== */
    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('realurl')) {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration']['news'] =
            \GeorgRinger\News\Hooks\RealUrlAutoConfiguration::class . '->addNewsConfig';
    }

    // Register cache frontend for proxy class generation
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['news'] = [
        'frontend' => \TYPO3\CMS\Core\Cache\Frontend\PhpFrontend::class,
        'backend' => \TYPO3\CMS\Core\Cache\Backend\FileBackend::class,
        'groups' => [
            'all',
            'system',
        ],
        'options' => [
            'defaultLifetime' => 0,
        ]
    ];

    $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['formDataGroup']['tcaDatabaseRecord'][\GeorgRinger\News\Backend\FormDataProvider\NewsRowInitializeNew::class] = [
        'depends' => [
            \TYPO3\CMS\Backend\Form\FormDataProvider\DatabaseRowInitializeNew::class,
        ]
    ];
    \GeorgRinger\News\Utility\ClassLoader::registerAutoloader();

    if (TYPO3_MODE === 'BE') {
        $icons = [
            'apps-pagetree-folder-contains-news' => 'ext-news-folder-tree.svg',
            'ext-news-wizard-icon' => 'plugin_wizard.svg',
            'ext-news-type-default' => 'news_domain_model_news.svg',
            'ext-news-type-internal' => 'news_domain_model_news_internal.svg',
            'ext-news-type-external' => 'news_domain_model_news_external.svg',
            'ext-news-tag' => 'news_domain_model_tag.svg',
            'ext-news-link' => 'news_domain_model_link.svg'
        ];
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        foreach ($icons as $identifier => $path) {
            $iconRegistry->registerIcon(
                $identifier,
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => 'EXT:news/Resources/Public/Icons/' . $path]
            );
        }
    }

    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('dd_googlesitemap')) {
        $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['dd_googlesitemap']['sitemap']['txnews']
            = \GeorgRinger\News\Hooks\TxNewsSitemapGenerator::class . '->main';
    }

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = \GeorgRinger\News\Command\NewsImportCommandController::class;
};

$boot();
unset($boot);


/**
 * Extension: powermail
 * File: /kunden/homepages/42/d696594703/htdocs/typo3conf/ext/powermail/ext_localconf.php
 */

$_EXTKEY = 'powermail';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

call_user_func(function () {

    /**
     * Enable caching for show action in form controller
     */
    $uncachedFormActions = 'form';
    if (\In2code\Powermail\Utility\ConfigurationUtility::isEnableCachingActive()) {
        $uncachedFormActions = '';
    }
    $uncachedFormActions .= ', create, confirmation, optinConfirm, marketing';

    /**
     * Include Frontend Plugins for Powermail
     */
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'In2code.powermail',
        'Pi1',
        [
            'Form' => 'form, create, confirmation, optinConfirm, marketing'
        ],
        [
            'Form' => $uncachedFormActions
        ]
    );
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'In2code.powermail',
        'Pi2',
        [
            'Output' => 'list, show, edit, update, export, rss, delete'
        ],
        [
            'Output' => 'list, edit, update, export, rss, delete'
        ]
    );

    /**
     * Hook to show PluginInformation under a tt_content element in page module of type powermail
     */
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['powermail'] =
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('powermail') .
        'Classes/Hook/PluginPreview.php:In2code\Powermail\Hooks\PluginPreview';

    /**
     * Hook for initially filling the marker field in backend
     */
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] =
        'EXT:powermail/Classes/Hook/CreateMarker.php:In2code\Powermail\Hook\CreateMarker';

    /**
     * Hook to extend the FlexForm
     */
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_befunc.php']['getFlexFormDSClass'][] =
        'EXT:powermail/Classes/Hook/FlexFormManipulationHook.php:In2code\Powermail\Hook\FlexFormManipulationHook';

    /**
     * Hook to extend the FlexForm since core version 8.5
     */
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing']['powermail'] =
        In2code\Powermail\Hook\FlexFormManipulationHook::class;

    /**
     * JavaScript evaluation of TCA fields
     */
    $TYPO3_CONF_VARS['SC_OPTIONS']['tce']['formevals']['\In2code\Powermail\Tca\EvaluateEmail'] =
        'EXT:powermail/Classes/Tca/EvaluateEmail.php';

    /**
     * eID to get location from geo coordinates
     */
    $GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['powermailEidGetLocation'] =
        'EXT:powermail/Classes/Eid/GetLocationEid.php';

    /**
     * eID to store marketing information
     */
    $GLOBALS['TYPO3_CONF_VARS']['FE']['eID_include']['powermailEidMarketing'] =
        'EXT:powermail/Classes/Eid/MarketingEid.php';

    /**
     * CommandController for powermail tasks
     */
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] =
        \In2code\Powermail\Command\TaskCommandController::class;

    /**
     * SignalSlot to convert old tablenames to new tablenames automaticly after installing
     */
    $dispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
    $dispatcher->connect(
        \TYPO3\CMS\Extensionmanager\Utility\InstallUtility::class,
        'afterExtensionInstall',
        \In2code\Powermail\Slot\ConvertTableNames::class,
        'convert'
    );
});


/**
 * Extension: social_auth
 * File: /kunden/homepages/42/d696594703/htdocs/typo3conf/ext/social_auth/ext_localconf.php
 */

$_EXTKEY = 'social_auth';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}


$composerAutoloadFile = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Resources/Private/Librairies/autoload.php';
if (file_exists($composerAutoloadFile)) {
    require_once($composerAutoloadFile);
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'MV.' . $_EXTKEY,
    'Pi1',
    array(
        'Auth' => 'list, connect, endpoint',
    ),
    // non-cacheable actions
    array(
        'Auth' => 'connect, endpoint'
    )
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService($_EXTKEY,
    'auth' /* sv type */,
    'SocialAuthenticationService' /* sv key */,
    array(
        'title' => 'Social Authentification Service',
        'description' => 'authentication for users from social providers (facebook, twitter...)',
        'subtype' => 'authUserFE,getUserFE',
        'available' => true,
        'priority' => 82, /* will be called before default typo3 authentication service */
        'quality' => 82,
        'os' => '',
        'exec' => '',
        'className' => 'MV\\SocialAuth\\Service\\SocialAuthenticationService',
    )
);

$GLOBALS['TYPO3_CONF_VARS']['SVCONF']['auth']['setup']['FE_fetchUserIfNoSession'] = '1';

$extConfig = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['social_auth']);

if ($extConfig['providers.']['facebook.']['enabled'] || $extConfig['providers.']['google.']['enabled'] || $extConfig['providers.']['twitter.']['enabled']) {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauth.php']['logoff_post_processing'][$_EXTKEY] = 'MV\SocialAuth\Hooks\LogOffHook->postProcessing';
    //add marker to felogin if is loaded
    if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('felogin')) {
        $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['felogin']['postProcContent'][$_EXTKEY] = 'MV\SocialAuth\Hooks\FeLoginHook->postProcContent';
    }
}


/**
 * Extension: uncache
 * File: /kunden/homepages/42/d696594703/htdocs/typo3conf/ext/uncache/ext_localconf.php
 */

$_EXTKEY = 'uncache';
$_EXTCONF = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY];


if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Core\\Cache\\Frontend\\PhpFrontend'] =
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['t3lib_cache_frontend_PhpFrontend'] =
	array('className' => 'FluidTYPO3\\Uncache\\Override\\Core\\Cache\\Frontend\\PhpFrontend');
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend'] =
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['t3lib_cache_frontend_VariableFrontend'] =
	array('className' => 'FluidTYPO3\\Uncache\\Override\\Core\\Cache\\Frontend\\VariableFrontend');
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Core\\Cache\\Frontend\\StringFrontend'] =
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['t3lib_cache_frontend_StringFrontend'] =
	array('className' => 'FluidTYPO3\\Uncache\\Override\\Core\\Cache\\Frontend\\StringFrontend');
$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Core\\Cache\\CacheManager'] =
	array('className' => 'FluidTYPO3\\Uncache\\Override\\Core\\Cache\\CacheManager');

if (TRUE === isset($GLOBALS['typo3CacheManager'])) {
	if (TRUE === version_compare(TYPO3_branch, '6.2.0', '>=')) {
		$configurations = \TYPO3\CMS\Extbase\Reflection\ObjectAccess::getProperty($GLOBALS['typo3CacheManager'], 'cacheConfigurations', TRUE);
		$caches = \TYPO3\CMS\Extbase\Reflection\ObjectAccess::getProperty($GLOBALS['typo3CacheManager'], 'caches', TRUE);
		$GLOBALS['typo3CacheManager'] = new \FluidTYPO3\Uncache\Override\Core\Cache\CacheManager();
		$GLOBALS['typo3CacheManager']->setCacheConfigurations($configurations);
		\TYPO3\CMS\Extbase\Reflection\ObjectAccess::setProperty($GLOBALS['typo3CacheManager'], 'caches', $caches, TRUE);
		\TYPO3\CMS\Core\Utility\GeneralUtility::setSingletonInstance('TYPO3\\CMS\\Core\\Cache\\CacheManager', $GLOBALS['typo3CacheManager']);
		unset($configurations, $caches);
	} else {
		$typo3CacheManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Core\Cache\CacheManager');
		$configurations = \TYPO3\CMS\Extbase\Reflection\ObjectAccess::getProperty($typo3CacheManager, 'cacheConfigurations', TRUE);
		if (FALSE === isset($configurations['extbase_datamapfactory_datamap'])) {
			$configurations['extbase_datamapfactory_datamap'] = \TYPO3\CMS\Extbase\Reflection\ObjectAccess::getProperty($typo3CacheManager, 'defaultCacheConfiguration', TRUE);
		}
		if (FALSE === isset($configurations['extbase_typo3dbbackend_tablecolumns'])) {
			$configurations['extbase_typo3dbbackend_tablecolumns'] = \TYPO3\CMS\Extbase\Reflection\ObjectAccess::getProperty($typo3CacheManager, 'defaultCacheConfiguration', TRUE);
		}
		if (FALSE === isset($configurations['fluid_template'])) {
			$configurations['fluid_template'] = $configurations['cache_core'];
		}
		if (FALSE === isset($configurations['extbase_typo3dbbackend_queries'])) {
			$configurations['extbase_typo3dbbackend_queries'] = array();
		}
		$caches = \TYPO3\CMS\Extbase\Reflection\ObjectAccess::getProperty($typo3CacheManager, 'caches', TRUE);
		$typo3CacheManager = new \FluidTYPO3\Uncache\Override\Core\Cache\CacheManager();
		$typo3CacheManager->setCacheConfigurations($configurations);
		\TYPO3\CMS\Extbase\Reflection\ObjectAccess::setProperty($typo3CacheManager, 'caches', $caches, TRUE);
		\TYPO3\CMS\Core\Utility\GeneralUtility::setSingletonInstance('TYPO3\CMS\Core\Cache\CacheManager', $typo3CacheManager);
		unset($configurations, $caches);
	}
}


#