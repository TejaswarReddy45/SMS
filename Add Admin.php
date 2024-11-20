<?php
    $host="localhost";
    $username="root";
    $password="";
    $dbname="student_management_system";
    $conn=mysqli_connect($host,$username,$password,$dbname);
    $name=$_POST['name'];
    /*user data*/
    $username=$_POST['username'];
    $password=$_POST['password'];
    /*User Checking*/
    $select="SELECT username FROM admin_login_details WHERE username=?" ;
    $stmt=$conn->prepare($select);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result=$stmt->get_result();
    $value=$result->fetch_assoc();
    $user=$value['username'];
    if($username==$user)
    {
        echo    '<script>  if(confirm("User already exists"))
                        {
                            document.location.href="Add Student.html?name=' . urlencode($name) . '";
                        }
                        else
                        {
                            document.location.href="Add Student.html?name=' . urlencode($name) . '";
                        }
                </script>';
    }
    else
    {
        $insert=mysqli_query($conn,"INSERT INTO admin_login_details (username,pass) VALUES ('$username','$password')");
        if(!$insert)
        {
           echo '<script>  if(confirm("Data is not inserted"))
                        {
                            document.location.href="Add Admin.html?name=' . urlencode($name) . '";
                        }
                        else
                        {
                            document.location.href="Add Admin.html?name=' . urlencode($name) . '";
                        }
                </script>';
        }
        else
        {
            echo '<script>  if(confirm("Data is inserted"))
                        {
                            document.location.href="Add Admin.html?name=' . urlencode($name) . '";
                        }
                        else
                        {
                            document.location.href="Add Admin.html?name=' . urlencode($name) . '";
                        }
                </script>';
        }
    }
    $stmt->close();
    $conn->close();
?>