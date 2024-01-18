<?php

/**
 * Plugin Name: user crud
 * Description: This is a simple custom plugin for WordPress.
 * Version: 1.0
 * Author: TALHA REHMAN
 */

add_action('admin_menu', 'display_user_menu');
function display_user_menu()
{
    add_menu_page('USER', 'USER', 'manage_options', 'user_list_page', 'user_list_callback');
    add_submenu_page('user_list_page', 'Add User', 'Add User', 'manage_options', 'add_user_page', 'add_user_callback');
}

function user_list_callback()
{
    echo "talha rehman";
}

function add_user_callback()
{
    $conn = new mysqli('localhost', "root", "", "user_pluggin");
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $insert = "INSERT INTO `add_user`(`id`, `user_name`, `user_email`, `user_contact`) VALUES ('$name','$email','$password','$phone')";
        $query = mysqli_query($conn, $insert);
        if ($conn) {
            echo "user inserted";
        } else {
            echo  "some thing went wronge";
        }
    }
?>
    <form action="" method="POST">
        <label for="">Name</label> <br>
        <input type="text" name="name" class="form-cotrol"><br><br>
        <label for="">Email</label>
        <input type="email" name="email"><br><br>
        <label for="">Password</label>
        <input type="password" name="password"><br><br>
        <label for="">Phone No</label>
        <input type="number" name="phone"><br><br>
        <input type="submit" name="submit">

    </form>
<?php
}
