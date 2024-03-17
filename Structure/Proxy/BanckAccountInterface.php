<?php

namespace Structure\Proxy;


interface BanckAccountInterface
{
    public function deposit(int $amount);
    public function withdraw(int $amount);
    public function getBalance();
}
