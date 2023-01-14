<?php

require_once './vendor/autoload.php';

use FormClasses\Form;
use FormClasses\Button;
use FormClasses\TextInput;
use FormClasses\PasswordInput;

$form = new Form();
$form->addElement(new TextInput('firstname', 'First name'));
$form->addElement(new TextInput('email', 'Email'));
$form->addElement(new PasswordInput('password', 'Password'));
$form->addElement(new Button('Submit'));

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Widget</title>
</head>

<body>
  <?php echo $form->render() ?>
</body>

</html>