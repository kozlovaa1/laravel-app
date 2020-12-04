<?php

return [
    'model' => App\Models\Post::class,

    // searchable field, if you dont want search feature, remove it
    'search' => ['title', 'content'],

    // Manage actions in crud
    'create' => true,
    'update' => true,
    'delete' => true,

    // Validation in update and create actions
    'validation' => [
        'title' => 'required',
        'content' => 'required|min:30',
    ],

    // Write every fields in your db which you want to show
    'fields' => [
        'title' => 'text',
        'content' => 'textarea',
        'image' => 'file'
    ],

    //Default that data you want to pass in create and update actions, Do not you want ? Delete this key.
    'extra_values' => [
        'user_id' => 'auth()->user()->id'
    ],

    // which kind of data should be showed in list page
    'show' => ['title', 'content'],
];
