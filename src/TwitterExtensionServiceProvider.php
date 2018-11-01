<?php namespace Anomaly\TwitterExtension;

use Abraham\TwitterOAuth\TwitterOAuth;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\TwitterExtension\Twitter\TwitterConnection;
use Anomaly\TwitterExtension\Twitter\TwitterExtensionPlugin;
use Illuminate\Contracts\Config\Repository;

/**
 * Class TwitterExtensionServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class TwitterExtensionServiceProvider extends AddonServiceProvider
{

    /**
     * The addon plugins.
     *
     * @var array
     */
    protected $plugins = [
        TwitterExtensionPlugin::class,
    ];

    /**
     * Boot the addon.
     *
     * @param Repository $config
     */
    public function boot(Repository $config)
    {

        /**
         * Setup our pre-configured TwitterOAuth instance alias.
         */
        if ($config->get('anomaly.extension.twitter::twitter.consumer_key')) {
            $this->app->singleton(
                TwitterConnection::class,
                function () use ($config) {
                    return new TwitterOAuth(
                        $config->get('anomaly.extension.twitter::twitter.consumer_key'),
                        $config->get('anomaly.extension.twitter::twitter.consumer_secret'),
                        $config->get('anomaly.extension.twitter::twitter.access_token'),
                        $config->get('anomaly.extension.twitter::twitter.access_token_secret')
                    );
                }
            );
        }
    }

}
