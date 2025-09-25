   <?php



    // echo $userid;
    $sql = "SELECT DISTINCT tbl_sec_data.*, tbl_load_data.*, tbl_std_enroll.*
        FROM tbl_std_enroll
        JOIN tbl_load_data ON tbl_std_enroll.secuid = tbl_load_data.secuid
        JOIN tbl_sec_data ON tbl_std_enroll.secuid = tbl_sec_data.secuid
        WHERE tbl_std_enroll.userid = $userid";

    // Define the SQL query
    // Execute the SQL query
    $result = $conn->query($sql);

    // Check if the query was successful
    if (!$result) {
        // Query failed, handle the error
        echo "Error: " . $conn->error;
    } else {
        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Output data of each row
            $data = $result->fetch_assoc();
                // var_dump($data); // Debugging output
              echo  $section_advicer = '<h5 class="text-capitalize text-center">' . $data['secadvicer'].'</h5>';
            echo ' <p class=" text-center">ADVICER</p>';
            echo '<hr>';
            echo '<br>';
            echo   $section_name = 'Section: ' . $data['secname'];
            echo '<br>';
            echo   $section_name = 'Grade: ' . $data['secgrade'];

        } else {
            echo "";
        }
    }


    // Close the connection

    ?>


