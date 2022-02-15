<h1>Contact</h1>

<?php
/**
 * @var  $this \app\core\View
 */
$this->title = 'Contact';
/**
 *  @var $model app\models\ContactForm
 */
$model = new app\models\ContactForm;
//echo $model;
$form = new \app\core\form\Form('', 'POST');
$form->addElement(new \app\core\form\TextInput('subject', 'Subject', $model->subject ?? '', $model ?? []));
$form->addElement(new \app\core\form\TextInput('email', 'Email', $model->email ?? '', $model ?? []));
$form->addElement(new \app\core\form\TextArea('body', 'Body', $model->body ?? '', $model ?? []));

$form->addElement(new \app\core\form\Button("Send"));
echo $form->render()


?>

