<?php

namespace BinaryStudioAcademy\Task1;

class Bulbasaur implements Pokemon
{
    public function getShortName()
    {
        $name = explode('\\', get_class($this));
        return array_pop($name);
    }
    
    public function battleCry(): string
    {
        return $this->getShortName().': Bool bool!';
    }
    
    public function imageUrl(): string
    {
        return 'https://img.pokemondb.net/artwork/bulbasaur.jpg';
    }
}
