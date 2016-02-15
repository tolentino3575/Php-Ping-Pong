<?php
    class PingPong
    {
        function runPingPong($input_number)
        {
            $count = 1;
            $number_list = array();
            while ($count <= $input_number){
                array_push($number_list, $count);
                ++$count;
            }

            return $number_list;
        }

    }

?>
