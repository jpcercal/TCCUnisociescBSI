<?php

class Carro
{
    protected $velocidade;

    public function acelerar()
    {
        // ...
    }
}

class CarroPopular extends Carro
{
    public function acelerar()
    {
        $this->velocidade = 80;
        parent::acelerar();
    }
}

class CarroEsportivo extends Carro
{
    public function acelerar()
    {
        $this->velocidade = 130;
        parent::acelerar();
    }
}