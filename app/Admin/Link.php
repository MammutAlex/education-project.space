<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 23.08.17
 * Time: 11:32
 */

use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(\App\Link::class, function (ModelConfiguration $model) {
    $model->setTitle('Посилання');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::datatables()->setColumns([
            AdminColumn::image('photo')->setLabel('Зображеня'),
            AdminColumn::link('title')->setLabel('Заголовок'),
        ]);
        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function () {
        $form = AdminForm::panel()->addBody(
            AdminFormElement::multiselect('directions', 'Напрямки', \App\Direction::class)->required(),
            AdminFormElement::image('photo', 'Зображеня')->required(),
            AdminFormElement::text('title', 'Заголовок')->required()->setValidationRules(['max:255']),
            AdminFormElement::text('url', 'Посилання')->required()->unique()->setValidationRules(['max:255'])
        );
        return $form;
    });
});