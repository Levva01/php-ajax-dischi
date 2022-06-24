<?php

require_once __DIR__ . '/database.php';

foreach ($database as $disco) {

    echo strtoupper($disco['title']);

    foreach($disco as $key => $value){
        echo "<br>";
        echo "$key => $value";
        echo "<br>";
    }
    echo "<br>";
}