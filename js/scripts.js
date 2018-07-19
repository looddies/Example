$(document).ready(function(){
    $("#openModal").click(function(){
        
        $("#modalDialog").css({
            display: "block",
            pointerEvents: "auto"
        });
        $("#modalDialog>div").css({
            opacity: 0
        });
        $("#modalDialog>div").animate({
            opacity: 1
        }, 150)
    });
    $("#closeModal").click(function(){
        $("#modalDialog").css({
            display: "none",
            pointerEvents: "none"
        });
    });
    $('#modalDialog').on('click', function(e) {
        if (e.target !== this)
            return;
        $("#modalDialog").css({
            display: "none",
            pointerEvents: "none"
        });
    });
});