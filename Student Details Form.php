<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>Student Management System</title>
		<style>
			body
{
	background-color: #F0F0F0;
}
label.sms
{
	font-size:25px;
	font-style:serif;
}
input.name
{
	padding:8px;
	width:300px;
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
	font-family: Arial, sans-serif;
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
	padding:15px 50px;
	border-style:dashed;
	border-width:5px;
	border-radius:15px;
	margin: auto 10px;
	margin-bottom:10px;
}
.button
			{
				padding:15px 25px;
				font-size:large;
				border-radius:10%;
				background-color: #00A86B;
				color: #ffffff;
				cursor: pointer;
				box-shadow: 0 9px #999;
				text-align: center;
				margin:2%;
			}
			.button:hover
			{
				background-color: #008B5E;
				color:#ffffff;
			}
			.button:active
			{
				background-color: #008B5E;
				color: #ffffff;
				box-shadow: 0 5px black;
				transform: translateY(4px);
			}
			div.buttons
			{
				display:inline-flex;
				justify-content:center;
				gap:0;
			}
			
h1,h2
{
	color:#00A86B;
	font-family: Arial, sans-serif;
}

		</style>
	</head>
	<body>
		<header>
<?php
// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the 'name' parameter is set in the URL
if (isset($_GET['name'])) {
    // Sanitize and retrieve the name
    $name = htmlspecialchars(urldecode($_GET['name']), ENT_QUOTES); // Decode and escape quotes
    echo $name; // Print the name
} else {
    echo "No name provided!";
}
?>


		</header>
		<h3 align="center">Note: Enter details in Camil case letters</h3>
		<form id="studentdetailsform" action="Student Details.php" method="post">
    <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES); ?>">
			<div class="parts">
				<table align="center">
					<h1 align="center">Student Details</h1>
					<tr>
						<td><label class="sms"><b>Pin No</b></label></td>
						<td><input type="text" class="name" placeholder="Ex:22352-CM-100,..........." name="pinno" pattern="[0-9]{5}-[A-Z]{2,5}-[0-9]{3}" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Student Name</b></label></td>
						<td><input type="text" class="name" name="studentname" pattern="[A-Za-z\s]{5,50}" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Branch</b></label></td>
						<td><input type="text" class="name" placeholder="Ex:computer,mechanical,....." name="branch" pattern="[A-Za-z\s]{10,50}" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Course</b></label></td>
						<td><input type="text" class="name" name="course" value="Diploma" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Date of Birth</b></label></td>
						<td><input type="date" class="name" name="dob" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Admission No</b></label></td>
						<td><input type="text" class="name" placeholder="Ex:D-2131,D-2342,........." name="admissionno" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Admission Type</b></label></td>
						<td><input type="text" class="name" placeholder="Ex:Convenor,spot admission,........." name="admissiontype" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Gender</b></label></td>
						<td><input type="radio" class="gender" value="Male" name="gender" required><label for="male">Male</label>
							<input type="radio" class="gender" value="Female" name="gender" required><label for="female">Female</label>
							<input type="radio" class="gender" value="Others" name="gender" required><label for="others">Others</label></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Caste</b></label></td>
						<td><input type="text" class="name" placeholder="Ex:BC-A,SC,ST,......" name="caste" pattern="(BC-A|BC-B|BC-C|BC-D|SC|ST|OC|OBC)" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Sub Caste</b></label></td>
						<td><input type="text" class="name" name="subcaste" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Religion</b></label></td>
						<td><input type="text" class="name" placeholder="Ex:Hindhu,Muslim,Christian,....." name="religion" pattern="[A-Za-z]{4,20}" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Aadhar No</b></label></td>
						<td><input type="text" class="name" placeholder="XXXX XXXX XXXX" name="aadharno1" pattern="[0-9\s]{12}" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Ration Card No</b></label></td>
						<td><input type="text" class="name" placeholder="Enter Ration Card No" name="rationcardno" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>E-Mail</E-Mail></b></label></td>
						<td><input type="email" id="email" class="name" placeholder="Ex:abc@gmail.com" name="emailaddress" pattern="[a-z]{1,30}@gmail\.com" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Phone</b></label></td>
						<td><input type="tel" class="name" placeholder="XXXXX XXXXX" name="phone1" pattern="[0-9\s]{10,11}" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Blood Group</b></label></td>
						<td><input type="text" class="name" placeholder="Ex:A+,B+,O+,........." name="bloodgroup" pattern="/^(A|B|AB|O)[+-]$/" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Mole 1</b></label></td>
						<td><input type="text" class="name" placeholder="Enter Mole" name="mole1" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Mole 2</b></label></td>
						<td><input type="text" class="name" placeholder="Enter Mole" name="mole2" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Permanent Address</b></label></td>
						<td><input type="text" class="name" placeholder="Enter Permanent Address" name="permanentaddress" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Present Address</b></label></td>
						<td><input type="text" class="name" placeholder="Enter Present Address" name="presentaddress" required></td>
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
							<td><input type="year" class="name" placeholder="Enter passed year" name="passedyear1" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Hall Ticket No</b></label></td>
							<td><input type="text" class="name" placeholder="Enter Hall ticket no" name="hallticketno1" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Institution Name</b></label></td>
							<td><input type="text" class="name" placeholder="Enter Institution Name" name="institutionname1" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Board of studying (in short form)</b></label></td>
							<td><input type="text" class="name" placeholder="Enter Board (in short form)" name="board1" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Medium</b></label></td>
							<td><input type="text" class="name" placeholder="Enter Medium" name="medium1" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Total Marks</b></label></td>
							<td><input type="text" class="name" placeholder="Enter total marks" name="totalmarks1" pattern="[0-9]{1,3}" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Obtained Marks</b></label></td>
							<td><input type="text" class="name" placeholder="Enter marks obtained" name="marksobtained1" pattern="[0-9]{1,3}" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>% of Marks</b></label></td>
							<td><input type="text" class="name" placeholder="Enter %marks" name="marks1" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Marks Certificate No</b></label></td>
							<td><input type="text" class="name" placeholder="Enter certificate no" name="certificateno1" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>TC No</b></label></td>
							<td><input type="text" class="name" placeholder="Enter certificate no" name="certificate1" required></td>
						</tr>
					</table>
				</div>
				<div class="part">
					<table >
						<h2 align="center">Inter details</h2>
						<tr>
							<td><label class="sms"><b>Year of passing</b></label></td>
							<td><input type="year" class="name" placeholder="Enter passed year" name="passedyear2" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Hall Ticket No</b></label></td>
							<td><input type="text" class="name" placeholder="Enter hall ticket no" name="hallticketno2" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Institution Name</b></label></td>
							<td><input type="text" class="name" placeholder="Enter Institution Name" name="institutionname2" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Board of studying (in short form)</b></label></td>
							<td><input type="text" class="name" placeholder="Enter Board (in short form)" name="board2" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Medium</b></label></td>
							<td><input type="text" class="name" placeholder="Enter Medium" name="medium2" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Total Marks</b></label></td>
							<td><input type="text" class="name" placeholder="Enter total marks" name="totalmarks2" pattern="[0-9]{1,3}" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Obtained Marks</b></label></td>
							<td><input type="text" class="name" placeholder="Enter marks obtained" name="marksobtained2" pattern="[0-9]{1,3}" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>% of Marks</b></label></td>
							<td><input type="text" class="name" placeholder="Enter %marks" name="marks2" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Marks Certificate No</b></label></td>
							<td><input type="text" class="name" placeholder="Enter certificate no" name="certificateno2" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>TC No</b></label></td>
							<td><input type="text" class="name" placeholder="Enter certificate no" name="certificate2" required></td>
						</tr>
					</table>
				</div>
				<div class="part">
					<table >
						<h2 align="center">Polycet Details</h2>
						<tr>
							<td><label class="sms"><b>Hall Ticket No</b></label></td>
							<td><input type="text" class="name" placeholder="Enter hall ticket no" name="hallticketno3" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Marks per 120</b></label></td>
							<td><input type="text" class="name" placeholder="Enter Marks" name="marks3" pattern="[0-9]{1,3}" required></td>
						</tr>
						<tr>
							<td><label class="sms"><b>Rank</b></label></td>
							<td><input type="number" class="name" placeholder="Enter rank" name="rank" required></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="parts">
				<table align="center">
					<h1 align="center">Parent Details</h1>
					<tr>
						<td><label class="sms"><b>Father Name</b></label></td>
						<td><input type="text" class="name" placeholder="Enter Father Name" name="fathername" pattern="[A-Za-z\s]{10,50}" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Age</b></label></td>
						<td><input type="number" class="name" placeholder="Enter Age" name="age2" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Qualification</b></label></td>
						<td><input type="text" class="name" placeholder="Enter qualification" name="qualification1" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Occupation</b></label></td>
						<td><input type="text" class="name" placeholder="Enter occupation" name="occupation1" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Aadhar</b></label></td>
						<td><input type="text" class="name" placeholder="XXXX XXXX XXXX" name="aadharno2" pattern="[0-9\s]{12}" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Phone</b></label></td>
						<td><input type="tel" class="name" placeholder="XXXXX XXXXX" name="phone2" pattern="[0-9\s]{10,11}" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Mother Name</b></label></td>
						<td><input type="text" class="name" placeholder="Enter Mother Name" name="mothername" pattern="[A-Za-z\s]{1,50}" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Age</b></label></td>
						<td><input type="number" class="name" placeholder="Enter Age" name="age3" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Qualification</b></label></td>
						<td><input type="text" class="name" placeholder="Enter qualification" name="qualification2" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Occupation</b></label></td>
						<td><input type="text" class="name" placeholder="Enter occupation" name="occupation2" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Aadhar</b></label></td>
						<td><input type="text" class="name" placeholder="Enter aadhar no" name="aadharno3" pattern="[0-9\s]{12}" required></td>
					</tr>
					<tr>
						<td><label class="sms"><b>Phone</b></label></td>
						<td><input type="tel" class="name" placeholder="XXXXXXXXXX" name="phone3" pattern="[0-9]{10,11}" required></td>
					</tr>
				</table>
			</div>
			<table>
				<tr>
					<td colspan="2" align="center">
						<div class="buttons" style="margin-left:280%">
							<a href = "Admin Login.html?name=<?php echo $name; ?>"><button type="button" class="button" style="width:100%"><b>Go Back</b></button></a>
							<button type="submit" class="button">Submit</button>
						</div>	
					</td>
				</tr>
			</table>
		</form>	
	</body>
</html>