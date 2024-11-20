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
    $semester = (int)$_POST['semester']; // Convert to integer

    // Define semester mapping
    $semester_mapping = [1 => "I", 3 => "III", 4 => "IV", 5 => "V", 6 => "VI"];

    // Validate student ID format
    if (preg_match("/^\d{2}\d{3}-(CM|EC|ME|EE)-\d{3}$/", $student_id)) {
        // Validate semester
        $valid_semesters = array_keys($semester_mapping);
        if (in_array($semester, $valid_semesters)) {
            // Query to sum up working, present, and absent days for the semester
            $sql = "SELECT 
                        SUM(working_days) AS total_working_days, 
                        SUM(present_days) AS total_present_days, 
                        SUM(absent_days) AS total_absent_days 
                    FROM attendance 
                    WHERE student_id = ? AND semester = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", $student_id, $semester);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($row = $result->fetch_assoc()) {
                $total_working_days = $row['total_working_days'];
                $total_present_days = $row['total_present_days'];
                $total_absent_days = $row['total_absent_days'];
                
                // Calculate attendance percentage
                $attendance_percentage = $total_working_days > 0 ? ($total_present_days / $total_working_days) * 100 : 0;

                // Display results in a table format
                echo "<h3 style='text-align:center;'>Attendance Summary</h3>";
                echo "<div style='display: flex; justify-content: center;'>
                        <table class='attendance-table'>
                            <tr>
                                <th>Student ID</th>
                                <th>Semester</th>
                                <th>Total Working Days</th>
                                <th>Total Present Days</th>
                                <th>Total Absent Days</th>
                                <th>Attendance Percentage</th>
                            </tr>
                            <tr>
                                <td>" . htmlspecialchars($student_id) . "</td>
                                <td>" . $semester_mapping[$semester] . "</td>
                                <td>" . $total_working_days . "</td>
                                <td>" . $total_present_days . "</td>
                                <td>" . $total_absent_days . "</td>
                                <td>" . number_format($attendance_percentage, 2) . "%</td>
                            </tr>
                        </table>
                      </div>";
            } else {
                echo "<p style='text-align:center;'>No attendance records found for the specified student ID and semester.</p>";
            }
        } else {
            echo "<p style='text-align:center;'>Invalid semester value. Only 1, 3, 4, 5, 6 are allowed.</p>";
        }
    } else {
        echo "<p style='text-align:center;'>Invalid Student ID format. Please enter it in the format: yyccc-branchcode-ddd (e.g., 22352-CM-045)</p>";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

<style>
    /* Center table and style it */
    .attendance-table {
        border-collapse: collapse;
        width: 80%;
        margin: auto;
        text-align: center;
    }

    .attendance-table th, .attendance-table td {
        border: 1px solid #ddd;
        padding: 12px;
    }

    .attendance-table th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .attendance-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .attendance-table tr:hover {
        background-color: #ddd;
    }

    .attendance-table td {
        font-size: 16px;
    }

    /* Back button styling */
    .back-button {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .back-button a {
        text-decoration: none;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border-radius: 5px;
    }

    .back-button a:hover {
        background-color: #45a049;
    }
</style>

<div class="back-button">
    <a href="javascript:history.back()">Back</a>
</div>
