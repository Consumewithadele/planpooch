<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "sr_feuser_register".
 *
 * Auto generated 29-01-2017 15:18
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Front End User Registration',
  'description' => 'A self-registration variant of Kasper Skårhøj\'s Front End User Admin extension.',
  'category' => 'plugin',
  'state' => 'stable',
  'uploadfolder' => true,
  'createDirs' => 'uploads/tx_srfeuserregister',
  'clearCacheOnLoad' => 1,
  'author' => 'Stanislas Rolland',
  'author_email' => 'typo3@sjbr.ca',
  'author_company' => 'SJBR',
  'version' => '5.0.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '7.6.0-8.99.99',
      'felogin' => '7.6.0-8.99.99',
      'rsaauth' => '7.6.0-8.99.99',
      'saltedpasswords' => '7.6.0-8.99.99',
      'static_info_tables' => '6.4.2-6.4.99',
    ),
    'conflicts' => 
    array (
      'germandates' => '0.0.0-99.99.99',
      'rlmp_language_detection' => '0.0.0-99.99.99',
      'newloginbox' => '0.0.0-99.99.99',
      'kb_md5fepw' => '0.0.0-99.99.99',
      'srfeuserregister_t3secsaltedpw' => '0.0.0-99.99.99',
      'patch1822' => '0.0.0-99.99.99',
      'cc_random_image' => '0.0.0-99.99.99',
    ),
    'suggests' => 
    array (
      'sr_freecap' => '2.4.0-2.4.99',
      'direct_mail' => '5.1.0-5.9.99',
    ),
  ),
  'clearcacheonload' => true,
);

