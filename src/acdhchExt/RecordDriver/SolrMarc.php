<?php

namespace AcdhchExt\RecordDriver;

class SolrMarc extends \AkSearch\RecordDriver\SolrMarc {

    public function __construct() {
        //$this->getSummarizedHoldings();
    }
    
    public function getThumbnail($size = 'small') {
        return 'https://arche.acdh.oeaw.ac.at/browser/themes/contrib/arche-theme/logo.svg';
    }

    public function getSummarizedHoldings() {
        echo "childban";
    }

}
