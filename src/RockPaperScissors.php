<?php
    class RockPaperScissors {

        function playGame($player1, $player2)
        {
            $player1winner = "Player 1";
            $player2winner = "Player 2";
            $draw = "Draw";

            if ($player1 == "rock" && $player2 == "scissors") {
                return $player1winner;
            }
        }
    }
?>
