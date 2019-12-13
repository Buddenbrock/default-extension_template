<?php
/***************
 * Add Content Elements to List
 */
$backupCTypeItems = $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'] = [
  [
    'LLL:EXT:template_extension/Resources/Private/Language/locallang_ce.xlf:content_elements',
    '--div--',
  ],
  [
    'LLL:EXT:template_extension/Resources/Private/Language/locallang_ce.xlf:text',
    'ce_text',
    'ce-text',
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
    'ce_text' => [
      'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                      header,
                      bodytext,
                     --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                     --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                     --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access',
      'columnsOverrides' => [
        'bodytext' => [
          'config' => [
            'enableRichtext' => true,
            'richtextConfiguration' => 'default'
          ],
        ]
      ]
    ],

  ],

  'columns' => [
    # Add Configuration of undertables ind content elements
    #'tx_template_extra_item' => [
    #  'label' => 'LLL:EXT:template_extension/Resources/Private/Language/locallang_ce.xlf:extra.title',
    #  'config' => [
    #    'type' => 'inline',
    #    'foreign_table' => 'tx_template_extra_item',
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
    #  ],
    #],
  ],

  'palettes' => []
];

// Add content elements
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes'] = array_merge(
  $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes'],
  array(
    'ce_text' => 'ce-text',
  )
);

$GLOBALS['TCA']['tt_content'] = array_replace_recursive($GLOBALS['TCA']['tt_content'], $tca);

$GLOBALS['TCA']['tt_content']['columns']['imagewidth']['config']['range']['upper'] = 1400;
$GLOBALS['TCA']['tt_content']['columns']['fe_group']['config']['size'] = 10;
$GLOBALS['TCA']['tt_content']['columns']['fe_group']['config']['maxitems'] = 50;
