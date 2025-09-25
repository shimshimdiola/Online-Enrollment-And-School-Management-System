 <script src="<?php echo Base_dir ?>assets/js/jquery.min.js"></script>
 <script src="<?php echo Base_dir ?>assets/js/popper.min.js"></script>
 <script src="<?php echo Base_dir ?>assets/js/bootstrap.min.js"></script>
 <script src="<?php echo Base_dir ?>assets/js/modernizr.min.js"></script>
 <script src="<?php echo Base_dir ?>assets/js/detect.js"></script>
 <script src="<?php echo Base_dir ?>assets/js/fastclick.js"></script>
 <script src="<?php echo Base_dir ?>assets/js/jquery.slimscroll.js"></script>
 <script src="<?php echo Base_dir ?>assets/js/jquery.blockUI.js"></script>
 <script src="<?php echo Base_dir ?>assets/js/waves.js"></script>
 <script src="<?php echo Base_dir ?>assets/js/jquery.scrollTo.min.js"></script>
 <!-- dropify -->
 <script src="<?php echo Base_dir ?>assets/plugins/dropify/js/dropify.min.js"></script>
 <script src="<?php echo Base_dir ?>assets/pages/dropify.init.js"></script>
 <!-- Sweet-Alert  -->
 <script src="<?php echo Base_dir ?>assets/plugins/sweet-alert2/sweetalert2.min.js"></script> <!-- Sweet-Alert  -->
 <script src="<?php echo Base_dir ?>assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
 <!-- Required datatable js -->
 <script src="<?php echo Base_dir ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="<?php echo Base_dir ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
 <!-- Buttons examples -->
 <script src="<?php echo Base_dir ?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
 <script src="<?php echo Base_dir ?>assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
 <script src="<?php echo Base_dir ?>assets/plugins/datatables/jszip.min.js"></script>
 <script src="<?php echo Base_dir ?>assets/plugins/datatables/pdfmake.min.js"></script>
 <script src="<?php echo Base_dir ?>assets/plugins/datatables/vfs_fonts.js"></script>
 <script src="<?php echo Base_dir ?>assets/plugins/datatables/buttons.html5.min.js"></script>
 <script src="<?php echo Base_dir ?>assets/plugins/datatables/buttons.print.min.js"></script>
 <script src="<?php echo Base_dir ?>assets/plugins/datatables/buttons.colVis.min.js"></script>
 <!-- Responsive examples -->
 <script src="<?php echo Base_dir ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
 <script src="<?php echo Base_dir ?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
 <!-- Datatable init js -->
 <script src="<?php echo Base_dir ?>assets/pages/datatables.init.js"></script>
 <!-- Parsley js -->
 <script src="<?php echo Base_dir ?>assets/plugins/parsleyjs/parsley.min.js"></script>
 <script src="<?php echo Base_dir ?>assets/pages/validation.init.js"></script>
 <!-- input mask -->
 <script src="<?php echo Base_dir ?>assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
 <!-- Plugins js -->
 <script src="<?php echo Base_dir ?>assets/js/e.form.u.js"></script>
 <script src="<?php echo Base_dir ?>assets/js/e.form.print.js"></script>
 <script src="<?php echo Base_dir ?>assets/js/e.document.js"></script>
 <script src="<?php echo Base_dir ?>assets/plugins/select2/select2.min.js"></script>
 <script src="<?php echo Base_dir ?>assets/pages/form-advanced.js"></script>
 <!-- time piker -->
 <script src="<?php echo Base_dir ?>assets/plugins/timepicker/moment.js"></script>
 <script src="<?php echo Base_dir ?>assets/plugins/timepicker/tempusdominus-bootstrap-4.js"></script>
 <script src="<?php echo Base_dir ?>assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
 <!-- Chart JS -->
 <script src="<?php echo Base_dir ?>assets/plugins/chart.js/chart.min.js"></script>
 <!-- <script src="<?php echo Base_dir ?>assets/pages/chartjs.init.js"></script> -->
 <!-- plugin inpt -->
 <script src="<?php echo Base_dir ?>assets/pages/form-advanced.js"></script><!-- App js -->
 <script src="<?php echo Base_dir ?>assets/js/app.js"></script>
 <script src="<?php echo Base_dir ?>assets/js/ds.js"></script>

 <script>
   $(".sa-params").click(function() {
     Swal.fire({
       title: "Are you sure?",
       text: "Do you want to log out?",
       icon: "warning",
       showDenyButton: false,
       showCancelButton: true,
       confirmButtonText: "Yes, log out",
       denyButtonText: `No`,
       confirmButtonClass: "btn btn-success",
       cancelButtonClass: "btn btn-danger ml-2",
       confirmButtonClass: "btn btn-success",
       cancelButtonClass: "btn btn-danger ml-2",
     }).then((result) => {
       /* Read more about isConfirmed, isDenied below */
       if (result.isConfirmed) {
         setTimeout(() => {
           window.location.href = "<?php echo Root_dir . 'app/app_close.php'; ?>";

         }, 1000);
         //  Swal.fire("Saved!", "", "success");
       } else if (result.isDenied) {
         Swal.fire("Changes are not saved", "", "info");
       }
     });
   });


   function F_b() {
     var stat = document.getElementById('customCheck2').checked;

     if (stat) {
       document.getElementById('show_b').style.display = 'block';
       for (let i = 1; i <= 5; i++) {
         document.getElementById('std_req' + i).required = true;
       }

       document.getElementById('customCheck2').checked = true;
     } else {
       document.getElementById('show_b').style.display = 'none';
       for (let i = 1; i <= 5; i++) {
         document.getElementById('std_req' + i).required = false;
         document.getElementById('std_req' + i).value = '';
       }
     }
   }
   // END

   function F_s() {
     //  console.log('clicked')
     stat = document.getElementById('customCheck1').checked;
     console.log(stat)

     input = ['sem', 'track', 'strand'];

     if (stat) {
       document.getElementById('show_s').style.display = 'block';


       for (let i = 0; i < input.length; i++) {
         console.log(input[i]);
         document.getElementById(input[i]).required = true;

       }

     } else {
       document.getElementById('show_s').style.display = 'none';

       for (let i = 0; i < input.length; i++) {
         console.log(input[i]);
         document.getElementById(input[i]).required = false;
         document.getElementById(input[i]).value = '';

       }

     }
   };


   // //////////////////////////////////
   function Reg_id(uid, name, grade) {
     document.getElementById('reg_id').value = uid;
     document.getElementById('reg_fullname').value = name; // Use 'name' instead of 'fullname'
     document.getElementById('reg_grade').value = grade; // Use 'name' instead of 'fullname'
     //  alert(uid); // This should now alert the 'name' parameter correctly

     function fetchDataWithInput(inputValue) {
       $.ajax({
         url: 'sec.data.php', // Specify your backend endpoint here
         method: 'GET',
         data: {
           grade: grade
         }, // Pass input value to the backend
         success: function(response) {
           // alert(response)
           document.getElementById('select_grade').innerHTML = response;
         },
         error: function(xhr, status, error) {
           console.error(xhr.responseText);
         }
       });
     }
     // Fetch data initially when the page loads
     fetchDataWithInput($('#reg_grade').val());

     //  // Set up an interval to fetch data every 5 seconds (adjust as needed)
     //  setInterval(function() {
     //    fetchDataWithInput($('#reg_grade').val()); // Fetch data based on input value
     //  }, 5000);
   }

   function Sec_e(value) {



     $.ajax({
       url: 'sec.data.sec.php', // Specify your backend endpoint here
       method: 'GET',
       data: {
         section: value
       }, // Pass input value to the backend
       success: function(response) {
         // alert(response)
         document.getElementById('Sec_val_s').value = response;
       },
       error: function(xhr, status, error) {
         console.error(xhr.responseText);
       }
     });

     // subject time

     $.ajax({
       url: 'sec.data.sub.php', // Specify your backend endpoint here
       method: 'GET',
       data: {
         section: value
       }, // Pass input value to the backend
       success: function(response) {
         // alert(response)
         document.getElementById('sub').innerHTML = response;
       },
       error: function(xhr, status, error) {
         console.error(xhr.responseText);
       }
     });
     $.ajax({
       url: 'sec.data.secuid.php', // Specify your backend endpoint here
       method: 'GET',
       data: {
         section: value
       }, // Pass input value to the backend
       success: function(response) {
         // alert(response)
         document.getElementById('sec_uid').value = response;
       },
       error: function(xhr, status, error) {
         console.error(xhr.responseText);
       }
     });

     // end


   }
   //  ///////////////////////////////////////





   function sort_all() {
     //  console.log(grade)
     window.location.href = './';
   }

   function sort_7(grade) {
     //  console.log(grade)
     window.location.href = './s.admission.php?_g=' + grade;
   }

   function sort_8(grade) {
     //  console.log(grade)
     window.location.href = './s.admission.php?_g=' + grade;
   }

   function sort_9(grade) {
     //  console.log(grade)
     window.location.href = './s.admission.php?_g=' + grade;
   }

   function sort_10(grade) {
     //  console.log(grade)
     window.location.href = './s.admission.php?_g=' + grade;
   }

   function sort_11(grade) {
     //  console.log(grade)
     window.location.href = './s.admission.php?_g=' + grade;
   }

   function sort_12(grade) {
     //  console.log(grade)
     window.location.href = './s.admission.php?_g=' + grade;
   }

   // END ADMIT SORT



   // START REGISTER SORT

   function S_reg_all() {
     window.location.href = './';
   }

   function S_reg(g) {
     window.location.href = './s.registration.php?glvl=' + g;
   }

   // START USER MANAGEMENT SORT



   function S_um_all() {
     window.location.href = './';
   }

   function S_um(dat) {
     console.log(dat)
     window.location.href = './.m.php?_d=' + dat;
   }

   function S_af(id) {
     //  console.log(grade)
     window.location.href = './a.php?a=' + id;
   }

   function S_as() {
     //  console.log(grade)
     window.location.href = './';
   }






   function Admit_r(id) {
     console.log(id)

     Swal.fire({
       title: "Do you want to admit this student?",
       showDenyButton: true,
       confirmButtonText: "Admit",
       denyButtonText: "Cancel",
       confirmButtonClass: "btn btn-success",
       cancelButtonClass: "btn btn-danger ml-2",
     }).then((result) => {
       if (result.isConfirmed) {
         // Make an AJAX request to admit the student
         $.ajax({
           url: "std.admit.php",
           type: "POST",
           data: {
             studentId: id
           }, // Assuming studentId is defined
           success: function(response) {
             console.log(response)
             Swal.fire("Admitted!", "", "success");
             setTimeout(function() {
               window.location.reload();
             }, 1000);
           },
           error: function(xhr, status, error) {
             Swal.fire("Error", "Failed to admit student", "error");
             console.error(xhr.responseText);
           }
         });
       } else if (result.isDenied) {
         Swal.fire("Cancelled", "", "info");
       }
     });
   }


   function G_s(val) {
     if (val === 'faculty') {
       //  alert(val);
       document.getElementById('grade').required = true;
       document.getElementById('H_d').style.display = 'block';
     } else {
       // Handle other cases or leave it empty
       document.getElementById('grade').required = false;
       document.getElementById('H_d').style.display = 'none';


     }
   }






   $(document).ready(function() {
     $('#addUser').submit(function(e) {
       e.preventDefault(); // Prevent the default form submission

       // Collect form data
       var formData = new FormData(this);
       formData.append('name', $('#name').val());
       formData.append('position', $('#position').val());
       formData.append('grade', $('#grade').val());
       formData.append('password', $('#pass2').val());
       formData.append('username', $('#username').val());
       console.log(formData.get('password'));
       // Perform AJAX submission
       $.ajax({
         url: 'addUser.php', // Replace with your server-side script URL
         type: 'POST',
         data: formData,
         contentType: false,
         processData: false,
         success: function(response) {
           // Handle success response
           console.log(response);
           Swal.fire({
             title: "Add User",
             text: "The user has been successfully added.",
             icon: "success",
             timer: 1000, // Set the timer to automatically close after 1.5 seconds (1500 milliseconds)
             showConfirmButton: false, // Hide the confirm button
             showCancelButton: false, // Hide the cancel button
           }).then(() => {
             // Delay the reload by 1.5 seconds before executing
             // Reload the page
             location.reload(true);
           });
         },
         error: function(xhr, status, error) {
           // Handle error
           console.error(xhr.responseText);
         }
       });
     });
   });







   $(document).ready(function() {
     $('#sectionForm').submit(function(e) {
       e.preventDefault(); // Prevent the default form submission

       // Collect form data
       var formData = {
         sectionName: $('#sectionName').val(),
         advicer: $('#advicer').val(),
         grade: $('#grade').val()
       };

       // Perform AJAX submission
       $.ajax({
         url: 'add.php', // Replace with your server-side script URL
         type: 'POST',
         data: formData,
         success: function(response) {
           // Handle success response
           console.log(response);
           // Optionally, display a success message or perform other actions
           Swal.fire({
             title: "Section Aded",
             text: "The new section has been successfully aded.",
             icon: "success",
             timer: 1000, // Set the timer to automatically close after 1.5 seconds (1500 milliseconds)
             showConfirmButton: false, // Hide the confirm button
             showCancelButton: false, // Hide the cancel button
           }).then(() => {
             // Delay the reload by 1.5 seconds before executing
             // Reload the page
             location.reload(true);
           });
         },
         error: function(xhr, status, error) {
           // Handle error
           console.error(xhr.responseText);
           // Optionally, display an error message or perform other actions
         }
       });
     });
   });




   function Add_sec(val) {
     //  alert(val)
     document.getElementById('grade').value = val;

   }


   function R_uid(uid) {
     const swalWithBootstrapButtons = Swal.mixin({
       customClass: {
         confirmButton: "btn btn-success m-2",
         cancelButton: "btn btn-danger m-2"
       },
       buttonsStyling: true
     });
     swalWithBootstrapButtons.fire({
       title: "Are you sure?",
       text: "You won't be able to revert this!",
       icon: "warning",
       showCancelButton: true,
       confirmButtonText: "Yes, delete it!",
       cancelButtonText: "No, cancel!",
       reverseButtons: true
     }).then((result) => {
       if (result.isConfirmed) {
         // Make an AJAX request to admit the student
         $.ajax({
           url: "remove.php",
           type: "POST",
           data: {
             uid: uid // Assuming studentId is defined
           },
           success: function(response) {
             //  alert(response)
             Swal.fire("Deleted!", "", "success");
             setTimeout(function() {
               window.location.reload();
             }, 1000);
           },
           error: function(xhr, status, error) {
             Swal.fire("Error", "Failed to delete section", "error");
             console.error(xhr.responseText);
           }
         });
       } else if (result.dismiss === Swal.DismissReason.cancel) {
         Swal.fire("Cancelled", "", "info");
       }
     })
   };


   $(document).ready(function() {
     $('#selectOptions1').select2({
       width: '100%',
       placeholder: 'Type to search...',
       dropdownParent: $('#selectOptions').parent(),
       tags: true,
       createTag: function(params) {
         return {
           id: params.term,
           text: params.term,
           newOption: true
         };
       },
       language: {
         noResults: function() {
           return 'No results found';
         }
       }
     });

     $('#selectOptions').select2({
       width: '100%',
       placeholder: 'Type to search...',
       dropdownParent: $('#selectOptions').parent(),
       tags: true,
       createTag: function(params) {
         return {
           id: params.term,
           text: params.term,
           newOption: true
         };
       },
       language: {
         noResults: function() {
           return 'No results found';
         }
       }
     });
     $('#advicer').select2({
       width: '100%',
       placeholder: 'Type to search...',
       dropdownParent: $('#advicer').parent(),
       tags: true,
       createTag: function(params) {
         return {
           id: params.term,
           text: params.term,
           newOption: true
         };
       },
       language: {
         noResults: function() {
           return 'No results found';
         }
       }
     });
     $('#select_grade').select2({
       width: '100%',
       placeholder: 'Type to search...',
       dropdownParent: $('#select_grade').parent(),
       tags: true,
       createTag: function(params) {
         return {
           id: params.term,
           text: params.term,
           newOption: true
         };
       },
       language: {
         noResults: function() {
           return 'No results found';
         }
       }
     });

   });






   function Add_sub(val) {
     //  alert(val)
     document.getElementById('sub_g').value = val;
   }

   function Sub_s_(val) {
     window.location.href = './';
   }

   function Sub_s(val) {
     window.location.href = './.php?s=' + val;
   }




   $(document).ready(function() {
     $('#subForm').submit(function(e) {
       e.preventDefault(); // Prevent the default form submission

       // Collect form data
       var formData = {
         subject: $('#subject').val(),
         grade: $('#sub_g').val()
       };
       // Perform AJAX submission
       $.ajax({
         url: 'sub.a.php', // Replace with your server-side script URL
         type: 'POST',
         data: formData,
         success: function(response) {
           Swal.fire("Added!", "", "success");
           setTimeout(function() {
             window.location.reload();
           }, 1000);
           // Handle success response
           // alert(response);
           // Optionally, display a success message or perform other actions
         },
         error: function(xhr, status, error) {
           // Handle error
           console.error(xhr.responseText);
           // Optionally, display an error message or perform other actions
         }
       });
     });
   });







   function R_uid(uid) {
     const swalWithBootstrapButtons = Swal.mixin({
       customClass: {
         confirmButton: "btn btn-success m-2",
         cancelButton: "btn btn-danger m-2"
       },
       buttonsStyling: true
     });
     swalWithBootstrapButtons.fire({
       title: "Are you sure?",
       text: "You won't be able to revert this!",
       icon: "warning",
       showCancelButton: true,
       confirmButtonText: "Yes, delete it!",
       cancelButtonText: "No, cancel!",
       reverseButtons: true
     }).then((result) => {
       if (result.isConfirmed) {
         // Make an AJAX request to admit the student
         $.ajax({
           url: "remove.php",
           type: "POST",
           data: {
             uid: uid // Assuming studentId is defined
           },
           success: function(response) {
             //  alert(response)
             Swal.fire("Deleted!", "", "success");
             setTimeout(function() {
               window.location.reload();
             }, 1000);
           },
           error: function(xhr, status, error) {
             Swal.fire("Error", "Failed to delete section", "error");
             console.error(xhr.responseText);
           }
         });
       } else if (result.dismiss === Swal.DismissReason.cancel) {
         Swal.fire("Cancelled", "", "info");
       }
     })
   };





   $(document).ready(function() {
     $('#loadForm').submit(function(e) {
       e.preventDefault(); // Prevent the default form submission

       // Collect form data
       var formData = {
         subject: $('#selectOptions1').val(),
         start: $('#cstart').val(),
         end: $('#cend').val(),
         mon: $('#select1').prop('checked') ? 'mon' : '',
         tue: $('#select2').prop('checked') ? 'tue' : '',
         wed: $('#select3').prop('checked') ? 'wed' : '',
         thu: $('#select4').prop('checked') ? 'thu' : '',
         fri: $('#select5').prop('checked') ? 'fri' : '',
         secuid: $('#secuid').val(),
         faculty: $('#selectOptions').val()
       };
       // Perform AJAX submission
       $.ajax({
         url: 'load.a.php', // Replace with your server-side script URL
         type: 'POST',
         data: formData,
         success: function(response) {
           Swal.fire("Added!", "", "success");
           setTimeout(function() {
             window.location.reload();
           }, 1000);
           // Handle success response
           //  alert(response);
           // Optionally, display a success message or perform other actions
         },
         error: function(xhr, status, error) {
           // Handle error
           console.error(xhr.responseText);
           // Optionally, display an error message or perform other actions
         }
       });
     });
   });



   function Load_r(val) {
     const swalWithBootstrapButtons = Swal.mixin({
       customClass: {
         confirmButton: "btn btn-success m-2",
         cancelButton: "btn btn-danger m-2"
       },
       buttonsStyling: true
     });
     swalWithBootstrapButtons.fire({
       title: "Are you sure?",
       text: "You won't be able to revert this!",
       icon: "warning",
       showCancelButton: true,
       confirmButtonText: "Yes, delete it!",
       cancelButtonText: "No, cancel!",
       reverseButtons: true
     }).then((result) => {
       if (result.isConfirmed) {
         // Make an AJAX request to admit the student
         $.ajax({
           url: "remove.l.php",
           type: "POST",
           data: {
             uid: val // Assuming studentId is defined
           },
           success: function(response) {
             //  alert(response)
             Swal.fire("Deleted!", "", "success");
             setTimeout(function() {
               window.location.reload();
             }, 1000);
           },
           error: function(xhr, status, error) {
             Swal.fire("Error", "Failed to delete section", "error");
             console.error(xhr.responseText);
           }
         });
       } else if (result.dismiss === Swal.DismissReason.cancel) {
         Swal.fire("Cancelled", "", "info");
       }
     })
   }
   $(document).ready(function() {
     // Function to fetch data using AJAX based on input value
     // 5000 milliseconds = 5 seconds
   });












   $(document).ready(function() {
     $('#regForm').submit(function(e) {
       e.preventDefault(); // Prevent the default form submission

       // Collect form data
       var formData = {

         userid: $('#reg_id').val(),
         reg_grade: $('#reg_grade').val(),
         select_grade: $('#select_grade').val(),
         sec_uid: $('#sec_uid').val()
       };
       // Perform AJAX submission
       $.ajax({
         url: 'enroll.php', // Replace with your server-side script URL
         type: 'POST',
         data: formData,
         success: function(response) {
           Swal.fire("Added!", response + "", "success");
           setTimeout(function() {
             window.location.reload();
           }, 1000);
           // Handle success response
           //  alert(response);
           // Optionally, display a success message or perform other actions
         },
         error: function(xhr, status, error) {
           // Handle error
           console.error(xhr.responseText);
           // Optionally, display an error message or perform other actions
         }
       });
     });


   });





   function E_uid(val) {
     // Define the title and message for the alert
     // Prompt the user for a section name
     let userInput = prompt("Section name:");

     // Check if the input is not empty
     if (userInput !== null) {
       if (userInput.trim() !== "") {
         var formData = {

           userid: val,
           secup: userInput
         };
         // Perform AJAX submission
         $.ajax({
           url: 'up.php', // Replace with your server-side script URL
           type: 'POST',
           data: formData,
           success: function(response) {
             Swal.fire("Added!", response + "", "success");
             setTimeout(function() {
               window.location.reload();
             }, 1000);
             // Handle success response
             //  alert(response);
             // Optionally, display a success message or perform other actions
           },
           error: function(xhr, status, error) {
             // Handle error
             console.error(xhr.responseText);
             // Optionally, display an error message or perform other actions
           }
         });
       } else {
         alert("Input field is empty.");
       }
     } else {
       alert("User cancelled the prompt.");
     }
   }
   // Call the function to prompt the user for a section name with a custom alert title





   function Reg(val) {
     // alert(val)
     window.location.href = './reg.php?_g=' + val;
   }

   function Reg_all() {
     // alert(val)
     window.location.href = './';
   }
   // SAL SORT START
   function S_click_d() {
     window.location.href = './';
   }

   function S_click(s_dat) {
     window.location.href = './s.php?s=' + s_dat;
   }



















   // Function to obfuscate the code
 </script>