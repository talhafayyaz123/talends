
    var input = document.querySelector("#phone_number");
    window.intlTelInput(input, {
        autoHideDialCode: true,
        dropdownContainer: document.body,
        formatOnDisplay: true,
        initialCountry: "auto",
        separateDialCode: true
    });

$(document).ready(function(){
    
    // change of email check already exist
    

      $('#email, #register_password').change(function() {
        email_password_check();
    });
    ////////////////////////////////////////////

    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
    
    setProgressBar(current);
    
    $(".next").click(function(){
        var is_error=0;
        var company_name=$('#company_name').val();
        var email=$('#email').val();
        var phone_number=$('#phone_number').val();
        var employees=$('#employees').val();
        var password=$('#register_password').val();
       var country_code=$('.iti__selected-flag').text();
     
        
        if(password=='')
        {
            $('#register_password').addClass('field_error');
            is_error=1;
        }else{
            $('#register_password').removeClass('field_error');
        
        }   
        
        if(company_name=='')
        {
            $('#company_name').addClass('field_error');
            is_error=1;
        }else{
            $('#company_name').removeClass('field_error');
        
        }   


        if(email=='')
        {
            $('#email').addClass('field_error');
            is_error=1;
        }else{
            $('#email').removeClass('field_error');
            
        }  

        if(phone_number=='')
        {
            $('#phone_number').addClass('field_error');
            is_error=1;
        }else{
            $('#phone_number').removeClass('field_error');
            
        }
        
        
        if(employees=='')
        {
            $('#employees').addClass('field_error');
            is_error=1;
        }else{
            $('#employees').removeClass('field_error');
            
        }
       
        if(current==1 && is_error==0){
           
             let _token   = $('meta[name="csrf-token"]').attr('content');
             var obj=$(this);
                   jQuery.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                      }
                  });
                   jQuery.ajax({
                    url: "/agency/register/custom-errors",
                      method: 'post',
                      data: {
                        email:email,
                        password:password,
                      _token: _token
                      },
                      success: function(data){
            
                        if(data.errors){
                            jQuery('#password_error').html('');
                            jQuery('#email_error').html('');

                           jQuery('#password_error').hide();
                            jQuery('#email_error').hide();
                            jQuery.each(data.errors, function(key, value){
                           
                                
                                
                                if(value=='The password format is invalid.'){
                                    jQuery('#password_error').show();
                                    jQuery('#password_error').append('<p class="mb-0">password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character</p>'); 
                                }else if(value=='The email has already been taken.' || value=='Please use your Business email' )
                                {
                                    jQuery('#email_error').show();
                                    jQuery('#email_error').append('<p class="mb-0">'+value+'</p>'); 
                                }else{
                                    
                                    jQuery('#password_error').show();
                                    jQuery('#password_error').append('<p class="mb-0">'+value+'</p>'); 
                                
                                }
                               
                           });
                         is_error=1;
                        }else{
                            is_error=0
                            $('#phone_number').val(country_code+phone_number);
                            jQuery('.alert-danger').html('');
                            jQuery('.alert-danger').hide();
                            current_fs = obj.parent();
                            next_fs = obj.parent().next();
                            console.log(current_fs);console.log(next_fs);
                    
                            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                            
                            
                            next_fs.show(); 
                        
                            current_fs.animate({opacity: 0}, {
                              
                                step: function(now) {
                            
                                    opacity = 1 - now;
                        
                                    current_fs.css({
                                        'display': 'none',
                                        'position': 'relative'
                                    });
                                    next_fs.css({'opacity': opacity});
                                }, 
                                duration: 500
                            });
                            setProgressBar(++current);
                                            }
                             
                        }
                        
                      });
                
                
           
           
        }
        

        if(current==2){
            
            var locations=$('.locations').val();
            var agency_language=$('#agency_language').val();
            var agency_website=$('#agency_website').val();
            var budget=$('#budget').val();


            if(budget=='')
            {
                $('#budget').addClass('field_error');
                is_error=1;
            }else{
                $('#budget').removeClass('field_error');
            
            }
            
            if(agency_website=='')
            {
                $('#agency_website').addClass('field_error');
                is_error=1;
            }else{
                $('#agency_website').removeClass('field_error');
            
            }

            if(locations=='')
            {
                $('.locations').addClass('field_error');
                is_error=1;
            }else{
                $('.locations').removeClass('field_error');
            
            } 

            
            if(agency_language=='')
            {
                $('#agency_language').addClass('field_error');
                is_error=1;
            }else{
                $('#agency_language').removeClass('field_error');
            
            } 

         }


         if(current==3){
            var categories= $("#categories").val();
           
            if(categories.indexOf(',')=='-1' )
            {
                jQuery('.alert-danger').html('');
                jQuery('.alert-danger').show();
                jQuery('.alert-danger').append('<p>Please Select Services</p>'); 
                is_error=1;
            }
             if(categories.length==1){
                jQuery('.alert-danger').html('');
                jQuery('.alert-danger').hide();
                is_error=0;
            }
             if(categories.indexOf(',') !='-1'){
                jQuery('.alert-danger').html('');
                jQuery('.alert-danger').hide();
        
            } 
         }

        
        
        if(is_error==0 && current>1){
            jQuery('.alert-danger').html('');
            jQuery('.alert-danger').hide();

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();
        
        //Add Class Active
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
        
        //show the next fieldset
        next_fs.show(); 
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
            }, 
            duration: 500
        });
        setProgressBar(++current);

    }
    });
    
    $(".previous").click(function(){
        
        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();
        
        //Remove class active
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
        
        //show the previous fieldset
        previous_fs.show();
    
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;
    
                current_fs.css({
                    'display': 'none',
                    'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
            }, 
            duration: 500
        });
        setProgressBar(--current);
    });
    
    function setProgressBar(curStep){
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
          .css("width",percent+"%")   
    }
    
    $(".submit").click(function(){
        return false;
    })
        
    });


    function email_password_check(){
        var email=$('#email').val();
        var register_password=$('#register_password').val();
    
       let _token   = $('meta[name="csrf-token"]').attr('content');
       var obj=$(this);
             jQuery.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
             jQuery.ajax({
              url: "/agency/register/custom-errors",
                method: 'post',
                data: {
                  email:email,
                  password:register_password,
                _token: _token
                },
                success: function(data){
       
                  if(data.errors){
                      jQuery('#password_error').html('');
                      jQuery('#email_error').html('');
       
                     jQuery('#password_error').hide();
                      jQuery('#email_error').hide();
                      jQuery.each(data.errors, function(key, value){
                     
                          if(value=='The password format is invalid.'){
                              jQuery('#password_error').show();
                              jQuery('#password_error').append('<p class="mb-0">password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character</p>'); 
                          }else if(value=='The email has already been taken.' || value=='Please use your Business email' )
                          {
                              jQuery('#email_error').show();
                              jQuery('#email_error').append('<p class="mb-0">'+value+'</p>'); 
                          }else{
                              
                              jQuery('#password_error').show();
                              jQuery('#password_error').append('<p class="mb-0">'+value+'</p>'); 
                          
                          }
                         
                     });
                     $('.step_1_btn').attr('disabled', true);
                  }else{
                      is_error=0;
                      jQuery('#password_error').html('');
                      jQuery('#email_error').html('');
       
                     jQuery('#password_error').hide();
                      jQuery('#email_error').hide();
                      $('.step_1_btn').removeAttr('disabled');
                     
                }
                       
                  }
                  
                });
          

        /////

    }