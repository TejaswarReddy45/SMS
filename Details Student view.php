<?php
    $host="localhost";
    $username="root";
    $password="";
    $dbname="student_management_system";
    $conn=mysqli_connect($host,$username,$password,$dbname);
	$name=$_POST['name'];
	/*Taking user details*/
	$username=$_POST['username'];
	$password=$_POST['password'];
	/*Check student exist*/
        $select="SELECT username,pass FROM student_login_details WHERE username=? and pass=?";
        $stmt=$conn->prepare($select);
        $stmt->bind_param("ss",$username,$password);
        $stmt->execute();
        $result=$stmt->get_result();
        $value=$result->fetch_assoc();
        $user=$value['username'];
        $pass=$value['pass'];
        if($username==$user && $password==$pass)
        {
            $select="SELECT * FROM Student_Details WHERE pinno=?";
    		$stmt=$conn->prepare($select);
   			$stmt->bind_param("s",$username);
    		$stmt->execute();
    		$result=$stmt->get_result();
        	$rows=$result->fetch_assoc();
        }
        else
        {
			echo '<script>
			if (confirm("User not found")) 
			{
				window.location.href = "Student Login.html?name=' . urlencode($name) . '";
			} 
			else 
			{
				// Optional: You could redirect to another URL or handle the else case as needed
				window.location.href = "Student Login.html?name=' . urlencode($name) . '";
			}
			</script>';
        }
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Students Details</title>
    <style>
