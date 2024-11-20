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

/* Taking data from user */
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

$sql = "SELECT * FROM student_Details WHERE pinno = ?";

// Prepare and bind the query
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $pinno);

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Check if the student is present
if ($result->num_rows > 0) {
    // If the student exists, pass all data to update.php using POST
    echo '<form id="updateForm" action="update.php" method="POST">';
    
    // Loop over the POST data to create hidden input fields
    foreach ($_POST as $key => $value) {
        echo '<input type="hidden" name="' . htmlspecialchars($key) . '" value="' . htmlspecialchars($value) . '">';
    }

    echo '</form>';

    // Ask for confirmation and submit the form if confirmed
    echo '<script>
            if (confirm("Student already exists in the database. Do you want to update?")) {
                document.getElementById("updateForm").submit();
            } else {
                alert("Update cancelled.");
            }
          </script>';
} else {
    // If the student is not found
    echo '<script>alert("No student found with PIN No: ' . htmlspecialchars($pinno, ENT_QUOTES, 'UTF-8') . '");
                   var name = "' . htmlspecialchars($name, ENT_QUOTES) . '"; // Properly escape the name
                window.location.href = "Update Student Details Form.php?name=" + encodeURIComponent(name); // Use encodeURIComponent</script>';

}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
