<?php



namespace ElasticExporttradebyteDE;



use Plenty\Modules\DataExchange\Services\ExportPresetContainer;

use Plenty\Plugin\DataExchangeServiceProvider;



/**

 * Class ElasticExporttradebyteDEServiceProvider

 * @package ElasticExporttradebyteDE

 */

class ElasticExporttradebyteDEServiceProvider extends DataExchangeServiceProvider

{

    /**

     * Abstract function for registering the service provider.

     */

    public function register()

    {



    }



    /**

     * Adds the export format to the export container.

     *

     * @param ExportPresetContainer $container

     */

    public function exports(ExportPresetContainer $container)

    {

        $container->add(

            'tradebyteDE',

            'ElasticExporttradebyteDE\ResultField\tradebyteDE',

            'ElasticExporttradebyteDE\Generator\tradebyteDE',

            '',

            true,

            true

        );

    }

}
