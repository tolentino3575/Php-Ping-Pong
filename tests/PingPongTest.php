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

        function test_PingPong_pingPong()
        {
            //arrange
            $test_PingPong = new PingPong;
            $input = (15);

            //act
            $result = $test_PingPong->runPingPong($input);

            //assert
            $this->assertEquals(array(1, 2, "ping", 4, "pong", "ping", 7, 8, "ping", "pong", 11, "ping", 13, 14, "pingpong"), $result);
        }
    }

?>
