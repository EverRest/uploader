$(document).ready(function (){
    $('.remove-file').on('click', function (e) {
        var id = $(this).data('id');
        $('#delete').on('click', function () {
            $.ajax({
                url: 'file/delete',
                data: id,
                dataType: json
            });
            $('#delete-close').click();
        });
    });
});
