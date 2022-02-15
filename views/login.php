<h1>Login</h1>

<?php
/**
 * @var $model \app\models\LoginForm
*/

$form = new \app\core\form\Form('', 'POST');

$form->addElement(new \app\core\form\TextInput('email', 'Email', $model->email ?? '', $model ?? []));
$form->addElement(new \app\core\form\PasswordInput('password', 'Password', $model->password ?? '', $model ?? []));

$form->addElement(new \app\core\form\Button("Login"));

echo $form->render()

?>

