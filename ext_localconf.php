<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$TYPO3_CONF_VARS['FE']['eID_include']['dfcontentslide'] = 'EXT:df_contentslide/class.loadcontent.php';

// set global storage pid
$dfToolsExtConf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['df_contentslide']);
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['df_contentslide']['useJQuery'] = $dfToolsExtConf['useJQuery'] ? 1 : 0;

?>