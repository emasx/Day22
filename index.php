<?php include "inc/header.php"; ?>


<?php
 
 class Person {
    public $name; // Access modifier
    public $id;


    // Constructor Method

    public function __construct($name) {  // It is automatically reloaded 
        $this->name = $name;
    }
    

    public function setId($id) {
        $this->id = $id;
    }

    public function __destruct() {
        if(!empty($this->id)) { // if $this-id is not empty
            echo "Saving Person";
        }
    }

    // public function personDetails() { // method
    //     //echo "Person Name is:". $this->name;  // $this = object reference with which we access the property

    //     echo "Person Name is {$this->name}";
    // }


 }

  $personOne = new Person("De Emas");
  $personOne->setId(12);
  unset($personOne);

// class UserData {
//     public $user;
//     public $userId;
//     // public static $age = "30";
//     // const NAME = "Elle";

//     public function __construct($user, $userId) {
//         $this->user = $user;
//         $this->userId = $userId;

//         echo "User name is {$this->user} and user id is {$this->userId}";
//     }

//     public static function display() {
//         echo "Full name is " .  UserData::NAME . "<br>";
//         echo "Age is: " . self::$age;
//     }

//     public function __destruct() {
//         unset($this->user);
//         unset($this->userId);
//     }
// }

//  $user = "Emas";
//  $userId = 35;

//  $url = new UserData($user, $userId);
//  echo "<br>";
// //   $url->display();
//  UserData::display();



 class UserData {

    //public    
    //private   
    //protected



    public $user;
    public $userId;

    public function __construct($user, $userId) {
        $this->user = $user;
        $this->userId = $userId;
    }

    public  function  display() {
        echo "User name is {$this->user} and user id is {$this->userId}";
    }

}






class Admin extends UserData {

    public $level;

    public function display() {
        echo "User name is {$this->user} and user id is {$this->userId} and user level is {$this->level}";
    }
}







$user = "Emas";
$userId = 35;

$url = new UserData($user, $userId);
echo "<br>";
$url->display();
echo "<br>";







$user = "George";
$userId = 28;

$admin = new Admin($user, $userId);
$admin->level = "Administrator";
$admin->display();
?>

















<?php include "inc/footer.php"; ?>