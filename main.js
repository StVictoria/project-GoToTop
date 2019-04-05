// бургер меню
$(".burger").click(function(){
    $(".header").toggleClass("open");
});


//навигация меню
function choice(name, color){
    $(".header").find("a").css("color", "#000000");
    if (name == "contacts"){
        $("html, body").animate({
            scrollTop: $(".footer_block").offset().top - $(".header").outerHeight()
        }, 1000);
    }else if (name == "news"){
        $("html, body").animate({
            scrollTop: $(".news").offset().top - $(".header").outerHeight()
        }, 1000);
    }else if (name == "representation"){
        $("html, body").animate({
            scrollTop: $(".representation").offset().top - $(".header").outerHeight()
        }, 1000);
    }
    $(".header").removeClass("open");
    color.css("color", "#02bcef");
}

$(".header").find(".about_us").click(function(){
    choice("representation", $(this));
});
$(".header").find(".our_news").click(function(){
    choice("news", $(this));
});
$(".header").find(".contacts").click(function(){
    choice("contacts", $(this));
});



// валидация формы
$("form").submit(function(e){

    let fioVal = $(this).find("[name='fio']").val();
    let emailVal = $(this).find("[name='email']").val();
    let phoneVal = $(this).find("[name='phone']").val();
    let errorElement = $(".write_us").find(".error_message");

    if (fioVal == "" || emailVal == "" || phoneVal == ""){
        let errorMessage = "Вы заполнили не все поля";
        if (fioVal == ""){
            $(this).find("[name='fio']").addClass("fail");
        }else{
            $(this).find("[name='fio']").removeClass("fail");
        }
        if (emailVal == ""){
            $(this).find("[name='email']").addClass("fail");
        }else{
            $(this).find("[name='email']").removeClass("fail");
        }
        if (phoneVal == ""){
            $(this).find("[name='phone']").addClass("fail");
        }else{
            $(this).find("[name='phone']").removeClass("fail");
        }
        $("form").addClass("control");
        errorElement.html(errorMessage);
        errorElement.slideDown();
    }else{
        $(this).find("[name='fio']").removeClass("fail");
        $(this).find("[name='email']").removeClass("fail");
        $(this).find("[name='phone']").removeClass("fail");
        $("form").submit();
        errorElement.slideUp();
    }
});

$("[name='fio'], [name='email'], [name='phone']").keyup(function(e){
    
    if ($("form").hasClass("control")){

        let errorElement = $(".write_us").find(".error_message");
        let errorMessage = "Вы заполнили не все поля";
        errorElement.html(errorMessage);
        if (e.keyCode !== 27 || e.keyCode !== 9 || e.keyCode !== 17 || e.keyCode !== 32){
            if ($(this).val().length >= 4){
                $(this).removeClass("fail");
                if ($("form").find("input.fail").length == 0){
                    errorElement.slideUp();
                }
            }else{
                $(this).addClass("fail");
                errorElement.slideDown();
            }
        }
        // console.log(e.keyCode); 27 9 17 32
    }
});