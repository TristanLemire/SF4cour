<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/artist_list' => [[['_route' => 'list', '_controller' => 'App\\Controller\\ArtistController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/label_page' => [[['_route' => 'label_page', '_controller' => 'App\\Controller\\LabelController::index'], null, null, null, false, false, null]],
        '/ranking_news' => [[['_route' => 'ranking', '_controller' => 'App\\Controller\\RankingController::index'], null, null, null, false, false, null]],
        '/record_page' => [[['_route' => 'record_page', '_controller' => 'App\\Controller\\RecordController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
