<?php

require_once(t3lib_extMgm::extPath('additional_reports') . 'Classes/class.tx_additionalreports_util.php');
$reports = tx_additionalreports_util::getReportsList();

$extensionPath = t3lib_extMgm::extPath('additional_reports');

$autoload = array();
$autoload['tx_additionalreports_main'] = $extensionPath . 'Classes/class.tx_additionalreports_main.php';
$autoload['tx_additionalreports_util'] = $extensionPath . 'Classes/class.tx_additionalreports_util.php';
$autoload['tx_additionalreports_report'] = $extensionPath . 'Classes/class.tx_additionalreports_report.php';

foreach ($reports as $report) {
	$autoload['tx_additionalreports_' . $report] = $extensionPath . 'reports/reports_' . $report . '/class.tx_additionalreports_' . $report . '.php';
}

return $autoload;

?>