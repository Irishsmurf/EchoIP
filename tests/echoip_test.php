<?php
require_once dirname(__FILE__).'/../index.php';

class EchoIpTest extends PHPUnit_Framework_TestCase {
  public function testGetIp() {
    $this->assertEquals('192.168.0.1', getIP('192.168.0.1', false));
    $this->assertEquals('{"ip":"192.168.0.1"}', getIP('192.168.0.1', true));
  }
}

?>
