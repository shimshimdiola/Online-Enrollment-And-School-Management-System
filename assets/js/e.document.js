function E_form(input) {
  const file = input.files[0];
  const fileName = file.name;
  const fileSizeKB = file.size / 1024;

  const progressBar = document.getElementById("E_progress");
  document.getElementById("e_f").style.display = "block";
  document.getElementById("E_name").innerHTML = fileName;

  const formData = new FormData();
  formData.append("file", file);

  for (let index = 0; index < fileSizeKB; index++) {
    setTimeout(() => {
      const progressWidth = ((index + 1) / fileSizeKB) * 100;
      progressBar.style.width = `${progressWidth}%`;
      document.getElementById("E_c").innerHTML = progressWidth.toFixed() + "%";
      progressBar.setAttribute("aria-valuenow", progressWidth);

      if (progressWidth >= 100) {
        $.ajax({
          url: "e.form.u.php",
          type: "POST",
          data: formData,
          processData: false,
          contentType: false,
          
         success: function (response) {
    console.log(response);
    // Update UI elements
    document.getElementById("E_t").innerHTML = "Upload complete";
    document.getElementById("E_i").style.display = "block";
    document.getElementById("input-file-now").disabled = true;

    // Display success message with SweetAlert
    Swal.fire({
        title: "File Uploaded",
        text: "The file has been successfully uploaded.",
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
    // Handle errors if needed
    console.error("Error uploading file: " + error);
    // You can also display an error message using Swal or update UI accordingly
}

        });
      }
    }, 15 * index);
  }
}

// ########################## sortinng ################################################



