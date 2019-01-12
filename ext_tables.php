<?php
call_user_func(
  function ($extKey) {
    if (!defined('TYPO3_MODE')) {
      die('Access denied.');
    }

    # TypoScript-Static-Template im Template-Reiter "Enthält" bekannt machen
    TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'XYZ Website');

    # TSConfig-Datei einbinden
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
      $extKey,
      'Configuration/PageTS/setup.txt',
      'XYZ Website'
    );

    # Register Icons
    if (TYPO3_MODE === 'BE') {
      /** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
      $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
      $icons = [
          'text'
      ];
      foreach ($icons as $icon) {
          $iconRegistry->registerIcon(
              'ce-xyz-' . $icon,
              \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
              ['source' => 'EXT:' . $extKey . '/Resources/Public/Icons/ContentElements/' . $icon . '.svg']
          );
      }
    }

  # Selbst erstellte Tabellen erlauben
  #\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_xyz_template_extra_item');
  },
  'xyz_template'
);
