<?php

namespace ACMProgrammer;

class Customer
{
    public function __construct(private string $var)
    {
    }

    public function sayHello(string $var = "Tamu"): string
    {
        return "Hello $var, My Name is $this->var";
    }
}
