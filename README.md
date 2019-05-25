# php-config-umbrellio

Settings used in [Umbrellio](https://umbrellio.biz) php projects.

---

### Installation

Install via composer:

```shell
php composer.phar require --dev umbrellio/code-style-php
```

Create config `ecs.yml`:

```yaml
imports:
  - { resource: vendor/umbrellio/code-style-php/umbrellio-cs.yml }
```

---

### Usage

Run in CLI:

```
vendor/bin/ecs check src --fix --config=ecs.yml
```

### Dependencies (and Links)

- [EasyCodingStandard](https://github.com/Symplify/EasyCodingStandard) - used library.
- [code-style](https://github.com/umbrellio/code-style) - linter settings for other languages.

---

## License

Released under MIT License.

## Contributing

- Fork it ( https://github.com/umbrellio/code-style-php )
- Create your feature branch (`git checkout -b feature/my-new-feature`)
- Commit your changes (`git commit -am 'Add some feature'`)
- Push to the branch (`git push origin feature/my-new-feature`)
- Create new Pull Request

---

<a href="https://github.com/umbrellio/">
<img style="float: left;" src="https://umbrellio.github.io/Umbrellio/supported_by_umbrellio.svg" alt="Supported by Umbrellio" width="439" height="72">
</a>
