<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marks_databases";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data from form
    $student_id = $_POST['student_id'];
    $branch = $_POST['branch'];
    $semester = (int)$_POST['semester']; // Convert to integer
    $month = (int)$_POST['month']; // Convert to integer
    $year = (int)$_POST['year']; // Convert to integer
    $working_days = (int)$_POST['working_days'];
    $present_days = (int)$_POST['present_days'];
    $absent_days = (int)$_POST['absent_days'];
    $notes = $_POST['notes'];

    // Validate student ID format (yyccc-branchcode-ddd)
    if (preg_match("/^\d{2}\d{3}-(CM|EC|ME|EE)-\d{3}$/", $student_id)) {
        // Validate semester (must be one of 1, 3, 4, 5, 6)
        $valid_semesters = [1, 3, 4, 5, 6];
        if (in_array($semester, $valid_semesters)) {
            // Proceed with SQL queries if student ID and semester are valid
            
            // Check if a record exists for this student in the same month, year, and branch
            $sql = "SELECT * FROM attendance WHERE student_id = ? AND branch = ? AND semester = ? AND month = ? AND year = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssiii", $student_id, $branch, $semester, $month, $year);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Record exists, so update it
                $update_sql = "UPDATE attendance 
                               SET working_days = ?, present_days = ?, absent_days = ?, notes = ? 
                               WHERE student_id = ? AND branch = ? AND semester = ? AND month = ? AND year = ?";
                $update_stmt = $conn->prepare($update_sql);
                $update_stmt->bind_param("iiisssiii", $working_days, $present_days, $absent_days, $notes, $student_id, $branch, $semester, $month, $year);
                
                if ($update_stmt->execute()) {
                    echo "<p>Record updated successfully.</p>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            } else {
                // No existing record, so insert a new one
                $insert_sql = "INSERT INTO attendance (student_id, branch, semester, month, year, working_days, present_days, absent_days, notes) 
                               VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $insert_stmt = $conn->prepare($insert_sql);
                $insert_stmt->bind_param("ssiiiiiis", $student_id, $branch, $semester, $month, $year, $working_days, $present_days, $absent_days, $notes);

                if ($insert_stmt->execute()) {
                    echo "<p>New record created successfully.</p>";
                } else {
                    echo "Error inserting new record: " . $conn->error;
                }
            }

            // Display back button after success
            echo '<div style="text-align: center; margin-top: 20px;">';
            echo '<a href="javascript:history.back()" style="padding: 10px 15px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">Back</a>';
            echo '</div>';
        } else {
            echo "Invalid semester value. Only 1, 3, 4, 5, 6 are allowed.";
        }
    } else {
        // If student_id is invalid, display an error message
        echo "Invalid Student ID format. Please enter it in the format: yyccc-(branchcode)-ddd (e.g., 22352-CM-045)";
    }

    // Close statements and connection
    $stmt->close();
    $conn->close();
}
?>
