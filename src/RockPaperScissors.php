<?php
    class RockPaperScissors {

        function playGame($player1, $player2)
        {
            $player1winner = "Player 1";
            $player2winner = "Player 2";
            $draw = "Draw";

            if ($player1 == $player2) {
                return $draw;
            }
            else if ($player1 == "rock" && $player2 == "scissors") {
                return $player1winner;
            }
            else if ($player2 == "rock" && $player1 == "scissors") {
                return $player2winner;
            }
            else if ($player1 == "scissors" && $player2 == "paper") {
                return $player1winner;
            }
            else if ($player2 == "scissors" && $player1 == "paper") {
                return $player2winner;
            }
            else {
                echo "You have a problem.";
            }
        }
    }
?>


if (player1 == player2) {
    return 3
}




if number = 3
{
    output = draw;
}

if player 1 equals "rock" && player 2 equals "scissors" {
    return 1
}
    else { return 2
}

if number = return 1 {
    output player 1
}
else output player 2
