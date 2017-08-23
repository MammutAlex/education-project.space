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
    (new Page(\App\Direction::class))
        ->setIcon('fa fa-university')
        ->setPriority(0),
    (new Page(\App\Link::class))
        ->setIcon('fa fa-external-link')
        ->setPriority(0),
    (new Page(\App\Organization::class))
        ->setIcon('fa fa-external-link')
        ->setPriority(0),
];