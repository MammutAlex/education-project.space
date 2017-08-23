<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 23.08.17
 * Time: 11:32
 */

use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(\App\Subscription::class, function (ModelConfiguration $model) {
    $model->setTitle('Підписки на розсилку');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::datatables()->setColumns([
            AdminColumn::text('email')->setLabel('Email'),
        ]);
        return $display;
    });
});