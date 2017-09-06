<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 23.08.17
 * Time: 11:32
 */

use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(\App\Review::class, function (ModelConfiguration $model) {
    $model->setTitle('Відгуки');
    // Display
    $model->onDisplay(function () {
        $display = AdminDisplay::datatables()->setColumns([
            AdminColumn::link('name')->setLabel('Імя'),
            AdminColumn::text('position')->setLabel('Посада'),
        ]);
        return $display;
    });
    // Create And Edit
    $model->onCreateAndEdit(function () {
        $form = AdminForm::panel()->addBody(
            AdminFormElement::text('name', 'Імя')->required()->setValidationRules(['max:255']),
            AdminFormElement::text('position', 'Посада')->required()->setValidationRules(['max:255']),
            AdminFormElement::textarea('text', 'Відгук')->required()->setValidationRules(['max:255'])
        );
        return $form;
    });
});