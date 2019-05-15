# Destination PHP-CS-Fixer Config

PHP-CS-Fixer config for Destination projects

## Requirements
* PHP >= 5.6

## Installation

Use composer to add the package to your dev dependencies:

```bash
composer require destination/php-cs-fixer-config --dev
```

Add the following to your composer.json:

```json
"scripts": {
    "sniff": "vendor/bin/php-cs-fixer fix -v --dry-run --stop-on-violation --using-cache=no --diff --diff-format=udiff",
    "fix": "vendor/bin/php-cs-fixer fix --diff",
}
```

## Usage

Create a `.php_cs.dist` file in your project's root directory. 
You can copy a typical config file from this repository if desired:

```bash
$ cp vendor/destination/php-cs-fixer-config/.php_cs.dist .
```

Add the following entries to your `.gitignore` file:

```
/.php_cs.cache
/.php_cs
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
$ cp vendor/destination/php-cs-fixer-config/git-hooks/pre-commit .git/hooks/pre-commit
$ chmod +x .git/hooks/pre-commit
```

## Editorconfig

Copy this project's .editorconfig file into your project so your IDE follows some of our standards:

```bash
$ cp vendor/destination/php-cs-fixer-config/.editorconfig .
```
