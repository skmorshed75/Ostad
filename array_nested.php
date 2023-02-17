<?php

//array_nested.php
//5. Multidimensional or nested arrays

$foods = [
    'vegetables' =>explode(', ','brinjal, brocolli, carrot, capsicum'),
    'fruits' => explode(', ','apple, banana, orange'),
    'drinks' => explode(', ','water, milk'),
];

//print_r($foods);

array_push($foods['drinks'],'orange juice');
print_r($foods);

//echo $foods['vegetables'][1];
//echo $foods['drinks'][0];

$sample = [
    'test' => [
        'test-again' => [
            'a',
            'b',
            'c',
            'd'
        ],
    ],
];

//echo $sample['test']['test-again'][3];
//echo $sample['test']['test-again'][2];

$sample2 = [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,[5,6,7]]
];
print_r($sample2);
echo $sample2[3][3][2];