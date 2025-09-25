<div class="col-xl-4">
    <div class="card">
        <div class="card-body">
            <h4 class="mt-0 header-title">Enrollment form</h4>
            <p class="text-muted mb-4 font-13">Enrollment form: Please fill in the required fields below.</p>
            <input type="file" <?php echo (isset($data['trg_lock']) && $data['trg_lock'] == 1) ? 'disabled' : ''; ?> name="uploaded_file" id="input-file-now" class="dropify" accept=".pdf,.docx" onchange="E_form(this)" />
            <br>
            <?php
            if (isset($data['eform'])) {
                if (empty($data['eform'])) {
                    // Case when $data['eform'] is set but empty
                    $show_eform = 'none';
                    $show_eform_check = 'none';
                    $show_eform_load = '100%';
                    $show_load = '';
                } else {
                    // Case when $data['eform'] is set and not empty
                    $show_eform = 'block';
                    $show_eform_check = 'block';
                    $show_eform_load = '100%';
                    $show_load = 'Completed';
                }
            } else {
                // Case when $data['eform'] is not set
                $show_eform = 'none';
                $show_eform_check = 'none';
                $show_eform_load = '100%';
                $show_load = '';
            }



            ?>

            <div id="e_f" class="alert bx-shadow " style="display: <?php echo $show_eform  ?>;">
                <!-- <button type="button " class="close mr-2 text-danger" style="top: 0; right:0%; position:absolute;" data-toggle="tooltip" data-original-title="Delete the uploaded file" onclick="E_form_d('eform',<?php echo $userid ?>)"><span aria-hidden="true">×</span></button> -->
                <div class="media "><i class="mdi mdi-file-pdf-box fa-2x text-danger  mr-3 d-flex "></i>
                    <div class="media-body">
                        <span id="E_t" class="mt-0 font-14"><?php echo $show_load  ?></span>

                        <div class="d-flex align-items-center justify-content-between">
                            <span class="d-flex align-items-center">
                                <i id="E_i" class="mdi mdi-check-circle text-success mr-2" style="display: <?php echo $show_eform_check ?>;"></i>
                                <p id="E_name" class="text-muted mb-0 text-break"><?php echo $data['eform'] ?></p>
                            </span>
                            <p id="E_c" class="text-muted mb-0"><?php echo $show_eform_load ?></p>
                        </div>
                        <div class="progress mt-2" style="height: 5px;">
                            <div id="E_progress" class="progress-bar bg-gradient2" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $show_eform_load ?>;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>