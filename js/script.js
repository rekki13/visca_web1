// jQuery + ES6

$('.slider').click(function(){
    let styles = window.getComputedStyle(document.querySelector("#damn"))
    let grid = $(".grid");

    grid.toggleClass("list");

    if (grid.hasClass("list")) {

        $('.col__wrapper-logo').css({"flex-basis": "20%"});
        $('.row__sites-col__wrapper').css({"flex-basis": "100%"});

    } else {
        $('.row__sites-col__wrapper').css({"flex-basis": "20%"});
        $('.rer').css({"flex-basis": "100%"});

    }
})
