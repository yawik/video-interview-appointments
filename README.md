YAWIK Video Interview Appointments
========

Make and send appointments to a video interview with an applicant. 


In conjunction with a jitsi server, creates a unique conference room, and send its URL and a calender
event in iCal Format to the applicant and to the recruiter.

Requirements
------------

running [YAWIK](https://github.com/cross-solution/YAWIK)


Installation
------------

Require a dependency via composer.

```bash
composer require yawik/video-interviewappointments
```

Enable the module for the Zend module manager via creating the `via.module.php` file in the `/config/autoload` directory with the following content.

```php
<?php
return [
    'Via'
];
```

Configuration
-------------


Development
-------
1.  Clone project
```sh
$ git clone git@github.com:yawik/video-interview-appointments.git /path/to/yawik-video-interview-appointments
```

2. Install dependencies:
```sh
$ composer install
```

3. Run PHPUnit Tests
```sh
$ ./vendor/bin/phpunit
```

Licence
-------

MIT
