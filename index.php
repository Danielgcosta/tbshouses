<?php
require './vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

$serviceAccount = ServiceAccount::fromJsonFile('./secret/tbs-houses-9ee838a9885e.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->withDatabaseUri('https://tbs-houses.firebaseio.com/')
    ->create();

$database = $firebase->getDatabase();

echo "It's working!";