<?php

namespace BinaryStudioAcademy\Task2;

class EmojiGenerator
{
    private $emoji = ['😀', '😃', '😄', '😁', '😆', '😅', '😂'];
    
    public function generate()
    {
        foreach($this->emoji as $item) {
            yield $item;
        }
    }
}
