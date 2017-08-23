<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 23.08.17
 * Time: 11:32
 */

use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(\App\Contact::class, function (ModelConfiguration $model) {
    $model->setTitle('Контактна форма');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::datatables()->setColumns([
            AdminColumn::text('name')->setLabel('Ім\'я'),
            AdminColumn::text('email')->setLabel('Email'),
            AdminColumn::text('text')->setLabel('Текст'),
        ]);
        return $display;
    });
});