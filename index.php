<?php

require __DIR__ . '/kirby/bootstrap.php';

echo (new Kirby)->render();


function styles($example) {

    $styles = [
        'assets/lightbox/lightbox.css',
        'assets/css/index.css'
    ];

    $path = 'assets/css/' . $example . '.css';
    $file = kirby()->root() . '/' . $path;

    if (file_exists($file) === true) {
        $styles[] = $path;
    }

    $styles[] = '@auto';

    return css($styles);

}