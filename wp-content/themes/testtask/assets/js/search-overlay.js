$(document).ready(function(){
    $('#search').click(function(){
        $('.menu-item').addClass('hide-item')
        $('.search-form').addClass('active')
        $('.close').addClass('active')
        $('#search').hide()
        $('#cart').hide()
    })

    $('.close').click(function(){
        $('.menu-item').removeClass('hide-item')
        $('.search-form').removeClass('active')
        $('.close').removeClass('active')
        $('#search').show()
        $('#cart').show()
    })

})