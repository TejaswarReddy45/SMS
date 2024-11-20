<?php
    $host="localhost";
    $username="root";
    $password="";
    $dbname="student_management_system";
    $conn=mysqli_connect($host,$username,$password,$dbname);
   /*User data selecting*/
    $select=mysqli_query($conn,"SELECT * FROM student_login_details;");
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Students Details</title>
    <style>
        body
        {
            background-color: #F0F0F0;
        }
        header
        {
            background-color: #003366;
            color: #ffffff;
            padding:4% 23%;
            height:10px;
            text-align:center;
            font-size:40px;
	        font-weight:bold;
            width:320%;
	        font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
        }
        table
        {
            margin-top:2%;
            border: 5px solid black;
            width:40%;
        }
        td
        {
            color: #003366;
            background-color: #F0F0F0;
            border: 1px solid black;
        }
        th
        {
            color: #00A86B;
        }
        th,
        td 
        {
            border: 1px solid black;
            padding: 10px 15px;
            text-align: center;
            height:3px;
            width:10px;
            font-size:120%;
        }
        #sms
            {
	            padding:15px 25px;
	            font-size:large;
	            border-radius:10%;
	            background-color: #00A86B;
	            color: #ffffff;
                cursor: pointer;
                box-shadow: 0 9px #999;
	            text-align: center;
                margin:5% 40% 9% 40%;
            }
            #sms:hover
            {
	            background-color: #008B5E;
	            color:#ffffff;
            }
            #sms:active
            {
	            background-color: #008B5E;
	            color: #ffffff;
	            box-shadow: 0 5px black;
	            transform: translateY(4px);
            }
    </style>
</head>
<body>
    <header>
        <?php $name = $_GET['name']; 
			    echo $name; ?>
    </header>
            <table cellspacing ="3" cellpadding="5" align="center">
            <tr style="font-weight: bold;background-color:white;">
                <th>Username</th>
                <th>Password</th>
            </tr>
            <?php 
                while($rows=$select->fetch_assoc())
                {
            ?>
            <tr>
                <td><?php echo $rows['username'];?></td>
                <td><?php echo $rows['pass'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        <div align="center">
				<a href="Admin Login.html?name=<?php echo $name; ?>"><button type="submit" id="sms"><b>Go to <br>Homepage</b></button></a>
		</div>
</body>
 
</html>