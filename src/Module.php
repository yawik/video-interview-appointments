<?php

/**
 * YAWIK Video Interview Appointments
 *
 * @see       https://github.com/yawik/video-interview-appointments for the canonical source repository
 * @copyright https://github.com/yawik/video-interview-appointments/blob/master/COPYRIGHT
 * @license   https://github.com/yawik/video-interview-appointments/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Via;

use Core\ModuleManager\Feature\VersionProviderInterface;
use Core\ModuleManager\Feature\VersionProviderTrait;
use Core\ModuleManager\ModuleConfigLoader;
use Laminas\ModuleManager\Feature\ConfigProviderInterface;
use Laminas\Mvc\MvcEvent;
use Laminas\View\Model\ViewModel;
use Via\Form\AppointmentForm;

/**
 * @author Mathias Gelhausen
 */
class Module implements ConfigProviderInterface, VersionProviderInterface
{
    use VersionProviderTrait;

    public const VERSION = '0.0.0';

    public function getConfig()
    {
        return ModuleConfigLoader::load(__DIR__ . '/../config/');
    }

    public function onBootstrap(MvcEvent $event)
    {
        $application = $event->getApplication();
        $services = $application->getServiceManager();
        $sharedEvents = $application->getEventManager()->getSharedManager();
        $sharedEvents->attach(
            'Applications',
            'application.detail.actionbuttons',
            function ($event) use ($services) {
                $model = new ViewModel([
                    'application' => $event->getTarget(),
                    'form' => $services->get('forms')->get(AppointmentForm::class),
                ]);
                $model->setTemplate('via/application-button');

                return $model;
            }
        );
    }
}
