# Tiny Url Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.2.2-brightgreen.svg?style=flat-square)
![Flextype](https://img.shields.io/badge/Flextype-0.8.3-green.svg?style=flat-square)
![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)

Tiny Url plugin takes a long url and uses the TinyURL API to return a shortened version.

## Installation
Unzip plugin to the folder `/site/plugins/`

## Usage in page content

```
[tinyurl url="http://flextype.org"]
```

## Usage in template
```php
<?php namespace Flextype; ?>
```

```php
<?= tinyurl('http://flextype.org') ?>
```

## Settings

```yaml
enabled: true # or `false` to disable the plugin
```

## License
See [LICENSE](https://github.com/flextype-plugins/tiny-url/blob/master/LICENSE)
