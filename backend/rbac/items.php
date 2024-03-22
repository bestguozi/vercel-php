<?php

return [
    'user-index' => [
        'type' => 2,
        'description' => 'User List',
    ],
    'user-view' => [
        'type' => 2,
        'description' => 'User View',
    ],
    'user-create' => [
        'type' => 2,
        'description' => 'User Create',
    ],
    'user-update' => [
        'type' => 2,
        'description' => 'User Update',
    ],
    'user-delete' => [
        'type' => 2,
        'description' => 'User Delete',
    ],
    'user-reset-key' => [
        'type' => 2,
        'description' => 'user reset key',
    ],
    'user-set-status' => [
        'type' => 2,
        'description' => 'user set status',
    ],
    'learn-lesson-index' => [
        'type' => 2,
        'description' => 'lesson List',
    ],
    'learn-lesson-view' => [
        'type' => 2,
        'description' => 'lesson View',
    ],
    'learn-lesson-create' => [
        'type' => 2,
        'description' => 'lesson Create',
    ],
    'learn-lesson-update' => [
        'type' => 2,
        'description' => 'lesson Update',
    ],
    'learn-lesson-delete' => [
        'type' => 2,
        'description' => 'lesson Delete',
    ],
    'upload-file' => [
        'type' => 2,
        'description' => 'upload file',
    ],
    'learn-book-index' => [
        'type' => 2,
        'description' => 'book List',
    ],
    'learn-book-view' => [
        'type' => 2,
        'description' => 'book View',
    ],
    'learn-book-create' => [
        'type' => 2,
        'description' => 'book Create',
    ],
    'learn-book-update' => [
        'type' => 2,
        'description' => 'book Update',
    ],
    'learn-book-delete' => [
        'type' => 2,
        'description' => 'book Delete',
    ],
    'main-index'=>[
        'type' => 1,
        'description' => 'Main List',
    ],

    'admin' => [
        'type' => 1,
        'children' => [
            'user-index',
            'user-view',
            'user-create',
            'user-update',
            'user-delete',
            'user-reset-key',
            'user-set-status',
            'learn-lesson-index',
            'learn-lesson-view',
            'learn-lesson-create',
            'learn-lesson-update',
            'learn-lesson-delete',
            'learn-book-index',
            'learn-book-view',
            'learn-book-create',
            'learn-book-update',
            'learn-book-delete',
            'upload-file',
            'main-index',
        ],
    ],
];
