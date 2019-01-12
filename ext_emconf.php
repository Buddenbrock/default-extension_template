<?php

/***************************************************************
 * Extension Manager/Repository config file.
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
  'title' => 'Template-Extension: EXTENSIONNAME',
  'description' => 'TYPO3 Webseite SITENAME',
  'category' => 'template',
  'version' => '0.000.0',
  'constraints' => array(
    'depends' => array(
      'typo3' => '8.6.0-8.99.99',
      'vhs' => '5.0.0-5.0.99'
    ),
  ),
  'state' => 'beta',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'author' => 'Dirk Buddenbrock',
  'author_email' => 'db@buddenbrock.nrw',
  'author_company' => 'buddenbrock Media Productions',
);
