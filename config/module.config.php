<?php

/**
 * YAWIK Video Interview Invitations
 *
 * @see       https://github.com/yawik/video-interview-invitations for the canonical source repository
 * @copyright https://github.com/yawik/video-interview-invitations/blob/master/COPYRIGHT
 * @license   https://github.com/yawik/video-interview-invitations/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Via;

use Laminas\ServiceManager\Factory\InvokableFactory;

$viewDir = realpath(__DIR__ . '/../view');

return [
    'router' => [
        'routes' => [
            'lang' => [
                'child_routes' => [
                    'recruiter-modal' => [
                        'type' => 'Literal',
                        'options' => [
                            'route' => '/via/recruiter-modal',
                            'defaults' => [
                                'controller' => Controller\AppointmentController::class,
                                'action' => 'recruiter-modal',
                            ],
                        ],
                        'may_terminate' => true
                    ],
                ],
            ],
        ],
    ],

    'controllers' => [
        'factories' => [
            Controller\AppointmentController::class => Controller\AppointmentControllerFactory::class
        ],
    ],

    'forms' => [
        'factories' => [
            Form\AppointmentForm::class => InvokableFactory::class,
        ],
    ],

    'view_manager' => [
        'template_map' => [
            'via/application-button' => "$viewDir/application-button.phtml",
            'via/form/appointment-form' => "$viewDir/form/appointment-form.phtml",
        ],
    ],

    'forms' => [
        'factories' => [
            Form\AppointmentForm::class => InvokableFactory::class,
        ],
    ],
];
