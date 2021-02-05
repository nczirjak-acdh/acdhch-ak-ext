<?php
namespace acdhchExt;

class Module {
    public function getAutoloaderConfig() {
        return [];
    }

    public function getConfig() {
        return [
            'vufind' => [
                'plugin_managers' => [
                    'recorddriver' => [
                        'aliases' => [
                            'VuFind\RecordDriver\SolrMarc' => 'acdhchExt\SolrMarc',
                        ],
                    ],
                ],
            ],
        ];
    }
}