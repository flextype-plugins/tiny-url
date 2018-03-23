# Tiny Url Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.0.0-brightgreen.svg?style=flat-square "Version")
![Flextype](https://img.shields.io/badge/Flextype-0.x-green.svg?style=flat-square "Flextype Version")
[![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://github.com/flextype-plugins/tiny-url/blob/master/LICENSE.txt)

Tiny Url plugin takes a long url and uses the TinyURL API to return a shortened version.

## Installation
1. Unzip plugin to the folder `/site/plugins/`
2. Go to `/site/config/site.yml` and add plugin name to plugins section.
3. Save your changes.

Example:
```
...
plugins:
  - tiny-url
```

## Usage in page content

```
[tinyurl url="http://flextype.org"]
```

## Usage in template

```
<?php echo Flextype\tinyurl('http://flextype.org'); ?>
```

## Settings

```
enabled: true # or `false` to disable the plugin
```

## License
See [LICENSE](https://github.com/flextype-plugins/tinyurl/blob/master/LICENSE)
