<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "gkh_rss_import".
 *
 * Auto generated 31-01-2017 03:23
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'gkh RSS Import',
  'description' => 'Imports a RSS feed and show the content on a FE page.',
  'category' => 'plugin',
  'version' => '5.0.0',
  'state' => 'stable',
  'uploadfolder' => true,
  'createDirs' => 'uploads/tx_gkhrssimport/',
  'clearcacheonload' => true,
  'author' => 'Gert Kaae Hansen',
  'author_email' => 'gertkh@gmail.com',
  'author_company' => '',
  'constraints' => 
  array (
    'depends' => '',
    array (
      'typo3' => '7.0.0-7.9.99',
      '' => '',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'user' => 'tyksak',
  'comment' => 'Support for 7.x.x',
);

