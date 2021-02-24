<?php

namespace AcdhchExt\RecordDriver;

class SolrMarc extends \AkSearch\RecordDriver\SolrMarc {

    public function __construct() {
        //$this->getSummarizedHoldings();
    }

    public function getThumbnail($size = 'small') {
        //var_dump($_SERVER);
        return '/vufind/themes/AcdhchTheme/images/acdh_logo.png';
    }

    /**
     * The holdings tab on the Record view
     * FE: http://127.0.0.1/vufind/Record/990003051340504498?lng=en
     */
    public function getSummarizedHoldings() {

        
    }

    
    
    
}
