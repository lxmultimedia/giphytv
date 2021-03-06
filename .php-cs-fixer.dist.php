<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__);

$config = new PhpCsFixer\Config();
return $config->setRules([
                             '@PSR12' => true,
                             'array_syntax' => ['syntax' => 'short'],
                             'no_unused_imports' => true,
                             'dir_constant' => true
                         ])
    ->setFinder($finder);
