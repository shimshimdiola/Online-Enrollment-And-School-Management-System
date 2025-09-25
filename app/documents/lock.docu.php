             <div class="col-lg-12">
                 <?php
                    if (isset($data['trg_admit']) && $data['trg_admit'] == 1) {
                         $btn_s = 'block';
                        $btn_c = 'success';
                        $btn_t = 'Locked';
                        $btn_icon = 'fas fa-lock';
                    } else {
                    
                        $btn_c = 'primary';
                        $btn_t = 'Unlucked';
                        $btn_icon = 'fas fa-lock-open';
                    }


                    ?>
            
                 <button class="btn btn-<?php echo $btn_c ?> mb-2 float-right" onclick="Lock_d(this)" style="display: <?php echo $btn_s ?>;"><?php echo $btn_t ?> <i class=" <?php echo $btn_icon ?>"></i></button>

             </div>
             <script>
                 function Lock_d() {
                     console.log('clicked');
                     var formData = new FormData();
                     formData.append('lock', 1); // Set lock field to 1
                     // Add other form data to formData if needed

                     $.ajax({
                         url: "lock.docu.u.php",
                         type: "POST",
                         data: formData,
                         processData: false,
                         contentType: false,
                         success: function(response) {
                             console.log(response);

                             Swal.fire({
                                 title: "File Has Been Locked",
                                 text: "The file has been successfully locked in.",
                                 icon: "success",
                                 timer: 1000,
                                 showConfirmButton: false,
                                 showCancelButton: false,
                             }).then(() => {
                                 // Reload the page
                                 location.reload(true);
                             });


                         },

                         error: function(xhr, status, error) {
                             alert("Error uploading file: " + error);
                         },
                     });
                 }
             </script>