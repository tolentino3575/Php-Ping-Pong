<?php
    class PingPong
    {
        function runPingPong($input_number)
        {
            $count = 1;
            $number_list = array();
            while ($count <= $input_number){
                if ($count % 15 == 0)
                {
                    array_push($number_list, "pingpong");
                } elseif ($count % 5 == 0)
                {
                    array_push($number_list, "pong");
                } elseif ($count % 3 ==0)
                {
                    array_push($number_list, "ping");
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
