function E_p() {
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
      formData.balik_aral = "✓";
    } else {
      formData.balik_aral = "";
    }
    // senoir high
    if (checkBox1.checked) {
      formData.senoir_high = "✓";
    } else {
      formData.senoir_high = "";
    }
var redirectUrl = 'temp.enform.php?lrn=' + encodeURIComponent(formData.lrn) + '&glevel=' + encodeURIComponent(formData.glevel) + '&lname=' + encodeURIComponent(formData.lname) + '&fname=' + encodeURIComponent(formData.fname)  + '&mname=' + encodeURIComponent(formData.mname);
window.open(redirectUrl, '_blank');


    
}