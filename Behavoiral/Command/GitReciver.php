<?php

namespace Behavoiral\Command;

class GitReciver
{

    private $gitLog = [];

    public function gitAdd()
    {
        $this->gitLog[] = "Git - Add";
    }

    public function gitCommit()
    {
        $this->gitLog[] = "Git - Commit";
    }


    public function gitPush()
    {
        $this->gitLog[] = "Git - Push";
    }
    public function gitRevert()
    {
        $this->gitLog[] = "Git - Revert";
    }

    public function getGitLog()
    {
        return $this->gitLog;
    }
}
