# php-config-umbrellio

Settings used in [Umbrellio](https://umbrellio.biz) php projects.


## Installation

Install via composer:

```
php composer.phar require --dev umbrellio/code-style-php
```

Create config `ecs.yml`:

```
imports:
  - { resource: vendor/umbrellio/code-style-php/umbrellio-cs.yml }
```

## Usage

Run in CLI:

```
vendor/bin/ecs check src --fix --config=ecs.yml
```

## Links

- [EasyCodingStandard](https://github.com/Symplify/EasyCodingStandard) - used library.
- [code-style](https://github.com/umbrellio/code-style) - linter settings for other languages.
