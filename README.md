# Monolog - Logging for PHP 

[![Total Downloads](https://img.shields.io/packagist/dt/monolog/monolog.svg)](https://packagist.org/packages/gym/chat_info)
[![Latest Stable Version](https://img.shields.io/packagist/v/monolog/monolog.svg)](https://packagist.org/packages/gym/chat_info)


## Installation

Install the latest version with

```bash
$ composer require gym/chat_info
```

## Basic Usage

```php
<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
```
