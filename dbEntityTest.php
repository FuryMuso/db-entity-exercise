<?php

$db = new PDO('mysql:host=192.168.20.20;dbname=oopDbExercise', 'root');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

class userEntity {

    public $id;
    public $name;
    public $age;
}

$query = $db->prepare("SELECT `id`, `name`, `age` FROM `users`;");
$query->execute();
$query->setFetchMode(PDO::FETCH_CLASS, "userEntity");
$result = $query->fetch();

echo $result->id . "<br>";
echo $result->name . "<br>";
echo $result->age . "<br>";


//$db = new PDO('mysql:host=192.168.20.20;dbname=oopDbExercise', 'root');
//$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//
//class userEntity {
//
//    public $id;
//    public $name;
//    public $age;
//}
