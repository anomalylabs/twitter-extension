<?php namespace Anomaly\TwitterExtension\Twitter;

use Abraham\TwitterOAuth\TwitterOAuth;
use Anomaly\Streams\Platform\Addon\Plugin\Plugin;
use Anomaly\Streams\Platform\Addon\Plugin\PluginCriteria;
use Anomaly\Streams\Platform\Support\Collection;

/**
 * Class TwitterExtensionPlugin
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class TwitterExtensionPlugin extends Plugin
{

    /**
     * Get the functions.
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction(
                'twitter',
                function ($method) {
                    return new PluginCriteria(
                        'get',
                        function (Collection $options, TwitterConnection $connection) use ($method) {

                            /* @var TwitterOAuth $connection */
                            return $connection->get($method, $options->all());
                        }
                    );
                }
            ),
        ];
    }
}
