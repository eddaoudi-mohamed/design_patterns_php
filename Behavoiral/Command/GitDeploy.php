<?php

namespace Behavoiral\Command;


class GitDeploy implements Commande
{

    public $gitReciver;
    public function __construct(GitReciver $gitReciver)
    {
        $this->gitReciver   = $gitReciver;
    }

    public function execute()
    {
        $this->gitReciver->gitAdd();
        $this->gitReciver->gitCommit();
        $this->gitReciver->gitPush();
    }
}
