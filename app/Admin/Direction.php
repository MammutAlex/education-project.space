<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 23.08.17
 * Time: 11:32
 */

use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(\App\Direction::class, function (ModelConfiguration $model) {
    $model->setTitle('Напрямки');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::datatables()->setColumns([
            AdminColumn::image('photo')->setLabel('Зображеня'),
            AdminColumn::link('title')->setLabel('Заголовок'),
            AdminColumn::text('url')->setLabel('Посилання'),
        ]);
        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function () {
        $form = AdminForm::panel()->addBody(
            AdminFormElement::image('photo', 'Зображеня')->required(),
            AdminFormElement::text('title', 'Заголовок')->required(),
            AdminFormElement::text('url', 'Посилання')->required()->unique()
        );
        return $form;
    });
});