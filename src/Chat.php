<?php

namespace Chat;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Chat
{
    private string $apiKey;//接口的key
    private string $model;//模型  gpt-3.5-turbo 可更换为其它
    private int $maxTokens;
    private Client $client;

    public function __construct(string $apiKey, string $model, int $maxTokens = 150)
    {
        $this->apiKey    = $apiKey;
        $this->model     = $model;
        $this->maxTokens = $maxTokens;
        $this->client    = new Client();
    }

    /**
     * 与 ChatGPT 对话
     *
     * @param string $userInput 用户输入
     * @return string ChatGPT 的回复
     */
    public function chat(string $userInput): string
    {
        $body = [
            'model'      => $this->model,  // 选择模型，可以更换为其他模型
            'messages'   => [
                ['role' => 'system', 'content' => 'You are a helpful assistant.'],
                ['role' => 'user', 'content' => $userInput],
            ],
            'max_tokens' => $this->maxTokens,
        ];

        try {
            $response = $this->client->post('https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type'  => 'application/json',
                ],
                'json'    => $body,
            ]);

            $responseBody = json_decode($response->getBody(), true);

            return $responseBody['choices'][0]['message']['content'] ?? 'No response from API';
        } catch (RequestException $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
}
