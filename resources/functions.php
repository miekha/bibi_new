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


//USERS
//***************************************************************************************************

//login user/admin/customer/beautician
function login_user()
{

    if (isset($_POST['submit'])) {
        $email = escape_string($_POST['email']);
        $pass = escape_string($_POST['pass']);

        $query = query("SELECT * FROM users WHERE email = '{$email}' AND pass = '{$pass}'");
        confirm($query);

        if (mysqli_num_rows($query) == 0) {

            set_message("Your password or Username are wrong");
            redirect("login.php");
        }else{

            if($row = fetch_array($query)){

                $id = $row['id'];
                $name = $row['name'];
                $role = $row['role'];

                $_SESSION['email'] = $email;
                $_SESSION['name'] = $name;
                $_SESSION['role'] = $role;
                $_SESSION['id'] = $id;

                if($role == "customer"){
                    set_message("Welcome customer {$name}");
                    redirect("dashboard.php?id=$id");  //change to customer dashboard later
                }
                else if($role == "admin"){
                    set_message("Welcome Admin {$name}");
                    redirect("dashboard.php?id=$id");
                }
                else if($role == "beautician"){
                    set_message("Welcome Beautician {$name}");
                    redirect("dashboard.php?id=$id");
                }
            }

        }


    }
}





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


//login customer
function login_customer()
{

    if (isset($_POST['submit'])) {
        $email = escape_string($_POST['email']);
        $pass = escape_string($_POST['pass']);

        $query = query("SELECT * FROM users WHERE email = '{$email}' AND pass = '{$pass}'");
        confirm($query);

        if (mysqli_num_rows($query) == 0) {

            set_message("Your password or Username are wrong");
            redirect("login.php");
        }else{

            if($row = fetch_array($query)){

                $id = $row['id'];
                $name = $row['name'];
                $role = $row['role'];

                $_SESSION['email'] = $email;
                $_SESSION['name'] = $name;
                $_SESSION['role'] = $role;
                $_SESSION['id'] = $id;

                if($role == "customer"){
                    set_message("Welcome customer {$name}");
                    redirect("main.php?id=$id");  //change to customer dashboard later
                }
                else if($role == "admin"){
                    set_message("Welcome Admin {$name}");
                    redirect("admin/dashboard.php?id=$id");
                }
                else if($role == "beautician"){
                    set_message("Welcome Beautician {$name}");
                    redirect("../dashboard.php?id=$id");
                }
            }
        }
    }
}








//function search_main(){
//    if (isset($_POST['submit'])) {
//        $message = "This features Coming Soon.";
//        echo "<script type='text/javascript'>alert('$message');</script>";
//    }
//}
//***************************************************************************************************
?>