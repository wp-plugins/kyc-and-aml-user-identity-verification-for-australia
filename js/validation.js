jQuery(document).ready(function(){

  
 
  
jQuery(".identity_type").change(function(){
      if(jQuery(this).val()=='driver_license'){
        jQuery(".dl_info").css("display","block");
        jQuery(".passport_info").css("display","none");
        jQuery(this).attr("checked","true");
        jQuery("#p_button").removeAttr("checked");
      }
      if(jQuery(this).val()=='passport'){
        jQuery(".dl_info").css("display","none");
        jQuery(".passport_info").css("display","block");
        jQuery(this).attr("checked","true");
        jQuery("#dl_btn").removeAttr("checked");
      }
    });
    jQuery(".btn").click(function(){
        var regex_name=/^([a-zA-Z]+\s)*[a-zA-Z|_|-]+$/;
        var regex_dl_no=/^[A-Za-z0-9]+$/;
        var postdata='';
        var dob= jQuery(".day").val()+"-"+jQuery(".month").val()+"-"+jQuery(".year").val();
        var eod='';
        if(jQuery("#first_name").val()==''){
          jQuery(".err_fname").text("Please Enter Your Name");
          jQuery("#first_name").focus();
          jQuery("#first_name").css("border","1px solid red");
          return false;
        }
        if(!regex_name.test(jQuery("#first_name").val())){
            jQuery(".err_fname").text("Please Enter Valid Name");
            jQuery("#first_name").focus();
            jQuery("#first_name").css("border","1px solid red");
            return false;
        }
        else{
            jQuery("#first_name").css("border","1px solid #dfdfdf");

          jQuery(".err_fname").text("");
        }

        if(jQuery("#last_name").val()==''){
          jQuery(".err_lname").text("Please Enter Your Last Name");
          jQuery("#last_name").focus();
          jQuery("#last_name").css("border","1px solid red");
          return false;
        }
        if(!regex_name.test(jQuery("#last_name").val())){
            jQuery(".err_lname").text("Please Enter Valid Name");
            jQuery("#last_name").focus();
            jQuery("#last_name").css("border","1px solid red");
            return false;
        }else{
            jQuery("#last_name").css("border","1px solid #dfdfdf");

          jQuery(".err_lname").text("");
        }
        if(jQuery(".day").val()=='' || jQuery(".month").val()=='' || jQuery(".year").val()==''){
          jQuery(".err_dob").text("Please Select Your Date of Birth");
          
          return false;
        }else{
          
          jQuery(".err_dob").text("");
        }
        if(jQuery("#country").val()==''){
          jQuery(".err_country").text("Please Select Your Country");
          jQuery("#country").focus();
          jQuery("#country").css("border","1px solid red");
          return false;
        }else{
            jQuery("#country").css("border","1px solid #dfdfdf");

          jQuery(".err_country").text("");
        }
        
      if(jQuery("input[name=identity_type]:checked").val()=='driver_license'){
        
        if(jQuery("#driving_license").val()==''){
          jQuery(".err_dl").text("Please Enter Driving Licence");
          jQuery("#driving_license").focus();
          jQuery("#driving_license").css("border","1px solid red");
          return false;
        }
        if(!regex_dl_no.test(jQuery("#driving_license").val())){
            jQuery(".err_dl").text("Please Enter Valid Driving Licence Number");
            jQuery("#driving_license").focus();
            jQuery("#driving_license").css("border","1px solid red");
            return false;
        }
        else{
            jQuery("#driving_license").css("border","1px solid #dfdfdf");

          jQuery(".err_dl").text("");
        }
        if(jQuery("#dl_state").val()==''){
          jQuery(".err_dl_state").text("Please Enter Driving Licence State");
          jQuery("#dl_state").focus();
          jQuery("#dl_state").css("border","1px solid red");
          return false;
        }else{
            jQuery("#dl_state").css("border","1px solid #dfdfdf");

          jQuery(".err_dl_stae").text("");
        }
        if(jQuery("#dl_state").val()=='NSW'){
          if(!regex_dl_no.test(jQuery("#rta").val())){
            jQuery(".rta").text("Please Enter Valid RTA Number");
            jQuery("#rta").focus();
            jQuery("#rta").css("border","1px solid red");
            return false;
          }
        }
        if(jQuery("#dl_state").val()=='WA'){
            if(jQuery(".eday").val()=='' || jQuery(".emonth").val()=='' || jQuery(".eyear").val()==''){
              jQuery(".err_eod").text("Please Select Your Date of Birth");
              
              return false;
            }else{
              var eod= jQuery(".eday").val()+"-"+jQuery(".emonth").val()+"-"+jQuery(".eyear").val();
            }
        }
         postdata="first_name="+jQuery("#first_name").val()+"&last_name="+jQuery("#last_name").val()+"&date_of_birth="+dob+"&country="+jQuery("#country").val()+"&driver_license_number="+jQuery("#driving_license").val()+"&driver_license_state="+jQuery("#dl_state").val()+"&rta_card_number="+jQuery("#rta").val()+"&date_of_expiry="+eod+"&identity_type=driver_license";

      }if(jQuery("input[name=identity_type]:checked").val()=='passport'){

        if(jQuery("#p_no").val()==''){
          jQuery(".err_p_no").text("Please Enter Passport Number");
          jQuery("#p_no").focus();
          jQuery("#p_no").css("border","1px solid red");
          return false;
        }
        if(!regex_dl_no.test(jQuery("#p_no").val())){
            jQuery(".err_p_no").text("Please Enter Valid Passport Number");
            jQuery("#p_no").focus();
            jQuery("#p_no").css("border","1px solid red");
            return false;
        }
        else{
            jQuery("#p_no").css("border","1px solid #dfdfdf");

          jQuery(".err_p_no").text("");
        }
        if(jQuery("#pob").val()==''){
          jQuery(".err_pob").text("Please Enter Place of Birth ");
          jQuery("#pob").focus();
          jQuery("#pob").css("border","1px solid red");
          return false;
        }
         if(!regex_name.test(jQuery("#pob").val())){
            jQuery(".err_pob").text("Please Enter Valid Passport Birth Place");
            jQuery("#pob").focus();
            jQuery("#pob").css("border","1px solid red");
            return false;
        }
        else{
            jQuery("#pob").css("border","1px solid #dfdfdf");

          jQuery(".err_pob").text("");
        }
        if(jQuery("#passport_birth_country").val()==''){
          jQuery(".err_p_pbc").text("Please Select Country of Birth Place ");
          jQuery("#passport_birth_country").focus();
          jQuery("#passport_birth_country").css("border","1px solid red");
          return false;
        }else{
            jQuery("#passport_birth_country").css("border","1px solid #dfdfdf");

          jQuery(".err_p_pbc").text("");
        }
        if(jQuery("#p_sab").val()==''){
          jQuery(".err_p_sab").text("Please Enter Family Name at Birth");
          jQuery("#p_sab").focus();
          jQuery("#p_sab").css("border","1px solid red");
          return false;
        }
        if(!regex_name.test(jQuery("#p_sab").val())){
            jQuery(".err_p_sab").text("Please Enter Valid Family Name at Birth");
            jQuery("#p_sab").focus();
            jQuery("#p_sab").css("border","1px solid red");
            return false;
        }
        else{
            jQuery("#p_sab").css("border","1px solid #dfdfdf");

          jQuery(".err_p_sab").text("");
        }
        if(jQuery("#p_fac").val()==''){
          jQuery(".err_p_fac").text("Please Enter  Name at Citizenship ");
          jQuery("#p_fac").focus();
          jQuery("#p_fac").css("border","1px solid red");
          return false;
        }
        if(!regex_name.test(jQuery("#p_fac").val())){
            jQuery(".err_p_fac").text("Please Enter Valid  Name at Citizenship");
            jQuery("#p_fac").focus();
            jQuery("#p_fac").css("border","1px solid red");
            return false;
        }
        else{
            jQuery("#p_fac").css("border","1px solid #dfdfdf");

          jQuery(".err_p_fac").text("");
        }
        if(jQuery("#p_sac").val()==''){
          jQuery(".err_p_sac").text("Please Enter Family Name at Citizenship ");
          jQuery("#p_sac").focus();
          jQuery("#p_sac").css("border","1px solid red");
          return false;
        }
        if(!regex_name.test(jQuery("#p_sac").val())){
            jQuery(".err_p_sac").text("Please Enter Valid  Family Name at Citizenship");
            jQuery("#p_sac").focus();
            jQuery("#p_sac").css("border","1px solid red");
            return false;
        }
        else{
            jQuery("#p_sac").css("border","1px solid #dfdfdf");

          jQuery(".err_p_sac").text("");
        }
        postdata="first_name="+jQuery("#first_name").val()+"&last_name="+jQuery("#last_name").val()+"&date_of_birth="+dob+"&country="+jQuery("#country").val()+"&passport_number="+jQuery("#p_no").val()+"&passport_placeof_birth="+jQuery("#pob").val()+"&passport_birth_country_name="+jQuery("#passport_birth_country").val()+"&surname_atbirth="+jQuery("#p_sab").val()+"&firstname_atcitizenship="+jQuery("#p_fac").val()+"&surname_atcitizenship="+jQuery("#p_sac").val()+"&identity_type=passport";
      }
      jQuery(".loader_image").css("display","block");
      jQuery("body").css("opacity",'0.5');
      jQuery.ajax({
          url:site_url+'/wp-admin/admin-ajax.php?action=verify_identity',
          type:'post',
          data:postdata,
          success:function(result){
              jQuery(".loader_image").css("display","none");
              jQuery("body").css("opacity",'1');
              //result=result.replace('0', '');
              jQuery(".result").html(result);

              jQuery(".ivs-form").slideUp("slow");
          }
      })
    });
  jQuery("#dl_state").change(function(){
    if(jQuery(this).val()=='NSW'){
      jQuery(".state_dl").slideDown("slow");
    }else{
      jQuery(".state_dl").slideUp("slow");
    }
    if(jQuery(this).val()=='WA'){
      jQuery(".doe_dl").slideDown("slow");
    }else{
      jQuery(".doe_dl").slideUp("slow");
    }
  });
})