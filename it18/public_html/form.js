$(".btn-rectangle").click(function(){

    $before_telephone = $(".flag-container .highlight").attr("data-dial-code");
    if($(".flag-container .highlight").length){
        $("#before_telephone").val("+"+$before_telephone+":");
    }
    var destinations = $("input[name='destinations[]']:checked").length;
    var response = grecaptcha.getResponse();
    if(response.length == 0){
        alert("Captcha è obbligatorio");
    }else if(destinations==0){
        alert("Destinazione è obbligatoria");
    }else{
        $("#submit")[0].click();
    }
});

