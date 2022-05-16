$(document).ready(function(){
    
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
        var password=$('#password').val();

        var locations=$('.locations').val();

        
        if(password=='')
        {
            $('#password').addClass('field_error');
            is_error=1;
        }else{
            $('#password').removeClass('field_error');
        
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

        
        
        if(is_error==0){
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