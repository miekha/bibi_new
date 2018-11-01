<?php
//this file for any processing for the system

$upload = "uploads";

//helper
//*************************************************************************************************
function last_id(){

    global $connection;
    return mysqli_insert_id($connection);
}

function set_message($msg){
    if (!empty($msg)) {
        $_SESSION['message'] = $msg;
    } else {
        $msg = "";
    }
}

function display_message(){
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function redirect($location){
    header("Location: $location");
}

function query($sql){
    global $connection;
    return mysqli_query($connection, $sql);
}

function confirm($result){
    global $connection;
    if (!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection, $string);

}

function fetch_array($result){ return mysqli_fetch_array($result);}
//***************************************************************************************************





//***************************************************************************************************

/////////////////////////////////customer side//////////////////////////////////////////////////////
//register_customer
function register_customer()
{
    global $connection;

    if(isset($_POST['submit'])){
        $name = escape_string($_POST["name"]);
        $email = escape_string($_POST["email"]);
        $role = escape_string($_POST["role"]);
        $pass = escape_string($_POST["pass"]);



        if (!empty($name) && !empty($email) && !empty($pass)&& !empty($role)) {


            $checkEmail = query("SELECT * FROM users WHERE (email = '$email')");
            confirm($checkEmail);

            if(mysqli_num_rows($checkEmail)>0){

                 $row = mysqli_fetch_assoc($checkEmail);
                 if ($email == $row['email']){
                     set_message("email already exist !");
//                     echo "email already exist !";
                 }
                 else{
                     $query = query("INSERT INTO users(name,email,role,pass) VALUES('{$name}','{$email}','{$role}','{$pass}')");
                     confirm($query);

                     set_message("Successfully Registered.");
                     redirect('main.php?id={$name}');
                 }
            }
        }
        else{
            set_message("Fill the empty field !");
            redirect("register.php");
        }
    }
}












//***************************************************************************************************
?>