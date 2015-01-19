<?php
    function getDays($y, $m){
        return new DatePeriod(
            new DateTime("first sunday of $y-$m"),
            DateInterval::createFromDateString('next sunday'),
            new DateTime("next month $y-$m-01")
        );

    }

    foreach (getDays(2014, 12) as $sunday) {
        echo $sunday->format("jS F, Y");
        echo "<br>\n";
    }
?>