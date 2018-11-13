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


//***************************************************************************************************
//admin dashboard

//count for customer
function count_customer(){

    $query = query("SELECT * FROM users WHERE role='customer' AND instance_status = 'A'");
    confirm($query);
    $count_customer = 0;

    while ($row = fetch_array($query)) {

        $count_customer += 1;

    }
    echo $count_customer;
}

//count for beautician
function count_beautician(){

    $query = query("SELECT * FROM users WHERE role='beautician' AND instance_status = 'A'");
    confirm($query);
    $count_beautician = 0;

    while ($row = fetch_array($query)) {

        $count_beautician += 1;

    }
    echo $count_beautician;
}





//***************************************************************************************************
//***************************************************************************************************
//show all beautician

function show_beautician_in_admin(){

    $query = "SELECT * FROM users WHERE role = 'beautician' AND instance_status = 'A' ";
    $beautician_query = query("$query");
    confirm($beautician_query);

    while($row = fetch_array($beautician_query)){

        $users_id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $role = $row['role'];
        $pass = $row['pass'];
        $phone = $row['phone'];

        $beautician = <<<DELIMETER


     <tr>
            <td>{$name}</td>
            <td>{$email}</td>
            <td>{$phone}</td>
            <td>
                <div class="btn-group " >
                    <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="profile_beautician.php?id=$users_id"><i class="fa fa-eye"></i> View Details</a></li>
                        <li><a href="#"><i class="fa fa-edit"></i> Update</a></li>
                        <li><a href="#"><i class="fa fa-navicon" ></i> Assign</a></li>
                        <li class="divider" ></li>
                        <li><a href="#" class="text-red" ><i class="fa fa-trash"></i> Delete</a></li>

                    </ul>
                </div>
            </td>
     </tr>
DELIMETER;

        echo $beautician;
    }
}


//show all customer

function show_customer_in_admin(){

    $query = "SELECT * FROM users WHERE role = 'customer' AND instance_status = 'A'";
    $customer_query = query("$query");
    confirm($customer_query);

    while($row = fetch_array($customer_query)){

        $users_id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $role = $row['role'];
        $pass = $row['pass'];
        $phone = $row['phone'];

        $customer = <<<DELIMETER


     <tr>
            <td>{$name}</td>
            <td>{$email}</td>
            <td>{$phone}</td>
            <td>
                <div class="btn-group " >
                    <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-eye"></i> View Details</a></li>
                        <li><a href="#"><i class="fa fa-edit"></i> Update</a></li>
                        <li class="divider" ></li>
                        <li><a href="#" class="text-red" ><i class="fa fa-trash"></i> Delete</a></li>

                    </ul>
                </div>
            </td>
     </tr>
DELIMETER;

        echo $customer;
    }
}


//show all admin

function  show_admin(){

    $query = "SELECT * FROM users WHERE role = 'admin'  AND instance_status = 'A' ";
    $admin_query = query("$query");
    confirm($admin_query);

    while($row = fetch_array($admin_query)){

        $users_id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $role = $row['role'];
        $pass = $row['pass'];
        $phone = $row['phone'];

        $admin= <<<DELIMETER


     <tr>
            <td>{$name}</td>
            <td>{$email}</td>
            <td>{$phone}</td>
            <td>
                <div class="btn-group " >
                    <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-eye"></i> View Details</a></li>
                        <li><a href="#"><i class="fa fa-edit"></i> Update</a></li>
                        <li class="divider" ></li>
                        <li><a href="#" class="text-red" ><i class="fa fa-trash"></i> Delete</a></li>

                    </ul>
                </div>
            </td>
     </tr>
DELIMETER;

        echo $admin;
    }
}
//***************************************************************************************************
?>