<?php
// SELECT students.student_id, students.student_name, grades.grade
// FROM students
// JOIN grades ON students.student_id = grades.student_id
// WHERE grades.grade = 7;

// Check if the 'grade' parameter is set in the GET request
if (isset($_GET['section'])) {
    // Get the grade value from the GET request
    session_start();
    require_once '../conf/conf.php';
    $section = $_GET['section'];
    // Construct and execute the SQL query
    $sql = "SELECT tbl_sec_data.*,tbl_load_data.* FROM tbl_sec_data 
    JOIN tbl_load_data ON tbl_sec_data.secuid = tbl_load_data.secuid
    WHERE secname = '$section'";
    $result = $conn->query($sql);

    // Check if any rows were returned
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($data = $result->fetch_assoc()) {

            echo ' <tr>
                                               <td>' . $data['sub'] . '</td>
                                               <td>' . $data['cstart'] . ' - ' . $data['cend'] . '</td>
                                               <td>' . $data['days'] . '</td>
                                               <td>' . $data['fac'] . '</td>

                                           </tr>';
        }
    } else {

        echo '<td colspan="4" ><div class="text-center">Empty</div></td>';
    }
    $conn->close();
} else {
    // If 'grade' parameter is not set, return an error response
    echo "Error: Grade parameter is missing.";
}
