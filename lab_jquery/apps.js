$(document).ready(function () {

    let countClicks = 0;
    $(".discounts").on("click", function () {
        $("li>span.tag").each(function (i, v) {
            console.log(parseInt($(v).text()));
            $(v).html(((parseInt($(v).text())) * 0.85).toFixed(2) + " $").
            removeClass("tag-primary").addClass("tag-danger");
        });
    });


    $(".nodisc").on("click", function () {
        $("li>span.tag").each(function (j, l) {
            $(l).html(((parseInt($(l).text())) * 1.178).toFixed(2) + " $").
            removeClass("tag-danger").addClass("tag-primary");
        });
    });
});





