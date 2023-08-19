<?php

$colors = array(
    array(
        'color' => 'black',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 255,
                2 => 255,
                3 => 1,
            ),
            'hex' => '#000',
        ),
    ),
    array(
        'color' => 'white',
        'category' => 'value',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 0,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FFF',
        ),
    ),
    array(
        'color' => 'red',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 0,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FF0',
        ),
    ),
    array(
        'color' => 'blue',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 0,
                2 => 255,
                3 => 1,
            ),
            'hex' => '#00F',
        ),
    ),
    array(
        'color' => 'yellow',
        'category' => 'hue',
        'type' => 'primary',
        'code' => array(
            'rgba' => array(
                0 => 255,
                1 => 255,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#FF0',
        ),
    ),
    array(
        'color' => 'green',
        'category' => 'hue',
        'type' => 'secondary',
        'code' => array(
            'rgba' => array(
                0 => 0,
                1 => 255,
                2 => 0,
                3 => 1,
            ),
            'hex' => '#0F0',
        ),
    ),
);

$hueCategory = array();
$valueCategory = array();

foreach ($colors as $color) {
    if ($color['category'] === 'hue') {
        $hueCategory[] = $color;
    } elseif ($color['category'] === 'value') {
        $valueCategory[] = $color;
    }
}

function info($color)
{
    $text = "Це колір {$color['color']} він з категорії {$color['category']}.";

    if (isset($color['type'])) {
        $text .= " Тип кольору - {$color['type']}.";
    }

    $rgba = "rgba({$color['code']['rgba'][0]}, {$color['code']['rgba'][1]}, {$color['code']['rgba'][2]}, {$color['code']['rgba'][3]})";
    $hex = $color['code']['hex'];

    $text .= " В даному кольорі наступні коди {$rgba} і такий hex код -> {$hex}.";

    return $text;
}

echo "Категорія 'hue':";
foreach ($hueCategory as $color) {
    echo info($color);
}

echo "Категорія 'value'";
foreach ($valueCategory as $color) {
    echo info($color);
}


