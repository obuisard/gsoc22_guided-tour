<?php

/**
 * @package     Joomla.Plugin
 * @subpackage  System.guidedtours
 *
 * @copyright   (C) 2023 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\Application\ApplicationInterface;
use Joomla\CMS\Extension\PluginInterface;
use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\CMS\WebAsset\WebAssetRegistry;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Joomla\Event\DispatcherInterface;
use Joomla\Plugin\System\GuidedTours\Extension\GuidedTours;

return new class implements ServiceProviderInterface
{
    /**
     * Registers the service provider with a DI container.
     *
     * @param   Container  $container  The DI container.
     *
     * @return  void
     *
     * @since   __DEPLOY_VERSION__
     */
    public function register(Container $container)
    {
        $container->set(
            PluginInterface::class,
            function (Container $container) {

                $dispatcher = $container->get(DispatcherInterface::class);

                $plugin = new GuidedTours(
                    $dispatcher,
                    (array) PluginHelper::getPlugin('system', 'guidedtours')
                );

                $plugin->setApplication(Factory::getApplication());

                $wa = $container->get(WebAssetRegistry::class);

                $wa->addRegistryFile('media/plg_system_guidedtours/joomla.asset.json');

                return $plugin;
            }
        );
    }
};
