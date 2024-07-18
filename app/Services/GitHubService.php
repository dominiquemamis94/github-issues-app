<?php

namespace App\Services;

use GuzzleHttp\Client;

class GitHubService
{
    protected $client;
    protected $baseUrl = 'https://api.github.com';

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'headers' => [
                'Authorization' => 'Bearer ' . config('services.github.token'),
                'Accept' => 'application/vnd.github.v3+json',
            ],
        ]);
    }

    public function getOpenIssuesAssignedToUser($username, $repository)
    {
        $response = $this->client->request('GET', "/repos/{$username}/{$repository}/issues", [
            'query' => [
                'state' => 'open',
                'assignee' => $username,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    public function getIssue($username, $repository, $issueNumber)
    {
        $response = $this->client->request('GET', "/repos/{$username}/{$repository}/issues/{$issueNumber}");

        return json_decode($response->getBody()->getContents(), true);
    }
}
