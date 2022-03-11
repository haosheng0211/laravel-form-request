<?php

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2'                                  => true,
        '@Symfony'                               => true,
        '@DoctrineAnnotation'                    => true,
        '@PhpCsFixer'                            => true,
        'array_syntax'                           => [
            'syntax' => 'short',
        ],
        'list_syntax'                            => [
            'syntax' => 'short',
        ],
        'concat_space'                           => [
            'spacing' => 'one',
        ],
        'blank_line_before_statement'            => [
            'statements' => [
                'if',
                'return',
                'declare',
                'foreach',
            ],
        ],
        'general_phpdoc_annotation_remove'       => [
            'annotations' => [
                'author',
            ],
        ],
        'ordered_imports'                        => [
            'imports_order'  => [
                'class', 'function', 'const',
            ],
            'sort_algorithm' => 'alpha',
        ],
        'single_line_comment_style'              => [
            'comment_types' => [
            ],
        ],
        'yoda_style'                             => [
            'always_move_variable' => false,
            'equal'                => false,
            'identical'            => false,
        ],
        'phpdoc_align'                           => [
            'align' => 'left',
        ],
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'no_multi_line',
        ],
        'constant_case'                          => [
            'case' => 'lower',
        ],
        'class_attributes_separation'            => true,
        'combine_consecutive_unsets'             => true,
        'linebreak_after_opening_tag'            => true,
        'lowercase_static_reference'             => true,
        'no_useless_else'                        => true,
        'no_useless_return'                      => true,
        'no_empty_phpdoc'                        => true,
        'no_empty_statement'                     => true,
        'no_superfluous_phpdoc_tags'             => true,
        'no_unused_imports'                      => true,
        'not_operator_with_successor_space'      => true,
        'not_operator_with_space'                => false,
        'ordered_class_elements'                 => true,
        'php_unit_strict'                        => false,
        'phpdoc_separation'                      => true,
        'single_quote'                           => true,
        'standardize_not_equals'                 => true,
        'multiline_comment_opening_closing'      => true,
        'binary_operator_spaces'                 => [
            'operators' => [
                '=>' => 'align',
            ],
        ],
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('vendor')
            ->in(__DIR__)
    )
    ->setUsingCache(false);
