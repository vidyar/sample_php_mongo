<?php

class ConnectToMongo {
  public function connect()
  {
    // Connect to the database and return the collection
    $mongo = new Mongo('mongodb://localhost');
    $db = $mongo->selectDB('test');
    return $db->selectCollection('locations');
  }

  public function insertDocument($collection, $city, $state)
  {
    $place = array(
	  'city' => $city,
	  'state' => $state
    );
    $collection->insert($place);
  }
 
  public function findADocument($collection, $city)
  {
    $toFind = array(
	  'city' => $city
    );
    $place = $collection->findOne($toFind);
    return $place['city'] . ", " . $place['state'];
  }
} 
?>

