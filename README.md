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
$chat = new Chat('your-openai-api-key','gpt-3.5-turbo');
$response = $chat->chat('Hello, how are you?');

```
