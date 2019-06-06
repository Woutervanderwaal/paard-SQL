<?php

function login()
{
    render('user/logIn');
}

function create()
{
    render('user/create');
}

function store()
{
    $acount = array(
        "name" => $_POST['name'],
        "lastName" => $_POST['lastName'],
        "phoneNumber" => $_POST['phoneNumber'],
        "email" => $_POST['email'],
        "password" => $_POST['password']
    );
}