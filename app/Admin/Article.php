<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 23.08.17
 * Time: 11:32
 */

use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(\App\Article::class, function (ModelConfiguration $model) {
    $model->setTitle('Блог');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::datatables()->setColumns([
            AdminColumn::image('image')->setLabel('Зображеня'),
            AdminColumn::link('title')->setLabel('Заголовок'),
            AdminColumn::datetime('date')->setFormat('d.m.Y')->setLabel('Дата'),
        ]);
        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function () {
        $form = AdminForm::panel()->addBody(
            AdminFormElement::image('image', 'Зображеня')->required(),
            AdminFormElement::text('title', 'Заголовок')->required()->setValidationRules(['max:255']),
            AdminFormElement::textarea('description', 'Опис')->required()->setValidationRules(['max:255']),
            AdminFormElement::date('date', 'Дата')->required(),
            AdminFormElement::ckeditor('text', 'Текст')->required()
        );
        return $form;
    });
});