<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.iaPb2Hm' shared service.

return $this->privates['.service_locator.iaPb2Hm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Controller\\ArtistController::index' => ['privates', '.service_locator.sOAwh3q', 'get_ServiceLocator_SOAwh3qService.php', true],
    'App\\Controller\\ArtistController:index' => ['privates', '.service_locator.sOAwh3q', 'get_ServiceLocator_SOAwh3qService.php', true],
], [
    'App\\Controller\\ArtistController::index' => '?',
    'App\\Controller\\ArtistController:index' => '?',
]);
