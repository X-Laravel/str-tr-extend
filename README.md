# Laravel Str Facade TR Extend

<p align="center">
<a href="https://packagist.org/packages/X-Laravel/str-tr-extend" rel="nofollow"><img src="https://img.shields.io/packagist/v/X-Laravel/str-tr-extend" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/X-Laravel/str-tr-extend" rel="nofollow"><img src="https://img.shields.io/packagist/dt/X-Laravel/str-tr-extend" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/X-Laravel/str-tr-extend" rel="nofollow"><img src="https://poser.pugx.org/X-Laravel/str-tr-extend/dependents.svg" alt="Dependents"></a>
<a href="https://packagist.org/packages/X-Laravel/str-tr-extend" rel="nofollow"><img src="https://img.shields.io/packagist/l/X-Laravel/str-tr-extend" alt="License"></a>
</p>

<p align="center">
<a href="https://scrutinizer-ci.com/g/X-Laravel/str-tr-extend/build-status/master" rel="nofollow"><img src="https://scrutinizer-ci.com/g/X-Laravel/str-tr-extend/badges/quality-score.png?b=master" title="Scrutinizer Code Quality"></a>
<a href="https://styleci.io/repos/322001034" rel="nofollow"><img src="https://styleci.io/repos/322001034/shield?branch=master" alt="StyleCI"></a>
</p>

## Introduction

Extends Laravel Str Facade with X-Adam/string package.

It provides auxiliary functions to solve the problem of Turkish characters when converting text to lowercase and uppercase in php.

## Requirements

PHP >=7.0. Other than that, this library has no requirements.

## Install

```bash
$ composer require x-laravel/str-tr-extend
```

## Example Usage

```php
# Make a string uppercase
echo Str::trUpper('Yalnızlık insanlara çok şey öğretirmiş. Ama sen gitme cahil kalayım.');
# Result: YALNIZLIK İNSANLARA ÇOK ŞEY ÖĞRETİRMİŞ. AMA SEN GİTME CAHİL KALAYIM.

# Make a string lowercase
echo Str::trLower('YALNIZLIK İNSANLARA ÇOK ŞEY ÖĞRETİRMİŞ. AMA SEN GİTME CAHİL KALAYIM.');
# Result: yalnızlık insanlara çok şey öğretirmiş. ama sen gitme cahil kalayım.

# Make a string's first character uppercase
echo Str::trUcFirst('yalnızlık insanlara çok şey öğretirmiş. ama sen gitme cahil kalayım.');
# Result: Yalnızlık insanlara çok şey öğretirmiş. ama sen gitme cahil kalayım.

# Make a string's first character lowercase
echo Str::trLcFirst('Yalnızlık insanlara çok şey öğretirmiş. ama sen gitme cahil kalayım.');
# Result: yalnızlık insanlara çok şey öğretirmiş. ama sen gitme cahil kalayım.

# Uppercase the first character of each word in a string
echo Str::trUcWords('yalnızlık insanlara çok şey öğretirmiş. ama sen gitme cahil kalayım.');
# Result: Yalnızlık İnsanlara Çok Şey Öğretirmiş. Ama Sen Gitme Cahil Kalayım.
```

## License

This package is open source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
