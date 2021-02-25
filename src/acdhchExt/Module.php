<?php

namespace AcdhchExt;

class Module {

    public function getAutoloaderConfig() {
        return [];
    }

    public function getConfig() {
        return [
            'controllers' => [
                'factories' => [
                    //'AkSearch\Controller\AlmaController' => 'VuFind\Controller\AbstractBaseFactory',
                    'AcdhchExt\Controller\AlmaController' => 'AkSearch\Controller\AlmaController',
                    'AkSearch\Controller\AuthorController' => 'VuFind\Controller\AbstractBaseFactory',
                    'AkSearch\Controller\BrowseController' => 'VuFind\Controller\AbstractBaseWithConfigFactory',
                    'AkSearch\Controller\ContentController' => 'VuFind\Controller\AbstractBaseFactory',
                    'AkSearch\Controller\InstallController' => 'VuFind\Controller\AbstractBaseFactory',
                    'AkSearch\Controller\MyResearchController' => 'VuFind\Controller\AbstractBaseFactory',
                    'AkSearch\Controller\SearchController' => 'VuFind\Controller\AbstractBaseFactory'
                ],
                'aliases' => [
                    //'Author' => 'AkSearch\Controller\AuthorController',
                    //'author' => 'AkSearch\Controller\AuthorController',
                    'Author' => 'AcdhchExt\Controller\AuthorController',
                    'author' => 'AcdhchExt\Controller\AuthorController',
                    //'Content' => 'AkSearch\Controller\ContentController',
                    //'content' => 'AkSearch\Controller\ContentController',
                    'Content' => 'AcdhchExt\Controller\ContentController',
                    'content' => 'AcdhchExt\Controller\ContentController',
                    //'VuFind\Controller\AlmaController' => 'AkSearch\Controller\AlmaController',
                    'AkSearch\Controller\AlmaController' => 'AcdhchExt\Controller\AlmaController',
                    //'VuFind\Controller\BrowseController' => 'AkSearch\Controller\BrowseController',
                    'AkSearch\Controller\BrowseController' => 'AcdhchExt\Controller\BrowseController',
                    //'VuFind\Controller\InstallController' => 'AkSearch\Controller\InstallController',
                    'AkSearch\Controller\InstallController' => 'AcdhchExt\Controller\InstallController',
                    //'VuFind\Controller\MyResearchController' => 'AkSearch\Controller\MyResearchController',
                    'AkSearch\Controller\MyResearchController' => 'AcdhchExt\Controller\MyResearchController',
                    //'VuFind\Controller\SearchController' => 'AkSearch\Controller\SearchController',
                    'AkSearch\Controller\SearchController' => 'AcdhchExt\Controller\SearchController'
                ]
            ],
            'controller_plugins' => [
                'factories' => [
                    'AkSearch\Controller\Plugin\NewItems' => 'AkSearch\Controller\Plugin\NewItemsFactory'
                ],
                'aliases' => [
                    'newItems' => 'AkSearch\Controller\Plugin\NewItems'
                ],
            ],
            'vufind' => [
                'plugin_managers' => [
                    'recorddriver' => [
                        'factories' => [
                        //'AcdhchExt\RecordDriver\SolrDefault' => 'VuFind\RecordDriver\SolrDefaultFactory',
                        //'AcdhchExt\RecordDriver\SolrMarc' => 'VuFind\RecordDriver\SolrDefaultFactory'
                        //'AcdhchExt\RecordDriver\SolrMarc' => 'VuFind\RecordDriver\SolrDefaultFactory'
                        ],
                        'aliases' => [
                            //'VuFind\RecordDriver\SolrDefault' => 'AkSearch\RecordDriver\SolrDefault',
                            'VuFind\RecordDriver\SolrMarc' => 'AcdhchExt\RecordDriver\SolrMarc'
                        ],
                        'delegators' => [
                            'AcdhchExt\RecordDriver\SolrMarc' => [
                                'AkSearch\RecordDriver\IlsAwareDelegatorFactory'
                            ]
                        ]
                    ],
                    'recordtab' => [
                        'factories' => [
                            'AcdhchExt\RecordTab\Description' => 'AkSearch\RecordTab\Description',
                            'AcdhchExt\RecordTab\HoldingsILS' => 'AkSearch\RecordTab\HoldingsILS',
                            'AcdhchExt\RecordTab\Parts' => 'AkSearch\RecordTab\Parts',
                            'AcdhchExt\RecordTab\Provenance' => 'AkSearch\RecordTab\Provenance',
                            'AcdhchExt\RecordTab\StaffViewArray' => 'AkSearch\RecordTab\StaffViewArray',
                            'AcdhchExt\RecordTab\StaffViewMARC' => 'AkSearch\RecordTab\StaffViewMARC'
                        ],
                        'aliases' => [
                            'description' => 'AcdhchExt\RecordTab\Description',
                            'holdingsils' => 'AcdhchExt\RecordTab\HoldingsILS',
                            'parts' => 'AcdhchExt\RecordTab\Parts',
                            'provenance' => 'AcdhchExt\RecordTab\Provenance',
                            'staffviewarray' => 'AcdhchExt\RecordTab\StaffViewArray',
                            'staffviewmarc' => 'AcdhchExt\RecordTab\StaffViewMARC'
                        ]
                    ],
                    'ils_driver' => [
                        'factories' => [
                            'AcdhchExt\ILS\Driver\Alma' => 'AkSearch\ILS\Driver\Alma'
                        ],
                        'aliases' => [
                            'AkSearch\ILS\Driver\Alma' => 'AcdhchExt\ILS\Driver\Alma'
                        ]
                    ],
                ],
            ],
        ];
    }

}
