# Tiny Url Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.4.0-brightgreen.svg?style=flat-square)
![Flextype](https://img.shields.io/badge/Flextype-0.9.5-green.svg?style=flat-square)
![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)

Tiny Url plugin takes a long url and uses the TinyURL API to return a shortened version.

## Installation
Unzip plugin to the folder `/site/plugins/`

## Usage in page content

```
[tinyurl url="http://flextype.org"]
```

## Usage in template

```html
{{ tinyurl('http://flextype.org') }}
```

## Settings

enabled: true or false to disable the plugin

```yaml
enabled: true
```

## LICENSE
[The MIT License (MIT)](https://github.com/flextype-plugins/tiny-url/blob/master/LICENSE) Copyright (c) 2018-2019 [Sergey Romanenko](https://github.com/Awilum)
