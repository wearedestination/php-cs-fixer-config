<?php

namespace Destination\PhpCsFixerConfig;

final class Config extends \PhpCsFixer\Config
{
    public function __construct()
    {
        parent::__construct('Destination');

        $this->setRiskyAllowed(true);
    }

    public function getRules()
    {
        return [
            '@Symfony'                      => true,
            '@Symfony:risky'                => true,
            'array_syntax'                  => ['syntax' => 'short'],
            'concat_space'                  => ['spacing' => 'one'],
            'fopen_flags'                   => false,
            'ordered_imports'               => true,
            'protected_to_private'          => false,
            'binary_operator_spaces'        => ['align_double_arrow' => true, 'align_equals' => true],
            'yoda_style'                    => false,
            'phpdoc_inline_tag'             => false,
            'phpdoc_annotation_without_dot' => false,
            'cast_spaces'                   => ['space' => 'none'],
            'native_function_invocation'    => true,
        ];
    }
}
