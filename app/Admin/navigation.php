<?php

use SleepingOwl\Admin\Navigation\Page;

return [
    (new Page(\App\Article::class))
        ->setIcon('fa fa-file-text-o')
        ->setPriority(0),
    [
        'title' => 'Напрямки навчання',
        'icon' => 'fa fa-graduation-cap',
        'priority' => 100,
        'pages' => [
            (new Page(\App\Direction::class))
                ->setPriority(0),
            (new Page(\App\Link::class))
                ->setPriority(0),
        ],
    ],
    [
        'title' => 'Контактні запити',
        'icon' => 'fa fa-users',
        'priority' => 1000,
        'pages' => [
            (new Page(\App\Contact::class))
                ->setPriority(0),
            (new Page(\App\Subscription::class))
                ->setPriority(0),
        ],
    ],
    (new Page(\App\Organization::class))
        ->setIcon('fa fa-university')
        ->setPriority(0),
    (new Page(\App\Person::class))
        ->setIcon('fa fa-user-circle-o')
        ->setPriority(0),
    (new Page(\App\Review::class))
        ->setIcon('fa fa-volume-control-phone')
        ->setPriority(0),
    (new Page(\App\Calendar::class))
        ->setIcon('fa fa-calendar')
        ->setPriority(0),
];