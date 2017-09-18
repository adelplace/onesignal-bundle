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
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Kernel;

/**
 * @author Alexandre Delplace alexandre.delplacemille@gmail.com
 */
class AdelplaceOneSignalExtensionTest extends KernelTestCase
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setUp()
    {
        self::bootKernel();

        $this->container = self::$kernel->getContainer();
    }

    public function testServiceRegistration()
    {
        $this->assertInstanceOf(OneSignal::class, $this->container->get('onesignal.api'));
    }

    public function testConfigurationMapping()
    {
        $expectedConfig = new Config();
        $expectedConfig->setApplicationId('my application id');
        $expectedConfig->setApplicationAuthKey('my application auth key');
        $expectedConfig->setUserAuthKey('my user auth key');

        $this->assertEquals($expectedConfig, $this->container->get('onesignal.api')->getConfig());
    }
}
