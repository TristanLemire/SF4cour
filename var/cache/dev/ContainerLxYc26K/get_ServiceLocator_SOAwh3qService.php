<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.sOAwh3q' shared service.

return $this->privates['.service_locator.sOAwh3q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'artistRepo' => ['privates', 'App\\Repository\\ArtistRepository', 'getArtistRepositoryService.php', true],
], [
    'artistRepo' => 'App\\Repository\\ArtistRepository',
]);
