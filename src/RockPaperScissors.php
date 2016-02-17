<?php
    class RockPaperScissors {
        // private $player1;
        // private $player2;
        //
        // function __construct($new_player1, $new_player2)
        // {
        //     $this->player1 = $new_player1;
        //     $this->player2 = $new_player2;
        // }
        //
        // function setPlayer1($new_player1){
        //     $this->player1 = $new_player1;
        // }
        //
        // function setPlayer2($new_player2) {
        //     $this->player2 = $new_player2;
        //
        // }
        //
        // function getPlayer1(){
        //     return $this->player1;
        // }
        //
        // function getPlayer2(){
        //     return $this->player2;
        // }

        function playGame($player1, $player2)
        {
            $player1winner = "Player 1";
            $player2winner = "Player 2";
            $draw = "Draw";

            if ($player1 == $player2) {
                return $draw;
            }
            else if ($player1 == "rock") {
                if ($player2 == "scissors"){
                    return $player1winner;
                }
                else {
                    return $player2winner;
                }
            }
            else if ($player1 == "scissors") {
                if ($player2 == "paper"){
                    return $player1winner;
                }
                else {
                    return $player2winner;
                }
            }
            else if ($player1 == "paper") {
                if ($player2 == "rock"){
                    return $player1winner;
                }
                else {
                    return $player2winner;
                }
            }
            else {
                echo "Stuff is messed up!";
            }
        }
    }
?>
