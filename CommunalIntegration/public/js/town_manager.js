$(function() {
    $('.addButton').click(function(e) {
        e.preventDefault();

        if ($('.addTown').css('display') == 'none'){
            $('.listContent').css('width', '50%');
            $('.addButton').val('CLOSE MODAL');
        } else {
            $('.listContent').css('width', '100%');
            $('.addButton').val('ADD TOWN +');
        }

        $('.addTown').toggle();
    })
})
