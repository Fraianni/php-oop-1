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

$rocky = new Movie("rocky", "azione", 60);
$rambo = new Movie("rambo", "azione", 7);

?>
<div class="container">
    <div class="film">
        <?php
        echo ($rocky->nome . '<br>');
        echo ($rocky->genre . '<br>');
        echo ($rocky->vote . '<br>');
        ?>
    </div>

    <div class="film">
        <?php
        echo ($rambo->nome . '<br>');
        echo ($rambo->genre . '<br>');
        echo ($rambo->vote . '<br>');
        ?>
    </div>
</div>

<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    .container {
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .film {
        border: 1px solid black;
        margin: 10px 0px;
        background-color: antiquewhite;
        text-align: center;
        width: 300px;
    }
</style>