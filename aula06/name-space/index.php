<?php

require_once 'models/landing.php';
require_once 'controllers/landing.php';


use controllers\landing as controllersLanding;
use models\landing as modelsLanding;
use models\Data;

$obj = new controllersLanding;
$obj->get_landing();

$data = new Data;
$data->get_data();

echo "<br>";

$model = new modelsLanding;
$model->get_landing();