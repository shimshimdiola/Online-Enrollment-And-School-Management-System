<?php
if (isset($data) && $data['trg_admit'] == 1) {
    $show_up = 'block';
} else {
    $show_up = 'none';
}

?>
<div class="col-xl-4" style="display: <?php echo $show_up ?>;">
    <div class="card">
        <div class="card-body">
            <h4 class="mt-0 header-title">Psa</h4>
            <p class="text-muted mb-4 font-13">Psa: Please fill in the required fields below.</p>
            <input <?php echo ($data['trg_lock'] == 1) ? 'disabled' : ''; ?> type="file" name="uploaded_file" id="input-file-now" class="dropify" accept=".pdf,.docx" onchange="F_psa(this)" />
            <br> <?php
                    if (isset($data['psa']) && !empty($data['psa'])) {
                        $show_psa = 'block';
                        $show_psa_check = 'block';
                        $show_psa_load = '100%';
                        $show_load = 'Completed';
                    } else {
                        $show_psa = 'none';
                        $show_load = 'Uploading';
                    }


                    ?>
            <div id="psa_f" class="alert bx-shadow " style="display: <?php echo $show_psa  ?>;">
                <button type="button " class="close mr-2 text-danger" style="top: 0; right:0%; position:absolute;" data-toggle="tooltip" data-original-title="Delete the uploaded file" onclick="E_form_d('psa',<?php echo $userid ?>)"><span aria-hidden="true">×</span></button>
                <div class="media "><i class="mdi mdi-file-pdf-box fa-2x text-danger  mr-3 d-flex "></i>
                    <div class="media-body">
                        <span id="psa_t" class="mt-0 font-14"><?php echo $show_load ?></span>

                        <div class="d-flex align-items-center justify-content-between">
                            <span class="d-flex align-items-center">
                                <i id="psa_i" class="mdi mdi-check-circle text-success mr-2" style="display: <?php echo $show_psa_check ?>;"></i>
                                <p id="psa_name" class="text-muted mb-0 text-break"><?php echo $data['psa'] ?></p>
                            </span>
                            <p id="psa_c" class="text-muted mb-0"><?php echo $show_psa_load ?></p>
                        </div>
                        <div class="progress mt-2" style="height: 5px;">
                            <div id="psa_progress" class="progress-bar bg-gradient2" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $show_psa_load ?>;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function F_psa(input) {
        const file = input.files[0];
        const fileName = file.name; // Get the file name
        const fileSizeKB = file.size / 1024; // Convert bytes to kilobytes

        const progressBar = document.getElementById("psa_progress");
        document.getElementById("psa_f").style.display = "block";
        document.getElementById("psa_name").innerHTML = fileName;

        const formData = new FormData();
        formData.append("file", file);

        for (let index = 0; index < fileSizeKB; index++) {
            setTimeout(() => {
                const progressWidth = ((index + 1) / fileSizeKB) * 100;
                progressBar.style.width = `${progressWidth}%`;
                document.getElementById("psa_c").innerHTML =
                    progressWidth.toFixed() + "%";
                progressBar.setAttribute("aria-valuenow", progressWidth);

                if (progressWidth >= 100) {
                    $.ajax({
                        url: "psa.u.php",
                        type: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            console.log(response);
                            document.getElementById("psa_t").innerHTML = "Upload complete";
                            document.getElementById("psa_i").style.display = "block";
                            document.getElementById("input-file-now").disabled = true;
                            Swal.fire({
                                title: "File Uploaded",
                                text: "The file has been successfully uploaded.",
                                icon: "success",
                                timer: 1500, // Set the timer to automatically close after 3 seconds (3000 milliseconds)
                                showConfirmButton: false, // Hide the confirm button
                                showCancelButton: false, // Hide the cancel button
                            });
                        },
                        error: function(xhr, status, error) {
                            alert("Error uploading file: " + error);
                        },
                    });
                }
            }, 15 * index);
        }
    }
</script>