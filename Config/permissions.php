<?php

return [
    'translation.translations'     => [
        'index'  => 'translation::translations.list resource',
        'edit'   => 'translation::translations.edit resource',
        'import' => 'translation::translations.import resource',
        'export' => 'translation::translations.export resource',
    ],
    'api.translation.translations' => [
        'update'     => 'translation::translations.api.update resource',
        'clearCache' => 'translation::translations.api.clearCache resource',
        'revisions'  => 'translation::translations.api.revisions resource'
    ]
];