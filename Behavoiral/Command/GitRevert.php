<?php


namespace Behavoiral\Command;

class GitRevert implements Commande
{
    public $gitReciver;
    public function __construct(GitReciver $gitReciver)
    {
        $this->gitReciver   = $gitReciver;
    }
    public function execute()
    {
        $this->gitReciver->gitRevert();
    }
}
