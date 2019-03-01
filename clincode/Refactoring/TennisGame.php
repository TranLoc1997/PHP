<?php

class TennisGame
{
    public $score = '';

    public function getScore( $ScorePlayer1, $ScorePlayer2)
    {
        $tempScore = 0;

        if ( $ScorePlayer1 == $ScorePlayer2 ) {
            switch  ( $ScorePlayer1 )
            {
                case 0:
                    $this->score = "Love-All";
                    break;
                case 1:
                    $this->score = "Fifteen-All";
                    break;
                case 2:
                    $this->score = "Thirty-All";
                    break;
                case 3:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;

            }
        }
    
        else if ( $ScorePlayer1 >= 4 || $ScorePlayer2 >= 4 )
        {
            $minusResult = $ScorePlayer1 - $ScorePlayer2;
            if ( $minusResult == 1 )
                $this->score = "Advantage player1";
               else if ( $minusResult == -1 )
                  $this->score = "Advantage player2";
                 else if ( $minusResult >= 2 ) 
                     $this->score = "Win for player1";
                     else
                        $this->score = "Win for player2";
         }
          else
          {
            for ( $i = 1 ; $i < 3 ; $i++)
            {
                if ( $i == 1 ) $tempScore = $ScorePlayer1;
                    else { 
                       $this->score .= "-"; 
                       $tempScore = $ScorePlayer2;
                    }
                    switch ( $tempScore )
                    {
                       case 0:
                           $this->score .= "Love";
                          break;
                       case 1:
                           $this->score .= "Fifteen";
                          break;
                       case 2:
                           $this->score .= "Thirty";
                         break;
                       case 3:
                           $this->score .= "Forty";
                         break;
                    }
                }
            }
        }

    public function __toString()
    {
        return $this->score;
    }
}
?>