

    function show_error(elem,error_elem,e = ""){
        error_elem.css("display","block");
        elem.css("border","1px solid #e30000");
        elem.css("background-color","#fff2f4");
        e.preventDefault();
    }

    function hide_error(elem,error_elem){
        error_elem.css("display","none");
        elem.css("border","1px solid grey");
        elem.css("background-color","white");

    }


    $('#login_form').on("submit",function(e){


        if($("#ide_login").val().length < 1){
            show_error($("#ide_login"),$("#id_error"),e)
        }
        else{
            hide_error($("#ide_login"),$("#id_error"));
        }

        
        if($("#pass_login").val().length < 1){
            show_error($("#pass_login"),$("#pass_error"))
        }
        else{
            hide_error($("#pass_login"),$("#pass_error"));
        }
    })


    $("#ide_login").on("input propertychange",function(){
        if($("#ide_login").val().length < 1){
            show_error($("#ide_login"),$("#id_error"))
        }
        else{
            hide_error($("#ide_login"),$("#id_error"));
        }
    })

    $("#pass_login").on("input propertychange",function(){
        if($("#pass_login").val().length < 1){
            show_error($("#pass_login"),$("#pass_error"))
        }
        else{
            hide_error($("#pass_login"),$("#pass_error"));
        }
    })
