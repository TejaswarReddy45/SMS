<?php
    $host="localhost";
    $username="root";
    $password="";
    $dbname="student_management_system";
    $conn=mysqli_connect($host,$username,$password,$dbname);
    $name=$_POST['name'];
    $operation=$_POST['select'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    /*Check User details*/
        $select="SELECT username,pass FROM admin_login_details WHERE username=? and pass=?";
        $stmt=$conn->prepare($select);
        $stmt->bind_param("ss", $username,$password);
        $stmt->execute();
        $result=$stmt->get_result();
        $value=$result->fetch_assoc();
        $user=$value['username'];
        $pass=$value['pass'];
        ;
        if($username==$user && $password==$pass)
        {
            header("Location: " . $operation . "?name=" . urlencode($name));
        }
        else
        {
            echo '<script> if(confirm("User Not Exists"))
                           {
                                window.location.href = "Admin Login1.html?name=' . urlencode($name) . '";
                           }
                           else
                           {
                                window.location.href = "Admin Login1.html?name=' . urlencode($name) . '";
                           }
            </script>';
        }
        $stmt->close();
        $conn->close();
?>