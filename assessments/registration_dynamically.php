<?php
class Register
{
    /* declaring the variables along with their visibility to be used in the program */
    public $username;
    
    public $email;
    
    public $password;
    
    public $cpassword;
    
    public $gender;
    /* the below five functions are used to set the $username,$email,$password,$cpassword,$gender*/
    /* @param \$username
       @return $username */
    public function username($username)
    {
        $this->username = $username;
    }
    /* @param \$email
       @return $email */
    public function email($email)
    {
        $this->email = $email;
    } 
    /* @param \$password
       @return $password */
    public function password($password)
    {
        $this->password = $password;
    }
    /* @param \$cpassword
       @return $cpassword */
    public function cpassword($cpassword)
    {
        $this->cpassword = $cpassword;
    }
    /* @param \$gender
       @return $gender */
    public function gender($gender)
    {
        $this->gender = $gender;
    }
   /* @param \$password
      @return $password if condition is true else returns the error statemnt enclosed in echo */
    public function validate1($password)
    {
        if (!preg_match("/[a-z]{6}/", $password)) {
            echo "password should be more than 6 characters";
        }
    }
    /* @param \$cpassword
       @return $cpassword if condition is true else returns the error statemnt enclosed in echo */
    public function validate2($cpassword)
    {
        if (!preg_match("/[a-z]{6}/", $cpassword)) {
            echo "cpassword should be more than 6 characters";
        }
    }
     /* @param \$password,$cpassword
        @return $password,$cpassword if condition is true else returns the error statemnt enclosed in echo */
    public function validate3($password, $cpassword)
    {
        if ($password == $cpassword) {
            $this->password  = $password;
            $this->cpassword = $cpassword;
        } else {
            echo "invalid password";
            echo "<br />";
        }
    }
    public function display1()
    {
        require 'form.html';
    }
    public function display()
    {
        echo "the information is:";
        echo "the username is:" . $this->username;
        echo "the email is:" . $this->email;
        echo "the password is:" . $this->password;
        echo "the cpassword is:" . $this->cpassword;
        echo "the gender is:" . $this->gender;
    }
}
$reg1 = new Register();
echo $reg1->display1();
echo $reg1->username($_POST['username']);
echo $reg1->email($_POST['user_email']);
echo $reg1->password($_POST['user_password']);
echo $reg1->cpassword($_POST['user_confirmation_password']);
echo $reg1->gender($_POST['gender']);
echo $reg1->validate1($_POST['user_password']);
echo $reg1->validate2($_POST['user_confirmation_password']);
echo $reg1->validate3($_POST['user_password'], $_POST['user_confirmation_password']);
echo $reg1->display();
?> 
