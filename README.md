# Destination PHP-CS-Fixer Config

PHP-CS-Fixer config for Destination projects

## Global Usage

### Installation

Install the package globally with composer:

```bash
composer global require destination/php-cs-fixer-config
```

Now create a `.php-cs-fixer.dist.php` file within your home directory:

```php
<?php

$config = new Destination\PhpCsFixerConfig\Config();

$config
    ->setUsingCache(false)
    ->setRules(array_merge($config->getRules(), [
        // Strict types is a sensible default for new projects but is risky on an existing code base
        'declare_strict_types' => false,
    ]))
;

return $config;
```

### Usage

Assuming your [global composer's bin directory is in your $PATH](https://getcomposer.org/doc/03-cli.md#global), you can now run the following within a directory you want to format:

```
php-cs-fixer fix --config ~/.php-cs-fixer.dist.php .
```

## Local Usage

## Installation

Use composer to add the package to your dev dependencies:

```bash
composer require destination/php-cs-fixer-config --dev
```

Add the following to your composer.json:

```json
"scripts": {
    "sniff": "vendor/bin/php-cs-fixer fix -v --dry-run --stop-on-violation --using-cache=no --diff",
    "fix": "vendor/bin/php-cs-fixer fix --diff",
}
```

## Usage

Create a `.php-cs-fixer.dist.php` file in your project's root directory.
You can copy a typical config file from this package if desired:

```bash
$ cp vendodestination/php-cs-fixer-config/.php-cs-fixer.dist.php .
```

Add the following entries to your `.gitignore` file:

```
/.php-cs-fixer.cache
/.php-cs-fixer.php
```

## Fixing Issues

### Manually

To fix issues manually, run the following command:

```bash
$ composer fix
```

To perform a dry run, run the following command:

```bash
$ composer sniff
```

### Pre-commit hook

Run the following to have PHP-CS-Fixer run on changed files before every commit:

```bash
$ cp vendodestination/php-cs-fixer-config/git-hooks/pre-commit .git/hooks/pre-commit
$ chmod +x .git/hooks/pre-commit
```

## Editorconfig

Copy the .editorconfig file from the package into your project so your IDE follows some of our standards:

```bash
$ cp vendodestination/php-cs-fixer-config/.editorconfig .
```
