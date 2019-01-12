<?php
/***************
 * Add Content Elements to List
 */
$backupCTypeItems = $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'] = [
  [
    'LLL:EXT:xyz_template/Resources/Private/Language/locallang_ce.xlf:content_elements',
    '--div--',
  ],
  [
    'LLL:EXT:xyz_template/Resources/Private/Language/locallang_ce.xlf:text',
    'xyz_text',
    'ce-xyz-text',
  ],
];

foreach ($backupCTypeItems as $key => $value) {
  $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = $value;
}
unset($key);
unset($value);
unset($backupCTypeItems);

$tca = [
  'types' => [
    # Add here ce configuration
    'xyz_text' => [
      'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                      header,
                      bodytext,
                     --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                     --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                     --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access',
      'columnsOverrides' => [
        'bodytext' => [
          'defaultExtras' => 'richtext[*]:rte_transform[mode=ts_links]',
        ]
      ]
    ],
  ],

  'columns' => [
    # Add Configuration of undertables ind content elements
    #'tx_xyz_template_extra_item' => [
    #  'label' => 'LLL:EXT:xyz_template/Resources/Private/Language/locallang_ce.xlf:tx_xyz_template_extra_item.title',
    #  'config' => [
    #    'type' => 'inline',
    #    'foreign_table' => 'tx_xyz_template_extra_item',
    #    'foreign_field' => 'parent',
    #    'appearance' => [
    #      'useSortable' => true,
    #      'showSynchronizationLink' => true,
    #      'showAllLocalizationLink' => true,
    #      'showPossibleLocalizationRecords' => true,
    #      'showRemovedLocalizationRecords' => false,
    #      'expandSingle' => true,
    #      'enabledControls' => [
    #        'localize' => true,
    #      ],
    #    ],
    #    'behaviour' => [
    #      'allowLanguageSynchronization' => true,
    #      'mode' => 'select',
    #      'localizeChildrenAtParentLocalization' => true,
    #    ],
    #  ],
    #],
  ],
];

// Add content elements
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes'] = array_merge(
  $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes'],
  array(
    'xyz_text' => 'ce-xyz-text',
  )
);

$GLOBALS['TCA']['tt_content'] = array_replace_recursive($GLOBALS['TCA']['tt_content'], $tca);

$GLOBALS['TCA']['tt_content']['columns']['imagewidth']['config']['range']['upper'] = 1400;
$GLOBALS['TCA']['tt_content']['columns']['fe_group']['config']['size'] = 10;
$GLOBALS['TCA']['tt_content']['columns']['fe_group']['config']['maxitems'] = 50;
