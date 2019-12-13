<?php

/***********************************************************************
 * Extension Manager/Repository config file for ext template_extension *
 ***********************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Template-Extension',
    'description' => 'Extension for site template',
    'category' => 'template',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99'
        ],
    ],
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Dirk Buddenbrock',
    'author_email' => 'Dirk Buddenbrock',
    'author_company' => 'buddenbrock media productions',
    'version' => '0.000.0',
];
