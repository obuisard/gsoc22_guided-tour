<?php

/**
 * @package     Joomla.Plugin
 * @subpackage  Captcha.recaptcha
 *
 * @copyright   (C) 2022 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Captcha\Google\HttpBridgePostRequestMethod;
use Joomla\CMS\Extension\PluginInterface;
use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Joomla\Event\DispatcherInterface;
use Joomla\Plugin\Captcha\ReCaptcha\Extension\ReCaptcha;

return new class () implements ServiceProviderInterface {
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
                $plugin = new ReCaptcha(
                    $container->get(DispatcherInterface::class),
                    (array) PluginHelper::getPlugin('captcha', 'recaptcha'),
                    new HttpBridgePostRequestMethod()
                );
                $plugin->setApplication(Factory::getApplication());

                return $plugin;
            }
        );
    }
};
