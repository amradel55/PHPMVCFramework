<?php
$form = new \app\core\form\Form('', 'POST');
$form->addElement(new \app\core\form\TextInput('firstname', 'First name', $model->firstname ?? '', $model ?? []));
$form->addElement(new \app\core\form\TextInput('lastname', 'Last name', $model->lastname ?? '', $model ?? []));

$form->addElement(new \app\core\form\TextInput('email', 'Email', $model->email ?? '', $model ?? []));
$form->addElement(new \app\core\form\PasswordInput('password', 'Password', $model->password ?? '', $model ?? []));
$form->addElement(new \app\core\form\PasswordInput('password_confirm', 'password confirm', $model->password_confirm ?? '', $model ?? []));

$form->addElement(new \app\core\form\Button("Register"));

echo $form->render()

?>

