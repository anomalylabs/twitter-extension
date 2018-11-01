<?php namespace Anomaly\TwitterExtension\Twitter;

use Abraham\TwitterOAuth\TwitterOAuth;

/**
 * Class TwitterConnection
 *
 * This is a singleton bound to the
 * pre-configured TwitterOauth class.
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class TwitterConnection
{

    /**
     * The twitter connection.
     *
     * @var TwitterOAuth
     */
    protected $connection;

    /**
     * Create a new TwitterConnection instance.
     *
     * @param TwitterOAuth $connection
     */
    public function __construct(TwitterOAuth $connection)
    {
        $this->connection = $connection;
    }

    /**
     * Get the connection.
     *
     * @return TwitterOAuth
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Pass methods through.
     *
     * @param $name
     * @param $arguments
     * @return mixed
     */
    function __call($name, $arguments)
    {
        return call_user_func_array([$this->connection, $name], $arguments);
    }

}
