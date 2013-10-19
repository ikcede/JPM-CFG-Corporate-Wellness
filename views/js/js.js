
// Events
$(document).on("click", "#header li.tab", function() {
   $("#header li.tab").removeClass("active");
   $(this).addClass("active");
   
   $(".page").hide();
   $(".page[content='"+$(this).attr("page")+"']").show();
});

$(document).on("click", "#login-submit", function() {
    var userparam = "user=" + $("#username").val(); 
    window.location = "https://jpmcorporatewellness-c9-ikcede.c9.io/index.php?"+userparam;
    return false;
});

$(document).ready(function() {
    $(".page[content='profile']").show();
});