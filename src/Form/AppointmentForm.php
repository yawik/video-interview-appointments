<?php

/**
 * YAWIK Video Interview Appointments
 *
 * @see       https://github.com/yawik/video-interview-appointments for the canonical source repository
 * @copyright https://github.com/yawik/video-interview-appointments/blob/master/COPYRIGHT
 * @license   https://github.com/yawik/video-interview-appointments/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Via\Form;

use Core\Form\Form;
use Core\Form\ViewPartialProviderInterface;
use Core\Form\ViewPartialProviderTrait;

/**
 * TODO: description
 *
 * @author Mathias Gelhausen
 * TODO: write tests
 */
class AppointmentForm extends Form implements ViewPartialProviderInterface
{
    use ViewPartialProviderTrait;

    protected $defaultPartial = 'via/form/appointment-form';

    public function init()
    {
        $this->setName('via-appointment-form');
        $this->add([
            'name' => 'date',
            'type' => 'Core/Datepicker',
            'options' => [
                'label' => /*@translate*/ 'Date',
                'rowClass' => 'form-group',
            ],
            'attributes' => [
                'data-date-locale' => locale_get_default(),
            ],
        ]);

        $this->add([
            'name' => 'time',
            'type' => 'text',
            'options' => [
                'label' => /*@translate*/ 'Time',
                'rowClass' => 'form-group',
            ],
            'attributes' => [
                'placeholder' => 'HH:ii (e.g. 12:00, 14:35)',
            ],
        ]);

        $this->add([
            'name' => 'summary',
            'type' => 'text',
            'options' => [
                'label' => /*@translate*/ 'Summary',
                'rowClass' => 'form-group',
            ]
        ]);

        $this->add([
            'name' => 'description',
            'type' => 'textarea',
            'options' => [
                'label' => /*@translate*/ 'Description',
                'rowClass' => 'form-group',
            ]
        ]);
    }
}
