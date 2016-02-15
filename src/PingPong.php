<?php
    class PingPong
    {
        function runPingPong($input_number)
        {
            $count = 1;
            $number_list = array();
            while ($count <= $input_number){
                if ($count % 3 == 0)
                {
                    array_push($number_list, "ping");
                } elseif ($count % 5 == 0)
                {
                    array_push($number_list, "pong");
                }
                else
                {
                    array_push($number_list, $count);
                }
                    ++$count;

            }

            return $number_list;
        }

    }

?>
