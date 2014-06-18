<?php

interface VeiculoInterface
{
    public function acelerar();
}

class Carro implements VeiculoInterface
{
    // ...

    public function acelerar()
    {
        // ...
    }
}
