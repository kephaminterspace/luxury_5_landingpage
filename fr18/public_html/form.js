$(".btn-rectangle").click(function(){
    $before_telephone = $(".flag-container .highlight").attr("data-dial-code");
    if($(".flag-container .highlight").length){
        $("#before_telephone").val("+"+$before_telephone+":");
    }
    var destinations = $("input[name='destinations[]']:checked").length;
    var response = grecaptcha.getResponse();
    if(response.length == 0){
        //reCaptcha not verified
        alert("Captcha est obligatoire");
    }else if(destinations==0){
        alert("Destination(s) est obligatoire");
    }else{
        $("#submit")[0].click();
    }
});