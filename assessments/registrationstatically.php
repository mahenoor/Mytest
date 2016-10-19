<?php
class Register
{
    public $username;
    public $email;
    public $password;
    public $cpassword;
    public function username($username)
    {
        $this->username=$username;
    }
    public function email($email)
    {
        $this->email=$email;

    }
    public function password($password)
    {
        $this->password=$password;
    }
    public function cpassword($cpassword)
    {
        $this->cpassword=$cpassword;
    }
    public function validate1($password)
    {
        if(!preg_match("/[a-z]{6}/", $password)){
            die('password should be more than 6 characters');
        }
    }
    public function validate2($cpassword)
    {
        if(!preg_match("/[a-z]{6}/", $cpassword)){
            die('cpassword should be more than 6 characters');
        }
    }
    public function validate3($password,$cpassword)
    {
        if($password==$cpassword){
            $this->password=$password;
            $this->cpassword=$cpassword;
        }
        else
        {
            die("invalid password");
            echo "<br />";
        }
    }
    public function display()
    {
        echo "the information is:";
        echo "the username is:".$this->username;
        echo "the email is:".$this->email;
        echo "the password is:".$this->password;
        echo "the cpassword is:".$this->cpassword;
    }
}
$reg1=new Register();
echo $reg1->username('mahe');
echo $reg1->email('mahenoor04@gmail.com');
echo $reg1->password('compass');
echo $reg1->cpassword('qwerty');
echo $reg1->validate1('compass');
echo $reg1->validate2('qwerty');
echo $reg1->validate3('comoass','qwerty');
echo $reg1->display();
?>