label.sms
{
	font-size:25px;
	font-style:serif;
}
header
{
	background-color:#003366;
	color: #ffffff;
	padding:4%;
	height:10px;
	text-align:center;
	font-size:40px;
	font-weight:bold;
}
div.parts
{
	color:#003366;
	padding:10px;
	border-style:solid;
	border-width:5px;
	border-radius:15px;
	border-color:#FFD700;
	margin: 2% 30% 2% 30%;
}
div.part
{
	padding:15px 100px;
	border-style:dashed;
	border-width:5px;
	border-radius:15px;
	margin: auto 10px;
	margin-bottom:10px;
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
h1,h2
{
	color:#00A86B;
}
body
{
	background-color:#F0F0F0;
	font-family: Arial, sans-serif;
}
    </style>
	</head>
	<body>
	<header>
		<?php
		    echo "$name";
		?>	
	</header>
			<div class="parts">
				<table align="center">
					<h1 align="center">Student Details</h1>
					<tr>
						<td><label class="sms"><b>Pin No</b></label></td>
                        <td><?php echo $rows['pinno'];?></td></tr>
					<tr>
						<td><label class="sms"><b>Student Name</b></label></td>
						<td><?php echo $rows['studentname'];?></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Branch</b></label></td>
                        <td><?php echo $rows['branch'];?></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Course</b></label></td>
                        <td><?php echo $rows['course'];?></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Date of Birth</b></label></td>
						<td><?php echo $rows['DOB'];?></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Admission No</b></label></td>
						<td><?php echo $rows['Admission_No'];?></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Admission Type</b></label></td>
                        <td><?php echo $rows['Admission_Type'];?></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Gender</b></label></td>
                        <td><?php echo $rows['Gender'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Caste</b></label></td>
                        <td><?php echo $rows['Caste'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Sub Caste</b></label></td>
                        <td><?php echo $rows['Sub_Caste'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Religion</b></label></td>
                        <td><?php echo $rows['Religion'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Aadhar No</b></label></td>
                        <td><?php echo $rows['Student_Aadhar'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Ration Card No</b></label></td>
                        <td><?php echo $rows['Ration_Card'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>E-Mail</E-Mail></b></label></td>
                        <td><?php echo $rows['EMail'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Phone</b></label></td>
                        <td><?php echo $rows['Phone'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Blood Group</b></label></td>
                        <td><?php echo $rows['Blood_Group'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Mole 1</b></label></td>
                        <td><?php echo $rows['Mole1'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Mole 2</b></label></td>
                        <td><?php echo $rows['Mole2'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Permanent Address</b></label></td>
                        <td><?php echo $rows['Permanent_Address'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Present Address</b></label></td>
                        <td><?php echo $rows['Present_Address'];?></td>
                    </tr>
				</table>
			</div>
			<div class="parts">
				<h1 align="center">Past Education Details</h1>
				<div class="part">
					<table >
						<h2 align="center">10th class details</h2>
						<tr>
							<td><label class="sms"><b>Year of passing</b></label></td>
							<td><?php echo $rows['Year10'];?></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Hall Ticket No</b></label></td>
                            <td><?php echo $rows['Hall_Ticket10'];?></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Institution Name</b></label></td>
                            <td><?php echo $rows['Institution10'];?></td>
                        </tr>
						<tr>
							<td><label class="sms"><b>Board of studying </b></label></td>
                            <td><?php echo $rows['Board10'];?></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Medium</b></label></td>
                            <td><?php echo $rows['Medium10'];?></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Total Marks</b></label></td>
                            <td><?php echo $rows['Total_Marks10'];?></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Obtained Marks</b></label></td>
                            <td><?php echo $rows['Obtained_Marks10'];?></td>
						</tr>
						<tr>
							<td><label class="sms"><b>% of Marks</b></label></td>
                            <td><?php echo $rows['Percentage_of_Marks10'];?></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Marks Certificate No</b></label></td>
                            <td><?php echo $rows['Marks_Certificate_No10'];?></td>
						</tr>
						<tr>
							<td><label class="sms"><b>TC No</b></label></td>
							<td><?php echo $rows['TC_No10'];?></td>
                        </tr>
					</table>
				</div>
				<div class="part">
					<table >
						<h2 align="center">Inter details</h2>
						<tr>
							<td><label class="sms"><b>Year of passing</b></label></td>
							<td><?php echo $rows['InYear'];?></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Hall Ticket No</b></label></td>
                            <td><?php echo $rows['InHall_Ticket'];?></td>
                        </tr>
						<tr>
							<td><label class="sms"><b>Institution Name</b></label></td>
                            <td><?php echo $rows['InInstitution'];?></td>
                        </tr>
						<tr>
							<td><label class="sms"><b>Board of studying</b></label></td>
                            <td><?php echo $rows['InBoard'];?></td>
                        </tr>
						<tr>
							<td><label class="sms"><b>Medium</b></label></td>
                            <td><?php echo $rows['InMedium'];?></td>
                        </tr>
						<tr>
							<td><label class="sms"><b>Total Marks</b></label></td>
                            <td><?php echo $rows['InTotal_Marks'];?></td>
                        </tr>
						<tr>
							<td><label class="sms"><b>Obtained Marks</b></label></td>
                            <td><?php echo $rows['InObtained_Marks'];?></td>
                        </tr>
						<tr>
							<td><label class="sms"><b>% of Marks</b></label></td>
                            <td><?php echo $rows['In_Percentage_of_Marks'];?></td>
                        </tr>
						<tr>
							<td><label class="sms"><b>Marks Certificate No</b></label></td>
							<td><?php echo $rows['InMarks_Certificate_No'];?></td>
                        </tr>
						<tr>
							<td><label class="sms"><b>TC No</b></label></td>
                            <td><?php echo $rows['InTC_No'];?></td>
                        </tr>
					</table>
				</div>
				<div class="part">
					<table >
						<h2 align="center">Polycet Details</h2>
						<tr>
							<td><label class="sms"><b>Hall Ticket No</b></label></td>
							<td align="right"><?php echo $rows['polyHall_Ticket'];?></td>
                        </tr>
						<tr>
							<td><label class="sms"><b>Marks per 120</b></label></td>
							<td align="center"><?php echo $rows['PolyMarks'];?></td>
                        </tr>
						<tr>
							<td><label class="sms"><b>Rank</b></label></td>
                            <td align="center"><?php echo $rows['PolyRank'];?></td>
                        </tr>
					</table>
				</div>
			</div>
			<div class="parts">
				<table align="center">
					<h1 align="center">Parent Details</h1>
					<tr>
						<td><label class="sms"><b>Father Name</b></label></td>
                        <td><?php echo $rows['Father_Name'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Age</b></label></td>
                        <td><?php echo $rows['Fage'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Qualification</b></label></td>
                        <td><?php echo $rows['FQualification'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Occupation</b></label></td>
                        <td><?php echo $rows['Foccupation'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Aadhar</b></label></td>
						<td><?php echo $rows['Faadhar'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Phone</b></label></td>
					    <td><?php echo $rows['Fphone'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Mother Name</b></label></td>
						<td><?php echo $rows['Mother_Name'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Age</b></label></td>
                        <td><?php echo $rows['Mage'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Qualification</b></label></td>
                        <td><?php echo $rows['MQualification'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Occupation</b></label></td>
                        <td><?php echo $rows['Moccupation'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Aadhar</b></label></td>
                        <td><?php echo $rows['Maadhar'];?></td>
                    </tr>
					<tr>
						<td><label class="sms"><b>Phone</b></label></td>
                        <td><?php echo $rows['Mphone'];?></td>
                    </tr>
				</table>
			</div>
            <div align="center">
				<a href = "Student Login.html?name=<?php echo $name; ?>"><button type="submit" id="sms"><b>Go Back</b></button></a>
			</div>
	</body>
</html>
<?php
$stmt->close();
$conn->close();
?>