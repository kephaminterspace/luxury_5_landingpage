
$(".btn-rectangle").click(function(){
    $before_telephone = $(".flag-container .highlight").attr("data-dial-code");
    if($(".flag-container .highlight").length){
        $("#before_telephone").val("+"+$before_telephone+":");
    }
    var last_name = $("#last_name1").val()+" - "+$("#last_name2").val()+" - "+$("#last_name3").val();
    $("#last_name").val(last_name);
    var destinations = $("input[name='destinations[]']:checked").length;
    var response = grecaptcha.getResponse();
    if(response.length == 0){
        //reCaptcha not verified
        alert("Captcha es obligatorio");
    }else if(destinations==0){
        alert("Destinos son obligatorios");
    }else{
        $("#submit")[0].click();
        // $(this).html("Loading...");
        // $(this).attr("style", "cursor: pointer; z-index: 2; pointer-events: none;");
    }
});