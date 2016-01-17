<?php
require_once dirname(__FILE__).'/../index.php';

class EchoIpTest extends PHPUnit_Framework_TestCase {
  public function testGetIpV4() {
    $this->assertEquals('192.168.0.1', getIP('192.168.0.1', false));
    $this->assertEquals('{"ip":"192.168.0.1"}', getIP('192.168.0.1', true));
  }

  public function testGetIpV6() {
    $this->assertEquals('2001:0db8:0a0b:12f0:0000:0000:0000:0001', getIP('2001:0db8:0a0b:12f0:0000:0000:0000:0001', false));
    $this->assertEquals('{"ip":"2001:0db8:0a0b:12f0:0000:0000:0000:0001"}', getIP('2001:0db8:0a0b:12f0:0000:0000:0000:0001', true));    
  }
}

?>
