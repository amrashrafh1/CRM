<?php

return [

    'admin' => [
        'name' => 'admin',
        'email' => 'admin@app.com',
        'avatar' => '/img/default.png',
        'phone' => '+2001559168044',
        'position_title' => 'CEO',
        'is_admin' => true,
        'password' => 'password',
    ],
    'role' => [
        'name' => 'admin',
    ],
    'permissions' => [
        // users permissions
        ['name' => 'users-create'],
        ['name' => 'users-edit'],
        ['name' => 'users-destroy'],
        ['name' => 'users-show'],
        // roles permissions
        ['name' => 'roles-create'],
        ['name' => 'roles-edit'],
        ['name' => 'roles-destroy'],
        ['name' => 'roles-show'],
        // permissions 
        ['name' => 'permissions-create'],
        ['name' => 'permissions-edit'],
        ['name' => 'permissions-destroy'],
        ['name' => 'permissions-show'],
        // document_type permissions
        ['name' => 'document_type-create'],
        // document permissions
        ['name' => 'document-create'],
        ['name' => 'document-edit'],
        ['name' => 'document-destroy'],
        ['name' => 'document-show'],
        // settings permissions
        ['name' => 'settings-create'],
        ['name' => 'settings-edit'],
        ['name' => 'settings-destroy'],
        ['name' => 'settings-show'],
    ],
    'document_type' => [
        'name' => 'File task',
    ],

];
