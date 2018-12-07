<?php

/**
 * This file is part of the Adelplace\OneSignalBundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 **/

namespace Adelplace\OneSignalBundle\Tests\DependencyInjection;

use OneSignal\Config;
use OneSignal\OneSignal;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @author Alexandre Delplace alexandre.delplacemille@gmail.com
 */
class AdelplaceOneSignalExtensionTest extends WebTestCase
{
    public function setUp()
    {
        self::bootKernel();
    }

    public function testServiceRegistration()
    {
        $this->assertInstanceOf(OneSignal::class, self::$container->get('onesignal.api'));
    }

    public function testConfigurationMapping()
    {
        $expectedConfig = new Config();
        $expectedConfig->setApplicationId('my application id');
        $expectedConfig->setApplicationAuthKey('my application auth key');
        $expectedConfig->setUserAuthKey('my user auth key');

        $this->assertEquals($expectedConfig, self::$container->get('onesignal.api')->getConfig());
    }
}
