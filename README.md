# Chat for PHP


## Installation

Install the latest version with

```bash
$ composer require gym/chat_info
```

## Basic Usage

```php
<?php

use Chat;

// create a log channel
$chat = new Chat('your-openai-api-key','gpt-3.5-turbo');
$response = $chat->chat('Hello, how are you?');

```
