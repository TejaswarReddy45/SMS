<?php
    $host="localhost";
    $username="root";
    $password="";
    $dbname="student_management_system";
    $conn=mysqli_connect($host,$username,$password,$dbname);
   /*User data selecting*/
    $select=mysqli_query($conn,"SELECT * FROM Student_Details;");
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Details Admin View</title>
    <style>
        body
        {
            background-color: #F0F0F0;
            font-size:15px;
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
            background-color:#F0F0F0;
        }
        th
        {
            color:#00A86B;
        }
        td
        {
            color:#003366;
            border: 1px solid black;
        }
        th,
        td 
        {
            border: 1px solid black;
            padding: 10px 15px;
            text-align: center;
            height:3px;
            width:10px;
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
            <table cellspacing ="3" cellpadding="5" >
            <tr style="font-weight: bold;background-color:white;">
                <th>Pin No</th>
                <th>Student Name</th>
                <th>Branch</th>
                <th>Course</th>
                <th>Date of Birth</th>
                <th>Admission No</th>
                <th>Admission Type</th>
                <th>Gender</th>
                <th>Caste</th>
                <th>Sub Caste</th>
                <th>Religion</th>
                <th>Aadhar No</th>
                <th>Ration Card No</th>
                <th>E-Mail</th>
                <th>Phone</th>
                <th>Blood Group</th>
                <th>Mole1</th>
                <th>Mole2</th>
                <th>Permanent Address</th>
                <th>Present Address</th>
                <th>10th Year</th>
                <th>10th Hall Ticket</th>
                <th>10th Institution</th>
                <th>10th Board</th>
                <th>10th Medium</th>
                <th>10th Total Marks</th>
                <th>10th Obtained Marks</th>
                <th>10th Percentage</th>
                <th>10th Marks certificate No</th>
                <th>10th TC No</th>
                <th>Inter Year</th>
                <th>Inter Hall Ticket </th>
                <th>Inter Institution</th>
                <th>Inter Board</th>
                <th>Inter Medium</th>
                <th>Inter Total Marks</th>
                <th>Inter Obtained Marks</th>
                <th>Inter Percentage</th>
                <th>Inter Marks certificate No</th>
                <th>Inter TC No</th>
                <th>Polycet Hall Ticket</th>
                <th>Polycet Marks</th>
                <th>Polycet Rank</th>
                <th>Father Name</th>
                <th>Father Age</th>
                <th>Father Qualification</th>
                <th>Father Occupation</th>
                <th>Father Aadhar</th>
                <th>Father Phone</th>
                <th>Mother Name</th>
                <th>Mother Age</th>
                <th>Mother Qualification</th>
                <th>Mother Occupation</th>
                <th>Mother Aadhar</th>
                <th>Mother Phone</th>
            </tr>
            <?php 
                while($rows=$select->fetch_assoc())
                {
            ?>
            <tr>
                <td><?php echo $rows['pinno'];?></td>
                <td><?php echo $rows['studentname'];?></td>
                <td><?php echo $rows['branch'];?></td>
                <td><?php echo $rows['course'];?></td>
                <td><?php echo $rows['DOB'];?></td>
                <td><?php echo $rows['Admission_No'];?></td>
                <td><?php echo $rows['Admission_Type'];?></td>
                <td><?php echo $rows['Gender'];?></td>
                <td><?php echo $rows['Caste'];?></td>
                <td><?php echo $rows['Sub_Caste'];?></td>
                <td><?php echo $rows['Religion'];?></td>
                <td><?php echo $rows['Student_Aadhar'];?></td>
                <td><?php echo $rows['Ration_Card'];?></td>
                <td><?php echo $rows['EMail'];?></td>
                <td><?php echo $rows['Phone'];?></td>
                <td><?php echo $rows['Blood_Group'];?></td>
                <td><?php echo $rows['Mole1'];?></td>
                <td><?php echo $rows['Mole2'];?></td>
                <td><?php echo $rows['Permanent_Address'];?></td>
                <td><?php echo $rows['Present_Address'];?></td>
                <td><?php echo $rows['Year10'];?></td>
                <td><?php echo $rows['Hall_Ticket10'];?></td>
                <td><?php echo $rows['Institution10'];?></td>
                <td><?php echo $rows['Board10'];?></td>
                <td><?php echo $rows['Medium10'];?></td>
                <td><?php echo $rows['Total_Marks10'];?></td>
                <td><?php echo $rows['Obtained_Marks10'];?></td>
                <td><?php echo $rows['Percentage_of_Marks10'];?></td>
                <td><?php echo $rows['Marks_Certificate_No10'];?></td>
                <td><?php echo $rows['TC_No10'];?></td>
                <td><?php echo $rows['InYear'];?></td>
                <td><?php echo $rows['InHall_Ticket'];?></td>
                <td><?php echo $rows['InInstitution'];?></td>
                <td><?php echo $rows['InBoard'];?></td>
                <td><?php echo $rows['InMedium'];?></td>
                <td><?php echo $rows['InTotal_Marks'];?></td>
                <td><?php echo $rows['InObtained_Marks'];?></td>
                <td><?php echo $rows['In_Percentage_of_Marks'];?></td>
                <td><?php echo $rows['InMarks_Certificate_No'];?></td>
                <td><?php echo $rows['InTC_No'];?></td>
                <td><?php echo $rows['polyHall_Ticket'];?></td>
                <td><?php echo $rows['PolyMarks'];?></td>
                <td><?php echo $rows['PolyRank'];?></td>
                <td><?php echo $rows['Father_Name'];?></td>
                <td><?php echo $rows['Fage'];?></td>
                <td><?php echo $rows['FQualification'];?></td>
                <td><?php echo $rows['Foccupation'];?></td>
                <td><?php echo $rows['Faadhar'];?></td>
                <td><?php echo $rows['Fphone'];?></td>
                <td><?php echo $rows['Mother_Name'];?></td>
                <td><?php echo $rows['Mage'];?></td>
                <td><?php echo $rows['MQualification'];?></td>
                <td><?php echo $rows['Moccupation'];?></td>
                <td><?php echo $rows['Maadhar'];?></td>
                <td><?php echo $rows['Mphone'];?></td>
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