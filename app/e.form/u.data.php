<?php
// Assuming you already have a database connection established in $conn

// SQL query to retrieve data
$sql = "SELECT * FROM tbl_std_data WHERE userid = $userid"; // Replace 'tbl_user_data' with your actual table name

// Perform the query
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Check if there are rows returned
    if ($result->num_rows > 0) {
        // Fetch data from the result set
        $row = $result->fetch_assoc();

?>

        <!-- novalidate="" -->

        <form id="E_form" action="#">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="lrn">Learner Reference Number <small>( Optinal )</small></label>
                    <input type="text" class="form-control text-capitalize" id="lrn" value="<?php echo $row['lrn'] ?>" placeholder="Learner Reference Number">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="etype">Student Type</label>
                    <select id="std_typ" for="" onchange="Sdt_typ(this)" required class="form-control text-capitalize" disabled>
                        <option><?php echo $row['etype'] ?></option>
                        <option>New enrollee</option>
                        <option>Contenuing</option>
                        <!-- <option>transferee</option> -->
                        <option>returnee</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="input1">Grade level</label>
                    <select required id="glevel" class="form-control text-capitalize" disabled>
                        <option><?php echo $row['genroll'] ?></option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                </div>
                <!-- personal details -->
                <div class="col-md-4 mb-3">
                    <label for="fname">Firstname</label>
                    <input type="text" class="form-control text-capitalize text-capitalize" id="fname" required="" value="<?php echo $row['fname'] ?>" placeholder="Firstname">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="lname">Last name</label>
                    <input type="text" class="form-control text-capitalize text-capitalize" id="lname" required="" value="<?php echo $row['lname'] ?>" placeholder="Last name">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="mname">Middle name</label>
                    <input type="text" class="form-control text-capitalize text-capitalize" id="mname" required="" value="<?php echo $row['mname'] ?>" placeholder="Middle name">
                </div>

                <!-- ///// - -->
                <div class="col-md-4 mb-3">
                    <label for="input1">Date of birth</label>
                    <input type="date" class="form-control text-capitalize" id="bdate" required="" value="<?php echo $row['bdate'] ?>" placeholder="mm/dd/yyyy" id="datepicker">

                </div>
                <div class="col-md-4 mb-3">
                    <label for="input1">Birth place</label>
                    <input type="text" class="form-control text-capitalize" id="bplace" required="" value="<?php echo $row['bplace'] ?>" placeholder="Birth place">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="input1">Sex <small>(Male/Female)</small></label>
                    <input type="text" class="form-control text-capitalize" id="sex" value="<?php echo $row['sex'] ?>" required="" placeholder="Sex">
                </div>
                <!-- ///// -->
                <div class="col-md-4 mb-3">
                    <label for="input1">Civil Status *</label>
                    <select required id="cstatus" class="form-control text-capitalize">
                        <option><?php echo $row['cstatus'] ?></option>
                        <option>Single</option>
                        <option>Married</option>
                        <option>Annulled</option>
                        <option>Widowed</option>
                        <option>Separated</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="input1">Indigenous People Affiliation <small>( optional )</small> </label>
                    <input type="text" class="form-control text-capitalize" id="ipa" value="<?php echo $row['ipa'] ?>" placeholder="Indigenous People Affiliation">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="input1">Type of disability <small>( optional )</small> </label>
                    <input type="text" class="form-control text-capitalize" id="tod" value="<?php echo $row['tod'] ?>" placeholder="disability">
                </div>
                <!-- ///// -->
                <div class="col-md-4 mb-3">
                    <label for="input1">4Ps Number <small>( optional )</small> </label>
                    <input type="text" class="form-control text-capitalize" id="psno" value="<?php echo $row['psno'] ?>" placeholder="4Ps Number">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="input1">Citizenship*</label>
                    <input type="text" class="form-control text-capitalize" id="citizenship" value="<?php echo $row['citizenship'] ?>" required="" placeholder="Citizenship*">
                </div>
                <!-- //// -->

            </div>
            <hr>
            <h4 class="mt-0 header-title">Permanent Address and Contact Info.</h4>
            <!-- <p class="text-muted mb-4 font-13"></p> -->

            <div class="row">

                <div class="col-md-4 mb-3">
                    <label for="input1">Barangay</label>
                    <input type="text" class="form-control text-capitalize" id="brgy" value="<?php echo $row['brgy'] ?>" required="" placeholder="Barangay">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="input1">City/Municipality/Province/Country</label>
                    <input type="text" class="form-control text-capitalize" id="cmpc" value="<?php echo $row['cmpc'] ?>" required="" placeholder="Municipality">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="input1">Zip Code</label>
                    <input type="number" class="form-control text-capitalize" id="zcode" value="<?php echo $row['zcode'] ?>" required="" placeholder="-----">
                </div>



                <!-- ///// -->
                <div class="col-md-4 mb-3">
                    <label for="input1">Email *</label>
                    <input type="email" class="form-control text-lowercase" id="email" value="<?php echo $row['email'] ?>" required="" placeholder="Email">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="input1">Mobile Number*</label>
                    <input type="text" placeholder="" id="mnumber" required="" maxlength="11" value="<?php echo $row['mnumber'] ?>" class="form-control text-lowercase">
                </div>
            </div>
            <hr>
            <h4 class="mt-0 header-title">Father's Name Information</h4>
            <p class="text-muted mb-4 font-13"></p>
            <div class="row">

                <div class="col-md-4 mb-3">
                    <label for="input1">Last Name</label>
                    <input type="text" class="form-control text-capitalize" id="f_ln" required="" value="<?php echo $row['f_ln'] ?>" placeholder="Last Name">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="input1">First Name</label>
                    <input type="text" class="form-control text-capitalize" id="f_fn" required="" value="<?php echo $row['f_fn'] ?>" placeholder="First Name">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="input1">Middle Name</label>
                    <input type="text" class="form-control text-capitalize" id="f_mn" required="" value="<?php echo $row['f_mn'] ?>" placeholder="Middle Name">
                </div>
            </div>
            <hr>
            <h4 class="mt-0 header-title">Mother's Maiden Name Information</h4>
            <p class="text-muted mb-4 font-13"></p>
            <div class="row">

                <div class="col-md-4 mb-3">
                    <label for="input1">Last Name</label>
                    <input type="text" class="form-control text-capitalize" id="m_ln" required="" value="<?php echo $row['m_ln'] ?>" placeholder="Last Name">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="input1">First Name</label>
                    <input type="text" class="form-control text-capitalize" id="m_fn" required="" value="<?php echo $row['m_fn'] ?>" placeholder="First Name">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="input1">Middle Name</label>
                    <input type="text" class="form-control text-capitalize" id="m_mn" required="" value="<?php echo $row['m_mn'] ?>" placeholder="Middle Name">
                </div>
            </div>
            <hr>
            <h4 class="mt-0 header-title">For Returning Learners (Balik-Aral) and Those Who Shall Transfer/Move In</h4>
            <p class="text-muted mb-4 font-13">
                <?php
                if (isset($row['balik_aral'])) {
                    $s_ = 'block';
                    $s_c = 'checked';
                } else {
                    $s_ = 'none';
                }

                ?>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" <?php echo $s_c ?> id="customCheck2" onclick="F_b(this)"> <label class="custom-control-label" for="customCheck2">For Returning Learners (Balik-Aral).</label>
            </div>

            </p>

            <!-- For Returning Learners (Balik-Aral) -->
            <div id="show_b" style="display:<?php echo $s_ ?>;">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <?php



                        ?>
                        <label for="">Last Grade Level Completed</label>
                        <select id="std_req1" class="form-control text-capitalize">
                            <option></option>
                            <option <?php echo ($row['std_req1'] == '7') ? 'selected' : ''; ?>>7</option>
                            <option <?php echo ($row['std_req1'] == '8') ? 'selected' : ''; ?>>8</option>
                            <option <?php echo ($row['std_req1'] == '9') ? 'selected' : ''; ?>>9</option>
                            <option <?php echo ($row['std_req1'] == '10') ? 'selected' : ''; ?>>10</option>
                            <option <?php echo ($row['std_req1'] == '11') ? 'selected' : ''; ?>>11</option>
                            <option <?php echo ($row['std_req1'] == '12') ? 'selected' : ''; ?>>12</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Last School Year Completed</label>
                        <input type="number" class="form-control text-capitalize" id="std_req2" value="<?php echo $row['std_req2'] ?>" maxlength="4" placeholder="----">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">School Name</label>
                        <input type="text" class="form-control text-capitalize" id="std_req3" value="<?php echo $row['std_req3'] ?>" placeholder="School Name">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">School ID</label>
                        <input type="text" class="form-control text-capitalize" id="std_req4" value="<?php echo $row['std_req4'] ?>" placeholder="----/----/----">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">School Address</label>
                        <input type="text" class="form-control text-capitalize" id="std_req5" value="<?php echo $row['std_req5'] ?>" placeholder="School Address">
                    </div>

                </div>

            </div>



            <hr>
            <h4 class="mt-0 header-title">For Learners in Senior High School</h4>
            <p class="text-muted mb-4 font-13">

            <div class="custom-control text-capitalize custom-checkbox"><input type="checkbox" class="custom-control-input text-capitalize" id="customCheck1" onclick="F_s(this)"> <label class="custom-control-label" for="customCheck1"> Senior High School</label></div>

            </p>
            <div id="show_s" style="display:none;">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="">Semester</label>
                        <select id="sem" class="form-control text-capitalize">
                            <option></option>
                            <option>1st sem</option>
                            <option>2nd sem</option>

                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Track</label>
                        <input type="text" class="form-control text-capitalize" id="track" maxlength="4" placeholder="Track">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Strand (if any)</label>
                        <input type="text" class="form-control text-capitalize" id="strand" placeholder="Strand (if any)">
                    </div>


                </div>

            </div>
            <div class="form-group mb-0 mt-2">
                <div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                        Update
                    </button>

                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                        Cancel
                    </button>
                </div>
            </div>
        </form>
<?php
    } else {
        echo "No rows returned.";
    }

    // Free the result set
    $result->free();
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();
