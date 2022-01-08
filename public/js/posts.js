$(document).ready(function () {
    //alert('teste')
})

function postDetails(route) {
    window.location.href = route
}

function editPost(event, id) {
    let menu = $('#dropdown-post-menu-'+id)
    if(menu.hasClass('hidden')){
        $('.dropdown-post-menu').addClass('hidden') 
        menu.removeClass('hidden')
    } 
    else{
        menu.addClass('hidden')
    }
    event.stopPropagation()
};
