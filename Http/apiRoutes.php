<?php

use Illuminate\Routing\Router;

/** @var $router Router */
$router->group(['prefix' => '/translation', 'middleware' => 'api.token'], function (Router $router) {
    $router->post('update', [
        'uses' => 'TranslationController@update',
        'as' => 'api.translation.translations.update',
        'middleware' => 'token-can:api.translation.translations.update',
    ]);
    $router->post('clearCache', [
        'uses' => 'TranslationController@clearCache',
        'as' => 'api.translation.translations.clearCache',
        'middleware' => 'token-can:api.translation.translations.clearCache',
    ]);
    $router->post('revisions', [
        'uses' => 'TranslationController@revisions',
        'as' => 'api.translation.translations.revisions',
        'middleware' => 'token-can:api.translation.translations.revisions',
    ]);
});
