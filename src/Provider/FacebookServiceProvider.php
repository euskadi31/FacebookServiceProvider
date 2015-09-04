<?php
/*
 * This file is part of the FacebookServiceProvider.
 *
 * (c) Axel Etcheverry <axel@etcheverry.biz>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Euskadi31\Silex\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Facebook;

/**
 * Facebook integration for Silex.
 *
 * @author Axel Etcheverry <axel@etcheverry.biz>
 */
class FacebookServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function register(Container $app)
    {
        $app['facebook.options'] = [
            'app_id'                => null,
            'app_secret'            => null,
            'default_graph_version' => 'v2.4',
            'default_access_token'  => null
        ];

        $app['facebook'] = function($app) {
            return new Facebook\Facebook($app['facebook.options']);
        };
    }
}
