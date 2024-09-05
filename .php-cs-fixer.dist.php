<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->exclude('var')
    ->exclude('vendor');

return (new PhpCsFixer\Config)
    ->setRules([
        '@Symfony' => true
    ])
    ->setFinder($finder);
