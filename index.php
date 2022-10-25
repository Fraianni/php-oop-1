<?php

class Movie
{
    public $nome;
    public $genre;
    public $vote = 0;


    function __construct($_nome, $_genre, $_vote = 0)
    {
        $this->nome = $_nome;
        $this->genre = $_genre;
        $this->setVote($_vote);
    }

    private function setVote($_vote)
    {
        while ($_vote > 10) {
            $_vote = $_vote / 10;
        }
        $this->vote = $_vote;
    }




    public function __set($name, $value)
    {
        throw new Exception("Cannot add new property \$$name to instance of " . __CLASS__);
    }
}

$rocky = new Movie("rocky", "azione", 10);
echo ($rocky->vote . '<br>');
