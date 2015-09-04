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

use Euskadi31\Silex\Provider\FacebookServiceProvider;
use Silex\Application;

class FacebookProviderTest extends \PHPUnit_Framework_TestCase
{
    public function testRegister()
    {
        $app = new Application;

        $app->register(new FacebookServiceProvider);

        $app['facebook.options'] = [
            'app_id'        => 1337,
            'app_secret'    => 'foo_secret'
        ];

        $this->assertInstanceOf('\Facebook\Facebook', $app['facebook']);
    }
}
