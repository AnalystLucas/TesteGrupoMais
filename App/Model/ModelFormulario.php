<?php

namespace App\Model;

use App\Model\Model;
use Config\Config;

require_once "../Model/Model.php";
require_once "../../Config/Config.php";

$teste = new Config();

Model::insert($_POST, $_FILES);