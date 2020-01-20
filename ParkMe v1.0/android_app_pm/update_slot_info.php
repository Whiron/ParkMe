<?php

class update_slot_info {

    private $conn;

    // constructor
    function __construct() {
        require_once 'android_login_connect.php';
        // connecting to database
        $db = new android_login_connect();
        $this->conn = $db->connect();
    }

    // destructor
    function __destruct() {

    }

    /**
     * Storing new user
     * returns user details
     */
     public function StoreUserInfo($email,$startT,$endT,$build) {
       
        $t='7';
        $stmt = $this->conn->prepare("INSERT INTO slot_tbl(email, startT, endT, build) VALUES(?, ?, ?, ?)");
        //$stmt->bind_param("ssss",$email,$startT,$endT,$build);
        $stmt->bind_param("ssss",$email,$startT,$endT,$build);
        $result = $stmt->execute();
        $stmt->close();

        // check for successful store
        if ($result) {
            $stmt = $this->conn->prepare("SELECT startT, endT, build FROM slot_tbl WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt-> bind_result($token2,$token3,$token4);
            while ( $stmt-> fetch() ) {
               $user["startT"] = $token2;
               $user["endT"] = $token3;
               $user["build"] = $token4;
               
            }
            $stmt->close();
            return $user;
        } else {
          return false;
        }
    }
}

?>