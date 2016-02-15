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
            $this->assertEquals(array(1, 2, "ping", 4, "pong", "ping"), $result);
        }

        function test_PingPong_ping()
        {
            //Arrange
            $test_PingPong = new PingPong;
            $input = (3);

            //Act
            $result = $test_PingPong->runPingPong($input);

            //Assert
            $this->assertEquals(array(1, 2, "ping"), $result);
        }

        function test_PingPong_pong()
        {
            //arrange
            $test_PingPong = new PingPong;
            $input = (5);

            //Act
            $result = $test_PingPong->runPingPong($input);

            //assert
            $this->assertEquals(array(1, 2,"ping", 4, "pong"), $result);
        }
    }

?>
