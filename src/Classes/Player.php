<?php

class Player{
    public string $name;
    public int $balance;
    public array $properties;
    public bool $isJailed;

    public function __construct($name)
    {
        $this->name = $name;
        $this->balance = 100000;
        $this->properties = [];
        $this->isJailed = false;
    }

    public function getName():string
    {
        return $this->name;
    }
    
    public function getbalance():int
    {
        return $this->balance;
    }


    public function incrBalance($amount,$from):int
    {
        $this->balance += $amount;
        return $this->balance;
    }
    
    public function decrBalance($amount,$to):int
    {
        
        $tempBalance = $this->balance =- $amount;

        if ($tempBalance < 0){
            throw new \RuntimeException('Solde non suffisant');
        }
        else{
            $this->balance =- $amount;
            return $this->balance;
        }
    }

    public function addProperty()
    {
        
    }

    public function removeProperty()
    {

    }

    public function isJailded():bool
    {
        return  $this->isJailed;
    }


}