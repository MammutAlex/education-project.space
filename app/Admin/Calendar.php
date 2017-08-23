<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 23.08.17
 * Time: 11:32
 */

use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(\App\Calendar::class, function (ModelConfiguration $model) {
    $model->setTitle('Блог');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::datatables()->setColumns([
            AdminColumn::link('title')->setLabel('Заголовок'),
            AdminColumn::text('description')->setLabel('Опис'),
            AdminColumn::datetime('date')->setFormat('d.m.Y')->setLabel('Дата'),
        ]);
        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function () {
        $form = AdminForm::panel()->addBody(
            AdminFormElement::text('title', 'Заголовок')->required(),
            AdminFormElement::text('url', 'Посилання')->required(),
            AdminFormElement::textarea('description', 'Опис')->required(),
            AdminFormElement::date('date', 'Дата')->required()
        );
        return $form;
    });
});