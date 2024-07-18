<?php

namespace App\Http\Controllers;

use App\Services\GitHubService;
use Illuminate\Http\Request;

class GitHubIssueController extends Controller
{
    protected $gitHubService;

    public function __construct(GitHubService $gitHubService)
    {
        $this->gitHubService = $gitHubService;
    }

    public function index()
    {
        $username = env('GITHUB_USERNAME', 'Laravel');
        $repository = env('GITHUB_REPO', 'Laravel');

        $issues = $this->gitHubService->getOpenIssuesAssignedToUser($username, $repository);

        return view('issues.index', compact('issues'));
    }

    public function show($issueNumber)
    {
        $username = env('GITHUB_USERNAME', 'Laravel');
        $repository = env('GITHUB_REPO', 'Laravel');

        $issue = $this->gitHubService->getIssue($username, $repository, $issueNumber);

        return view('issues.show', compact('issue'));
    }
}
