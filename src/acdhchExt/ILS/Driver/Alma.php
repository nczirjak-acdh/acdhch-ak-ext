<?php

namespace AcdhchExt\ILS\Driver;

use SimpleXMLElement;

class Alma extends \AkSearch\ILS\Driver\Alma implements
    \VuFind\Db\Table\DbTableAwareInterface,
    \VuFind\I18n\Translator\TranslatorAwareInterface
{
    use AlmaTrait;
    use \VuFind\Db\Table\DbTableAwareTrait;
    use \VuFind\I18n\Translator\TranslatorAwareTrait;

    /**
     * Get Holding
     *
     * This is responsible for retrieving the holding information of a certain
     * record.
     *
     * @param string $id      The record id to retrieve the holdings for
     * @param array  $patron  Patron data
     * @param array  $options Additional options
     *
     * @return array On success an array with the key "total" containing the total
     * number of items for the given bib id, and the key "holdings" containing an
     * array of holding information each one with these keys: id, source,
     * availability, status, location, reserve, callnumber, duedate, returnDate,
     * number, barcode, item_notes, item_id, holding_id, addLink, description
     */
    public function getHolding($id, $patron = null, array $options = [])
    {
        echo "__holding__";
        
    }

    
}
