<?php
require_once('ConnectToMongo.php');
class ConnectToMongoTest extends PHPUnit_Framework_TestCase{
  
  public function testDatabase(){
      $connection = new ConnectToMongo();
      $collection = $connection->connect();
      $connection->insertDocument($collection, 'Seattle', 'WA');
      $result = $connection->findADocument($collection, 'Seattle');
      $this->assertEquals('Seattle, WA', $result); //check if MongoDB returned 'Seattle, WA' 
  }
}
?>
