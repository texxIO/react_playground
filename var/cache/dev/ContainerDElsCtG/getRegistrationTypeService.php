<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Form\Type\RegistrationType' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Form/Type/RegistrationFormType.php';
include_once $this->targetDirs[3].'/src/Form/Type/RegistrationType.php';

return $this->privates['App\\Form\\Type\\RegistrationType'] = new \App\Form\Type\RegistrationType('App\\Entity\\User');
