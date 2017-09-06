<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 23.08.17
 * Time: 11:32
 */

use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(\App\Organization::class, function (ModelConfiguration $model) {
    $model->setTitle('Організації');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::datatables()->setColumns([
            AdminColumn::link('title')->setLabel('Заголовок'),
            AdminColumn::text('text')->setLabel('Текст'),
        ]);
        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function () {
        $form = AdminForm::panel()->addBody(
            AdminFormElement::text('title', 'Заголовок')->required()->setValidationRules(['max:255']),
            AdminFormElement::textarea('text', 'Текст')->required()->setValidationRules(['max:255'])
        );
        return $form;
    });
});