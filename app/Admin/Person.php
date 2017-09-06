<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 23.08.17
 * Time: 11:32
 */

use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(\App\Person::class, function (ModelConfiguration $model) {
    $model->setTitle('Команда');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::datatables()->setColumns([
            AdminColumn::image('photo')->setLabel('Зображеня'),
            AdminColumn::link('name')->setLabel('Імя'),
            AdminColumn::text('position')->setLabel('Посада'),
        ]);
        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function () {
        $form = AdminForm::panel()->addBody(
            AdminFormElement::image('photo', 'Зображеня')->required(),
            AdminFormElement::text('name', 'Імя')->required()->setValidationRules(['max:255']),
            AdminFormElement::text('position', 'Посада')->required()->setValidationRules(['max:255']),
            AdminFormElement::textarea('description', 'Опис')->required()->setValidationRules(['max:255']),
            AdminFormElement::text('facebook', 'Facebook')->setValidationRules(['max:255']),
            AdminFormElement::text('twitter', 'Twitter')->setValidationRules(['max:255']),
            AdminFormElement::text('linkedin', 'Linkedin')->setValidationRules(['max:255']),
            AdminFormElement::text('instagram', 'Instagram')->setValidationRules(['max:255'])
        );
        return $form;
    });
});