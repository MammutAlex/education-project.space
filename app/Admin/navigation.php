<?php

use SleepingOwl\Admin\Navigation\Page;

return [
    [
        'title' => 'Dashboard',
        'icon' => 'fa fa-dashboard',
        'url' => route('admin.dashboard'),
    ],
    (new Page(\App\Article::class))
        ->setIcon('fa fa-file-text-o')
        ->setPriority(0),
];