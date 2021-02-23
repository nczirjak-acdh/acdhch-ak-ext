<?php

namespace AcdhchExt;

class Module {

    public function getAutoloaderConfig() {
        return [];
    }

    public function getConfig() {
        return [
            'vufind' => [
                'plugin_managers' => [
                    'recorddriver' => [
                        //'factories' => [
                            //'AcdhchExt\RecordDriver\SolrDefault' => 'VuFind\RecordDriver\SolrDefaultFactory',
                            //'AcdhchExt\RecordDriver\SolrMarc' => 'VuFind\RecordDriver\SolrDefaultFactory'
                        //],
                        'aliases' => [
                            //'VuFind\RecordDriver\SolrDefault' => 'AkSearch\RecordDriver\SolrDefault',
                            'VuFind\RecordDriver\SolrMarc' => 'AcdhchExt\RecordDriver\SolrMarc'
                        ],                        
                    ],
                ],
            ],
        ];
    }

}
