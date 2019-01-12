<?php
if (!defined('TYPO3_MODE')) {
  die ('Access denied.');
}

# RTE-Config bekannt machen
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['custom'] = 'EXT:xyz_template/Configuration/RTE/Custom.yaml';
