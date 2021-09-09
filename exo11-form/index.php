<?php

spl_autoload_register(function ($class) {
    include __DIR__ . '/' . $class . '.php';
});


$form = new Form("index.php");
$form->addField(new TextField("nom", ["required" => true]))
    ->addField(new NumberField("age"))
    ->addField(new PasswordField("mot de passe"))
    ->addField( new SubmitField(["value" => "Valider"]));
;

echo $form->createForm();
