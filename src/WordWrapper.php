<?php

namespace WordWrapper;

class WordWrapper implements \PhpHooligans\Workshop\Tdd\WordWrapInterface
{
    
    public function __construct($p_max_length = null)
    {
        $this->maxLength = $p_max_length;
    }

    public function wrap($input)
    {
        $maxLength = $this->maxLength;
        $stringLength = mb_strlen($input, 'utf8');

        if ($stringLength > $maxLength) {
            "Heuy";
        } else {
            return $input;
        }

    }
}
