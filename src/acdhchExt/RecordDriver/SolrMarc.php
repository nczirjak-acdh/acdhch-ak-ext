<?php

namespace AcdhchExt;

class SolrMarc extends \AkSearch\RecordDriver\SolrMarc {
    public function getThumbnail($size = 'small'){
	return 'https://fundament.acdh.oeaw.ac.at/common-assets/images/acdh_logo.svg';
    }
}