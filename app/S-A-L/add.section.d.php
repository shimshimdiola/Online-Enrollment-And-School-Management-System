     <!--  Modal content for the above example -->
     <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-md">
             <div class="modal-content">

                 <div class="modal-body">

                     <h4 class="mt-0 header-title">Add Section</h4>
                     <p class="text-muted mb-4 font-13" id="add-user-info">
                         Please fill out the required details below to add a new section.
                     </p>



                     <form id="sectionForm" class="" action="" novalidate="">
                         <div class="form-group">
                             <label>Grade level</label>
                             <input readonly id="grade" type="text" class="form-control" required="" placeholder="--------------">
                         </div>
                         <div class="form-group">
                             <label>Section Name</label>
                             <input id="sectionName" type="text" class="form-control" required="" placeholder="--------------">
                         </div>

                         <div class="form-group">
                             <label>Advicer</label>

                             <select id="advicer" class="form-control" required>
                                 <option></option>

                                 <?php
                                    // Assume $conn is your database connection

                                    $sql = "SELECT * FROM tbl_user WHERE utype = 'faculty' AND grade = 7";

                                    // Prepare the statement
                                    $stmt = mysqli_prepare($conn, $sql);

                                    // Check for errors in preparing the statement
                                    if (!$stmt) {
                                        throw new Exception('Query preparation failed: ' . mysqli_error($conn));
                                    }

                                    // Execute the statement
                                    mysqli_stmt_execute($stmt);

                                    // Get the result
                                    $result = mysqli_stmt_get_result($stmt);

                                    // Check for errors in getting the result
                                    if (!$result) {
                                        throw new Exception('Query failed: ' . mysqli_error($conn));
                                    }

                                    // Fetch the data
                                    while ($data = mysqli_fetch_assoc($result)) {
                                        echo '<option value="' . htmlspecialchars($data['fullname'] . '/' . $data['userid']) . '">' . htmlspecialchars($data['fullname']) . '</option>';
                                    }
                                    ?>

                             </select>
                         </div>
                         <div class="form-group mb-0">
                             <div>
                                 <button id="submitButton" type="submit" class="btn btn-primary waves-effect waves-light">
                                     Add
                                 </button>
                                 <button type="reset" class="btn btn-secondary waves-effect m-l-5" data-dismiss="modal">
                                     Cancel
                                 </button>
                             </div>
                         </div>
                     </form>

                 </div>
             </div>
             <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
     </div>
     <!-- /.modal -->