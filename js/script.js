// jQuery + ES6

$('.slider').click(function(){
    let styles = window.getComputedStyle(document.querySelector("#damn"))
    let grid = $(".grid");

    grid.toggleClass("list");

    if (grid.hasClass("list")) {

        var cardsPerRow = Math.floor((window.innerWidth - 24) / 144); // 144 = 120 + 24
        var columns = styles.getPropertyValue('grid-template-columns').split(" ")
        var cardWidth = parseFloat(columns[0]);

        $('.row__sites-col__wrapper').each(function(i, obj) {
            var Y = i * 126; // height + gap + border = 100 + 24 + 2
            var X = (i % cardsPerRow) * (cardWidth + 24); // 24 = grid gap

            obj.style.transform = `translateY(${Y}px) translateX(-${X}px)`;
            obj.style.width = `calc(${window.innerWidth - 48}px)`; // page padding × 2 = 24 × 2 = 48
        });
    } else {
        $('.row__sites-col__wrapper').css({"transform": "translateY(0)", "width": "100%"});
    }
})
