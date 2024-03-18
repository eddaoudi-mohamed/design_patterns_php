<?php

namespace Behavoiral\Command;


class GitInvoker
{
    private Commande $commande;
    public function setCommand(Commande $commande)
    {
        $this->commande = $commande;
    }


    public function run()
    {
        $this->commande->execute();
    }
}
