<?php


class SignInUser
{

    private $email, $password;

    function __construct(){

        session_start();
        
        global $conn;
        

        include_once($_SERVER["DOCUMENT_ROOT"] . '/loader.php');
        
        if(isset($_REQUEST['email']) AND isset($_REQUEST['password'])){
            
            // sanitize variables

            $this->email = mysqli_real_escape_string($conn, $_REQUEST['email']);
            $this->password    = mysqli_real_escape_string($conn, $_REQUEST['password']);

            
            
            if(empty($this->email) OR empty($this->password)){
                echo "email is".$this->email;
                //die('Please fill all fields');
            }
            
            
            if(strlen($this->password) < 6){
                die('The password should be at least 6 characters');
            }

            //encrypt password
            $encpassword   = sha1($this->password);
            
            // validate information to avoid duplicates
            $account_arguments = array('email' => $this->email, 'password' => $encpassword);
        
            if(returnExists('agents', $account_arguments) == 0){
                die('Invalid email and password');
            }

            $_SESSION['loggedagent'] = $this->email;
            echo "1";
            
        }
    }
}

$signInUser = new SignInUser();

?>
