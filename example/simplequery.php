<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

include __DIR__."/../IQBuzz.php";

$IQBuzz = new IQBuzz('login', 'apiCode');

$queryObject = new QuerySimple();
$queryObject->setApiMethod('rubricList');

$IQBuzz->setQueryObject($queryObject);

$result = $IQBuzz->getPrepare()->getResult()->toArray();

echo "<pre>";
print_r($result);

/*
 * Array
(
    [rubric] => Array
        (
            [0] => Array
                (
                    [id] => 2993942710
                    [name] => Радио Семь на Семи холмах
                )

            [1] => Array
                (
                    [id] => 2993986774
                    [name] => Радио Комсомольская Правда
                )

            .....

            [15] => Array
                (
                    [id] => 2995969900
                    [name] => Фонтанка FM (СМИ)
                )

        )

)
 */