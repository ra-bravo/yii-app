// JavaScript File
$(function(){
    $('#modalButton').click(function() {
        // body...
        $('#modal').modal('show')
            .find('#modalContant')
            .load($(this).attr('value'));
    })
    
});