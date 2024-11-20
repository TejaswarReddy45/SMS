<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "student_management_system";
$conn = mysqli_connect($host, $username, $password, $dbname);
$name=$_POST['name'];
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

/* Fetching data from POST */
$pinno = $_POST['pinno'];
$studentname = $_POST['studentname'];
$branch = $_POST['branch'];
$course = $_POST['course'];
$Date_of_Birth = $_POST['dob'];
$Admission_No = $_POST['admissionno'];
$Admission_Type = $_POST['admissiontype'];
$Gender = $_POST['gender'];
$Caste = $_POST['caste'];
$Sub_Caste = $_POST['subcaste'];
$Religion = $_POST['religion'];
$Aadhar_No = $_POST['aadharno1'];
$Ration_Card_No = $_POST['rationcardno'];
$E_Mail = $_POST['emailaddress'];
$Phone = $_POST['phone1'];
$Blood_Group = $_POST['bloodgroup'];
$Mole1 = $_POST['mole1'];
$Mole2 = $_POST['mole2'];
$Permanent_Address = $_POST['permanentaddress'];
$Present_Address = $_POST['presentaddress'];
$Year10 = $_POST['passedyear1'];
$Hall_Ticket10 = $_POST['hallticketno1'];
$Institution10 = $_POST['institutionname1'];
$Board10 = $_POST['board1'];
$Medium10 = $_POST['medium1'];
$Total_Marks10 = $_POST['totalmarks1'];
$Obtained_Marks10 = $_POST['marksobtained1'];
$of_Marks10 = $_POST['marks1'];
$Marks_Certificate_No10 = $_POST['certificateno1'];
$TC_No10 = $_POST['certificate1'];
$InYear = $_POST['passedyear2'];
$InHall_Ticket = $_POST['hallticketno2'];
$InInstitution = $_POST['institutionname2'];
$InBoard = $_POST['board2'];
$InMedium = $_POST['medium2'];
$InTotal_Marks = $_POST['totalmarks2'];
$InObtained_Marks = $_POST['marksobtained2'];
$Inof_Marks = $_POST['marks2'];
$InMarks_Certificate_No = $_POST['certificateno2'];
$InTC_No = $_POST['certificate2'];
$polyHall_Ticket_No = $_POST['hallticketno3'];
$PolyMarks = $_POST['marks3'];
$PolyRank = $_POST['rank'];
$Father_Name = $_POST['fathername'];
$Fage = $_POST['age2'];
$Fqualification = $_POST['qualification1'];
$Foccupation = $_POST['occupation1'];
$Faadhar = $_POST['aadharno2'];
$Fphone = $_POST['phone2'];
$Mother_Name = $_POST['mothername'];
$Mage = $_POST['age3'];
$Mqualification = $_POST['qualification2'];
$Moccupation = $_POST['occupation2'];
$Maadhar = $_POST['aadharno3'];
$Mphone = $_POST['phone3'];

// SQL query to update the student details
$sql = "UPDATE student_Details 
        SET studentname=?, branch=?, course=?, DOB=?, Admission_No=?, Admission_Type=?, Gender=?, Caste=?, Sub_Caste=?, Religion=?, Student_Aadhar=?, Ration_Card=?, EMail=?, Phone=?, Blood_Group=?, Mole1=?, Mole2=?, Permanent_Address=?, Present_Address=?, Year10=?, Hall_Ticket10=?, Institution10=?, Board10=?, Medium10=?, Total_Marks10=?, Obtained_Marks10=?, Percentage_of_Marks10=?, Marks_Certificate_No10=?, TC_No10=?, InYear=?, InHall_Ticket=?, InInstitution=?, InBoard=?, InMedium=?, InTotal_Marks=?, InObtained_Marks=?, In_Percentage_of_Marks=?, InMarks_Certificate_No=?, InTC_No=?, polyHall_Ticket=?, PolyMarks=?, PolyRank=?, Father_Name=?, Fage=?, FQualification=?, Foccupation=?, Faadhar=?, Fphone=?, Mother_Name=?, Mage=?, MQualification=?, Moccupation=?, Maadhar=?, Mphone=? 
        WHERE pinno=?";

// Prepare and bind the update query
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Failed to prepare query: " . htmlspecialchars($conn->error));
}

$stmt->bind_param(
    "ssssssssssdssdssssssssssiidsssssssiidssiiisissddsissdds", 
    $studentname, $branch, $course, $Date_of_Birth, $Admission_No, 
    $Admission_Type, $Gender, $Caste, $Sub_Caste, $Religion, $Aadhar_No, 
    $Ration_Card_No, $E_Mail, $Phone, $Blood_Group, $Mole1, $Mole2, 
    $Permanent_Address, $Present_Address, $Year10, $Hall_Ticket10, 
    $Institution10, $Board10, $Medium10, $Total_Marks10, $Obtained_Marks10, 
    $of_Marks10, $Marks_Certificate_No10, $TC_No10, $InYear, $InHall_Ticket, 
    $InInstitution, $InBoard, $InMedium, $InTotal_Marks, $InObtained_Marks, 
    $Inof_Marks, $InMarks_Certificate_No, $InTC_No, $polyHall_Ticket_No, 
    $PolyMarks, $PolyRank, $Father_Name, $Fage, $Fqualification, 
    $Foccupation, $Faadhar, $Fphone, $Mother_Name, $Mage, $Mqualification, 
    $Moccupation, $Maadhar, $Mphone, $pinno
);

// Execute the update query
if ($stmt->execute()) {
    echo '<script>alert("Student details updated successfully!"); var name = "' . htmlspecialchars($name, ENT_QUOTES) . '"; // Properly escape the name
                window.location.href = "Update Student Details Form.php?name=" + encodeURIComponent(name); // Use encodeURIComponent</script>';
} else {
    echo '<script>alert("Failed to update student details."); var name = "' . htmlspecialchars($name, ENT_QUOTES) . '"; // Properly escape the name
    window.location.href = "Update Student Details Form.php?name=" + encodeURIComponent(name); // Use encodeURIComponent</script>';
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
