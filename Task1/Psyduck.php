<?php

namespace BinaryStudioAcademy\Task1;

class Psyduck implements Pokemon
{
    public function getShortName()
    {
        $name = explode('\\', get_class($this));
        return array_pop($name);
    }
    
    public function battleCry(): string
    {
        return $this->getShortName().': PSY!PSY!PSY!';
    }
    
    public function imageUrl(): string
    {
        return 'https://img.pokemondb.net/artwork/psyduck.jpg';
    }
}
