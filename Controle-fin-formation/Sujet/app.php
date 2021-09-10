<?php

require(__DIR__ . "/vendor/autoload.php");

use App\Entity\User;
use App\Service\Hydrator;
use App\Database\HomeMadeDB;
use App\Database\DbConnector;
use App\Repository\Repository;

$db = (new DbConnector(new HomemadeDB))->connect();

$repository = new Repository($db);

$datas = $repository->findAll();

$users = (new Hydrator($datas, new User))->hydrate();

var_dump($users);