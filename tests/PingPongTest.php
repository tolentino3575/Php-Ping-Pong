<<?php

    require_once "src/PingPong.php";

    class PingPongTest extends PHPUnit_Framework_TestCase
    {
        function test_PingPong_numberList()
        {
            //Arrange
            $test_PingPong = new PingPong;
            $input = (6);

            //Act
            $result = $test_PingPong->runPingPong($input);

            //assert
            $this->assertEquals(array(1, 2, 3, 4, 5, 6), $result);
        }


    }

?>
