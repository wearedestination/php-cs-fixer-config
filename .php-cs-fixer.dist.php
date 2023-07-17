<?php

declare(strict_types=1);

use Destination\PhpCsFixerConfig\Config;

$config = new Config();

$config
    ->getFinder()
    ->in(__DIR__ . '/src')
    ->append([__FILE__]);

return $config;
