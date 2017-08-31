<?php

/**
 * This file is part of the Adelplace\OneSignalBundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 **/

namespace Adelplace\OneSignalBundle\Tests\DependencyInjection;

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
        $this->assertInstanceOf(\OneSignal\OneSignal::class, $this->container->get('onesignal.api'));
    }
}
