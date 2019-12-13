<?php
defined('TYPO3_MODE') || die();

use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
use \TYPO3\CMS\Core\Imaging\IconRegistry;

/* Add default RTE configuration for wiw_template */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['custom'] = 'EXT:template_extension/Configuration/YAML/RTE/Custom.yaml';

/* Register Icons */
$iconRegistry = GeneralUtility::makeInstance(IconRegistry::class);
/* In this array you can add content element names. The registration happens automaticly in the next step. */
$icons = [
    'text'
];
foreach ($icons as $icon) {
    $iconRegistry->registerIcon(
        'ce-' . $icon,
        SvgIconProvider::class,
        ['source' => 'EXT:' . $extKey . '/Resources/Public/Icons/ContentElements/ce-' . $icon . '.svg']
    );
}
