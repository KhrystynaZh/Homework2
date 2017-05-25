<?php

namespace BinaryStudioAcademy\Task3;

class PokemonPresenter
{
    private $pokemons;

    public function __construct(array $pokemons)
    {
        $this->pokemons = $pokemons;
    }

    /**
     * Returns html-list (ul-li) of images (img)
     *
     * @return string
     */
    public function present(): string
    {
        $result = '';
        foreach($this->pokemons as $pokemon) {
            $result .= '<img src='.$pokemon->imageURL().'>';
        }
        return $result;
    }
}
