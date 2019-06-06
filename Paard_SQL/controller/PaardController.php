<?php
require(ROOT . "model/HorseModel.php");

function huur()
{
    $paarden = getAllHorses();

    render('paard/huur', $paarden);
}

function paardAdd()
{
    render('paard/paardAdd');
}

function store()
{
    $paard = array(
        "naam" => $_POST['naam'],
        "image" => $_POST['image'],
        "discription" => $_POST['discription'],
        "lengte" => $_POST['lengte'],
        "tijd" => $_POST['tijd'],
        "ras" => $_POST['ras']
    );

    createHorse($paard);
}