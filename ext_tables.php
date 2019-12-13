<?php
defined('TYPO3_MODE') || die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript',
    'Template'
);

ExtensionManagementUtility::registerPageTSConfigFile(
    $_EXTKEY,
    'Configuration/PageTS/setup.txt',
    'Template'
);


/* Allow Custom Records on Standard Pages */
/*
 * $allowTables = [
 *     'tx_template_extra_item',
 * ];
 *
 * foreach ($allowTables as $allowTable) {
 *     ExtensionManagementUtility::allowTableOnStandardPages(
 *         $allowTable
 *     );
 * }
 */
