// jQuery + ES6
/*Change grid to list*/
$('.slider').click(function () {
    let styles = window.getComputedStyle(document.querySelector("#damn"))
    let grid = $(".grid");

    grid.toggleClass("list");
});
/*ajax sort*/
$('#filter').change(function () {
    var filter = $('#filter');
    $.ajax({
        url: filter.attr('action'),
        data: filter.serialize(), // form data
        type: filter.attr('method'), // POST
        beforeSend: function (xhr) {
            filter.find('button').text('Processing...'); // changing the button label
        },
        success: function (data) {
            filter.find('button').text('Apply filter'); // changing the button label back
            $('#damn').html(data); // insert data
        }
    });
    return false;
});
/*Hamburger*/
$('.menu-btn').on('click', function (e) {
    e.preventDefault;
    $(this).toggleClass('menu-btn_active');
    $('#primary-menu').toggleClass('menu-nav_active');
})