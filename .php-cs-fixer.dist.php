<?php

$finder = Symfony\Component\Finder\Finder::create()
    ->in(__DIR__)
    ->name('*.php')
    ->ignoreDotFiles(TRUE)
    ->ignoreVCS(TRUE);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => TRUE,
        'array_syntax' => ['syntax' => 'short'],
        'ordered_imports' => ['sort_algorithm' => 'alpha'],
        'no_unused_imports' => TRUE,
        'trailing_comma_in_multiline' => TRUE,
        'phpdoc_scalar' => TRUE,
        'unary_operator_spaces' => TRUE,
        'binary_operator_spaces' => TRUE,
        'blank_line_before_statement' => [
            'statements' => ['break', 'continue', 'declare', 'return', 'throw', 'try'],
        ],
        'phpdoc_single_line_var_spacing' => TRUE,
        'phpdoc_var_without_name' => TRUE,
        'class_attributes_separation' => [
            'elements' => [
                'method' => 'one',
            ],
        ],
        'method_argument_space' => [
            'on_multiline' => 'ensure_fully_multiline',
            'keep_multiple_spaces_after_comma' => TRUE,
        ],
        'single_trait_insert_per_statement' => TRUE,
    ])
    ->setFinder($finder);
