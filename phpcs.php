<?php

use PhpCsFixer\Finder;
use PhpCsFixer\Config;

$finder = Finder::create()->in(__DIR__)
    ->exclude(__DIR__ . '/vendor');
return Config::create()
    ->setRules([
        '@PSR2' => true,
        'array_syntax' => [
            'syntax' => 'short',
        ],
    ])
    ->setFinder($finder);
