<?php

    function dd($data) {
        echo '<pre>';
        die(var_dump($data));
        echo '</pre>';
    }

    function nightClubAgeApproval($age) {
        if ($age >= 21) {
            echo "You are welcomed in the night club.<br>\n";
        } else {
            echo "You are not allowed to enter, your age is below 21!";
        }
    }