<?php

include __DIR__."/../IQBuzz.php";

$IQBuzz = new IQBuzz('login', 'apiCode');

$queryObject = new QueryXml();
$queryObject->setRootName('pagedList');
$queryObject->setApiMethod('documentList');

$queryObject->setParams(array(
    'page' => 0,
    'perPage' => 3,
    array(
        'filter' => array(
            'name' => 'RUBRICID',
            'type' => 'RUBRICID',
            array(
                'values' => array(
                    'long' => 2994042422
                )
            )
        )
    ),
    array(
        'sorting' => array(
            'fieldName' => 'INSERTIONDATE',
            'direction' => 'DESC'
        )
    )
));

$IQBuzz->setQueryObject($queryObject);

$result = $IQBuzz->getPrepare()->getResult()->toArray();


echo "<pre>";
print_r($result);

/* Result
Array
(
    [totalCount] => 35533
    [results] => Array
(
    [searchItem] => Array
    (
        [0] => Array
        (
            [document] => Array
            (
                [id] => 798872876
                                    [title] => http://twitter.com/psyhmedik/status/574898526993408000
                                    [text] => RT @RadioVesti:  #Боевики, начиная с 9.30 начали штурм в отношении сил  #АТО, которые дислоцируются в  #Широкино, Об этом сообщили в Оборона  #…
                                    [docDate] => 09-03-2015 14:44:24
                                    [docDateMilliSec] => 1425901464000
                                    [insertionDate] => 09-03-2015 14:49:49
                                    [insertionDateMilliSec] => 1425901789367
                                    [url] => http://twitter.com/psyhmedik/status/574898526993408000
                                    [doctype] => MICROBLOG
                                    [sentiment] => NEUTRAL
                                )

                            [docSource] => Array
(
    [name] => psyhmedik
                                    [url] => http://twitter.com/psyhmedik
                                )

                            [blogger] => Array
(
    [name] => Ольга кружкова
                                    [nick] => psyhmedik
                                    [audience] => 32
                                    [gender] => Женщина
                                    [geo] => Челябинск
                                )

                        )

                    [1] => Array
(
    [document] => Array
    (
        [id] => 798872035
                                    [title] => http://twitter.com/Tumanovskaya_L/status/574898230359629825
                                    [text] => RT @RadioVesti: Алферов  #Азов: Поселок  #Широкино под  #Мариуполем практически полностью разрушен до основания.
                                    [docDate] => 09-03-2015 14:43:13
                                    [docDateMilliSec] => 1425901393000
                                    [insertionDate] => 09-03-2015 14:49:04
                                    [insertionDateMilliSec] => 1425901744151
                                    [url] => http://twitter.com/Tumanovskaya_L/status/574898230359629825
                                    [doctype] => MICROBLOG
                                    [sentiment] => NEUTRAL
                                )

                            [docSource] => Array
(
    [name] => Tumanovskaya_L
                                    [url] => http://twitter.com/Tumanovskaya_L
                                )

                            [blogger] => Array
(
    [name] => Lyubov Tumanovskaya
                                    [nick] => Tumanovskaya_L
                                    [audience] => 76
                                    [gender] => Женщина
                                    [geo] => Kiev, Ukraine
                                )

                        )

                    [2] => Array
(
    [document] => Array
    (
        [id] => 798871748
                                    [title] => http://twitter.com/anzhelitka/status/574898195202990081
                                    [text] => Телеканал "Россия 1" анонсировал фильм "Крым. Путь на Родину"/Вести FM http://radiovesti.ru/article/show/a… с помощью @vesti_fm
                                    [docDate] => 09-03-2015 14:43:05
                                    [docDateMilliSec] => 1425901385000
                                    [insertionDate] => 09-03-2015 14:48:53
                                    [insertionDateMilliSec] => 1425901733195
                                    [url] => http://twitter.com/anzhelitka/status/574898195202990081
                                    [doctype] => MICROBLOG
                                    [sentiment] => NEUTRAL
                                )

                            [docSource] => Array
(
    [name] => anzhelitka
                                    [url] => http://twitter.com/anzhelitka
                                )

                            [blogger] => Array
(
    [name] => Анжелика Приспешкина
                                    [nick] => anzhelitka
                                    [audience] => 2
                                    [gender] => Женщина
                                    [geo] => Array
(
)

                                )

                        )

                )

        )

)
*/