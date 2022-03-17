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
    $('#filter').change(function(){
        var filter = $('#filter');
        $.ajax({
            url:filter.attr('action'),
            data:filter.serialize(), // form data
            type:filter.attr('method'), // POST
            beforeSend:function(xhr){
                filter.find('button').text('Processing...'); // changing the button label
            },
            success:function(data){
                filter.find('button').text('Apply filter'); // changing the button label back
                $('#damn').html(data); // insert data
            }
        });
        return false;
    });
