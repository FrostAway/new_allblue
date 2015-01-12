$(document).ready(function() {
    // dropdown menu
    $("#top-menu li.dropdown").hover(function() {
            $(this).children("ul.dropdown-menu").fadeIn();
        },
        function() {
            $(this).children("ul.dropdown-menu").fadeOut();
        });

    /************  scroll windows  ************/

    $(window).scroll(function(){

        if ($(this).scrollTop() >= 200) {
            animate_feature_title();
        }
        if ($(this).scrollTop() >= 350) {
            animate_feature_box();
        }
        if ($(this).scrollTop() >= 680) {
            animate_template_title();
        }

        // about page
        if ($(this).scrollTop() >= 400) {
            skill_animate();
        }
    });

    // hover feature box
    $(".feature-box").hover(function(){
            $(this).children("h3").slideUp(100);
        },
        function() {
            $(this).children("h3").slideDown(100);
        });

    // click template category icon
    $("#templates-header>ul>li").click(function() {
        // remove active for any
        $("#templates-header>ul>li.active").find(".li-triangle").remove();
        $("#templates-header>ul>li.active").removeClass("active");

        // add active for click
        $(this).addClass("active");
        $(this).append("<div class='li-triangle'></div>");

        // hide templates which not in category
        var category_id = $(this).attr("data-category");
        $(".template-box").each(function(){
            if ($(this).attr("cat").indexOf(category_id) > -1) {
                $(this).show("slow");
            }
            else {
                $(this).hide("slow");
            }
        });
    });

    // hover template box
    $(".template-img").hover(function() {
            $(this).children(".layer").animate({opacity:"0.5"});
            $(this).children("a").fadeIn();
        },
        function() {
            $(this).children(".layer").animate({opacity:"0"});
            $(this).children("a").fadeOut();
    });

    // click view template
    $(".view-template").click(function() {
        var data_img = $(this).attr("data-img");
        // get src of appropriate image
        $("#fixed-layer").fadeIn("slow", function() {
            $("#close-layer-button").show();
            $('html, body').animate({scrollTop : 0},400, function() {
                $("#fixed-img>img").attr("src", data_img);
                $("#fixed-img").show();
            });
        });
        event.preventDefault();
    });

    // close layer

    $("#fixed-img>img").click(function() {
        event.stopPropagation();
    });
    $("#fixed-img").click(function() {
        close_layer();
    });
    $("#fixed-layer").click(function() {
        close_layer();
    });
    $("#close-layer-button").click(function() {
        close_layer();
        event.preventDefault();
    });


    // progress animate
    $(".progress-box").hover(function() {
            $(this).animate({top:"-=20px"});
        },
        function() {
            $(this).animate({top:"+=20px"});
        });

    // up to top button
    $('#up-button').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });

    /*********************************************************/
    /*********************************************************/
    /**                                                     **/
    /**                   FUNCTIONS DEFINE                  **/
    /**                                                     **/
    /*********************************************************/
    /*********************************************************/

    function close_layer() {
        $("#fixed-img").hide();
        $("#close-layer-button").hide();
        $("#fixed-layer").fadeOut("slow");
    }

    // animate feature header function
    count_animate_1 = 0;
    function animate_feature_title() {
        if (count_animate_1 == 0) {
            count_animate_1++;

            $("#feature>.wrapper>p").animate({
                opacity:"1"
            });
        }
    }

    // animate feature box function
    count_animate_2 = 0;
    function animate_feature_box() {
        if (count_animate_2 == 0) {
            count_animate_2++;

            $(".feature-box").animate({
                opacity:"1"
            }, 1500);
        }
    }

    count_animate_3 = 0;
    function animate_template_title() {
        if (count_animate_3 == 0) {
            count_animate_3++;

            $("#templates>h1").animate({
                top:"-=40px"
            },800, function() {
                $("#templates>h1").animate({
                    top:"+=40px"
                }, 1200);
            });
        }
    }

    count_animate_4 = 0;
    function skill_animate() {
        if (count_animate_4 == 0) {
            count_animate_4++;

            animate_width(".skill-1", "89%");
            animate_width(".skill-2", "95%");
            animate_width(".skill-3", "100%");
            animate_width(".skill-4", "85%");
            animate_width(".skill-5", "98%");
        }
    }

    function animate_width(class_name, width_percent) {
        $(class_name).animate({
            width:"100%"
        },2000, function() {
            $(class_name).animate({width:width_percent});
        });
    }

});