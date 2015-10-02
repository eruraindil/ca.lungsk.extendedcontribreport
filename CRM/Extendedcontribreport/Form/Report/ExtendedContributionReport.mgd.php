<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 =>
  array (
    'name' => 'CRM_Extendedcontribreport_Form_Report_ExtendedContributionReport',
    'entity' => 'ReportTemplate',
    'params' =>
    array (
      'version' => 3,
      'label' => 'Extended Contribution Report',
      'description' => 'Extended Contribution Report (ca.lungsk.extendedcontribreport)',
      'class_name' => 'CRM_Extendedcontribreport_Form_Report_ExtendedContributionReport',
      'report_url' => 'ca.lungsk.extendedcontribreport/extendedcontributionreport',
      'component' => 'CiviContribute',
    ),
  ),
);
