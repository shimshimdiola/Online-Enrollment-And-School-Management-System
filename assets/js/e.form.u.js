// form update

// console.log("connected");
$(document).ready(function () {
  var formSubmitted = false; // Variable to track if form is already submitted
  $("#E_form").submit(function (event) {
    event.preventDefault(); // Prevent the default form submission
    if (formSubmitted) {
      // If form is already submitted, do nothing
      return;
    }
    var formData = {
      lrn: $("#lrn").val(),
      etype: $("#std_typ").val(),
      glevel: $("#glevel").val(),
      fname: $("#fname").val(),
      lname: $("#lname").val(),
      mname: $("#mname").val(),
      bdate: $("#bdate").val(),
      bplace: $("#bplace").val(),
      sex: $("#sex").val(),
      cstatus: $("#cstatus").val(),
      ipa: $("#ipa").val(),
      tod: $("#tod").val(),
      psno: $("#psno").val(),
      citizenship: $("#citizenship").val(),
      brgy: $("#brgy").val(),
      cmpc: $("#cmpc").val(),
      zcode: $("#zcode").val(),
      email: $("#email").val(),
      mnumber: $("#mnumber").val(),
      f_ln: $("#f_ln").val(),
      f_fn: $("#f_fn").val(),
      f_mn: $("#f_mn").val(),
      m_ln: $("#m_ln").val(),
      m_fn: $("#m_fn").val(),
      m_mn: $("#m_mn").val(),
      // customCheck2: $("#customCheck2").val(), //balik-aral
      std_req1: $("#std_req1").val(), // Last Grade Level Completed
      std_req2: $("#std_req2").val(), //Last School Year Completed
      std_req3: $("#std_req3").val(), // School Name
      std_req4: $("#std_req4").val(), // School ID
      std_req5: $("#std_req5").val(), //School Address

      // customCheck1: $("#customCheck1").val(), //senior high
      sem: $("#sem").val(),
      track: $("#track").val(),
      strand: $("#strand").val(),
    };

    var checkBox = document.getElementById("customCheck2");
    var checkBox1 = document.getElementById("customCheck1");
    // var display = document.getElementById("displayValue");

    // balik aral
    if (checkBox.checked) {
      formData.balik_aral = "true";
    } else {
      formData.balik_aral = "false";
    }
    // senoir high
    if (checkBox1.checked) {
      formData.senoir_high = "true";
    } else {
      formData.senoir_high = "false";
    }

    $.ajax({
      type: "POST",
      url: "e.update.php", // Replace with your server-side script URL
      data: formData,
      success: function (response) {
        console.log(response); // Log the response to the console
        // alert(response); // You can show an alert if needed
        Swal.fire({
          icon: "success",
          title: "Update Successful",
          // text: response, // You can include the response text in the message
          showConfirmButton: false, // No confirm button in SweetAlert
          // timer: 1500, // You can set a timer for automatic closing
        });

        setTimeout(function () {
          window.location.reload(); // Reload the page after a delay
        }, 1000); // 1000 milliseconds delay (1 second)
      },
      error: function (xhr, status, error) {
        console.error(xhr.responseText); // Log any errors
        Swal.fire({
          icon: "error",
          title: "Error saving data. Please try again.",
          showConfirmButton: false,
          timer: 1500,
        });
      },
    });
  });
});
