$.ajaxSetup({cache:false});
$("#test").click(function(e){ // line 5

    pageurl = $(this).attr('href');
    alert(pageurl);
    if(pageurl!=window.location) {
        window.history.pushState({path: pageurl}, '', pageurl);
    }

    var post_id = $(this).attr("rel")
    $("#test-wrapper").load("http://<?php echo $_SERVER[HTTP_HOST]; ?>/about",{id:post_id}); // line 12
    return false;
});
