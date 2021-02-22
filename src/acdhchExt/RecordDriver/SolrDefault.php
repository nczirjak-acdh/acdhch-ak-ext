<?php


namespace AcdhchExt\RecordDriver;

/**
 * AK: Extending default model for Solr records -- used when a more specific model
 * based on the record_format field cannot be found.
 *
 * This should be used as the base class for all Solr-based record models.
 *
 * @category AKsearch
 * @package  RecordDrivers
 * @author   Michael Birkner <michael.birkner@akwien.at>
 * @license  https://opensource.org/licenses/gpl-2.0.php GNU General Public License
 * @link     https://vufind.org/wiki/development:plugins:record_drivers Wiki
 *
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 */
class SolrDefault extends \AkSearch\RecordDriver\SolrDefault
{

}
