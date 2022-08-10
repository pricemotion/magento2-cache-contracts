<?php

$php = getenv('PHP_VERSION');

echo json_encode([
    "name" => "pricemotion/magento2-cache-contracts",
    "description" => "Provide a CacheInterface adapter for Magento 2's FrontendInterface",
    "licence" => "GPL-3.0-or-later",
    "config" => [
        "allow-plugins" => false
    ],
    "repositories" => [
        [
            "type" => "composer",
            "url" => "https://repo.magento.com/"
        ]
    ],
    "require" => [
        "symfony/contracts" => "^1.1.0 || ^2 || ^3",
        "php" => [
            7 => '>=7.4.0',
            8 => '>=8.0.0',
        ][$php],
        "psr/cache" => [
            7 => '^1',
            8 => '^2 || ^3',
        ][$php],
    ],
    "require-dev" => [
        "phpunit/phpunit" => "^9",
        "magento/framework" => "103.0.4"
    ],
    "autoload" => [
        "psr-4" => [
            "Pricemotion\\Magento2\\CacheContracts\\" => "src/"
        ]
    ]
], JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR | JSON_UNESCAPED_SLASHES);
