<?php

namespace Chat;

use PHPUnit\Framework\TestCase;

class ChatTest extends TestCase
{
    private Chat $chat;

    protected function setUp(): void
    {
        // 使用你自己的 API 密钥
        $this->chatgpt = new Chat('your-openai-api-key','gpt-3.5-turbo');
    }

    public function testChat()
    {
        $response = $this->chatgpt->chat('Hello, how are you?');
        $this->assertNotEmpty($response);
    }
}
