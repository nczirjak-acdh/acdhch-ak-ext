<?php

namespace AcdhchExt\Module\Configuration;

// Show PHP errors:
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(- 1);
//$config = array();

$config = [
    'vufind' => [
        'plugin_managers' => [
            
            'recorddriver' => [
                'factories' => [
                    //'AcdhchExt\RecordDriver\SolrDefault' => 'AkSearch\RecordDriver\SolrDefault',
                    //'AcdhchExt\RecordDriver\SolrMarc' => 'AkSearch\RecordDriver\SolrMarc'
                ],
                'aliases' => [
                    'VuFind\RecordDriver\SolrMarc' => 'AcdhchExt\RecordDriver\SolrMarc',
                    'VuFind\RecordDriver\SolrDefault' => 'AcdhchExt\RecordDriver\SolrDefault',
                    //'VuFind\RecordDriver\SolrMarc' => 'AcdhchExt\RecordDriver\SolrMarc'
                ],
                
                'delegators' => [
                //    'AkSearch\RecordDriver\SolrMarc' => ['AkSearch\RecordDriver\IlsAwareDelegatorFactory' ]
                ]
            ],
        ],
    ],
];


$staticRoutes = [
    'Install/FixLoanHistoryTable', 'MyResearch/ChangeUserdata'
];

$routeGenerator = new \VuFind\Route\RouteGenerator();
$routeGenerator->addStaticRoutes($config, $staticRoutes);

return $config;
