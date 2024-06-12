$currentBall = 1;
$pins_this_frame = 0;
$spare = false;
$strike = false;

roll($pins_down) {
    if( $frame < 10) {
        $this->total += $pins_down;

// strike check
        if(pins_down == 10 && $currentBall == 1) {
            $strike = true;
            $frame++;
        }


        if ($currentBall == 1) {
            $currentBall = 2;

            if($spare || $strike) {
                total += $pins_down;
                $spare = false;
            }
            $pins_this_frame = $pins_down;
        } 
        else {
            if($strike) {
                total += $pins_down
                $strike = false
            }
            $pins_this_frame += $pins_down;

// spare check
            if($pins_this_frame == 10) {
                $spare = true;
            }

            $currentBall = 1;
            $frame++;
            $pins_this_frame = 0;
        }

    }

    if($frame == 10) {
        $this->total += $pins_down;
        $pins_this_frame += $pins_down;

// strike check
        if(pins_down == 10 && $currentBall == 1) {
            $strike = true;

        } 

// spare check
        if($pins_this_frame == 10 && $currentBall == 2) {
            $spare = true;
            
        }

// end of round 10 check (no spare or strike)
        if(($currentBall == 2 && !$strike && !$spare) || $currentBall == 3) {
            // reset all properties for next game
            $currentBall = 1;
            $pins_this_frame = 0;

            // increase to frame 11 so loginc doesn't run anymore
            $frame++;
        }
        $currentBall ++;
    }
}