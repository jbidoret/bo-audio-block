<?php

Kirby::plugin('bo/audio-block', [
    // plugin magic happens here
    'blueprints' => [
        'blocks/audio' => __DIR__ . '/blueprints/blocks/audio.yml',
        'files/audio'  => __DIR__ . '/blueprints/files/audio.yml',
    ],
    'snippets' => [
        'blocks/audio' => __DIR__ . '/snippets/blocks/audio.php'
    ]
]);
