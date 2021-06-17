$(document).ready(function() {
    // $(window).scroll(function() {    
    //     var scroll = $(window).scrollTop();    
    //     if (scroll <= 200) {
    //         $(".header-wrap").removeClass("clearHeader").addClass("darkHeader");
    //     }
    // });
    function submitSubscribeForm($form, $resultElement) {
        $.ajax({
            type: "POST",
            url: "assets/ajax/sendreservationemail.php",
            data: $form.serialize(),

            success: function (data) {
                if (data == "1") {
                    $resultElement.css("color", "white");
                    $resultElement.html("Email sent successfully.");
                } else {
                    $resultElement.html("There is an issue while sending email, please try again later.");
                }
            },
            error: function (error) {
                // According to jquery docs, this is never called for cross-domain JSONP requests
            },
        });
    }
    $("#res-form").submit(function (event) {
        event.preventDefault();
        submitSubscribeForm($("#res-form"), $("#res-form-result"))
    });
});