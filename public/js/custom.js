$(document).ready(function (){

    /*Store file*/
    $('.store-file').on('click', function (e) {
        e.preventDefault();
        var data = {};
        $('#store').find('.file-content').empty()
        $('#store').find('.file-name').empty()
        data.id = $(this).data('id');
        data.ext = $(this).data('ext');
        data.name = $(this).parent().parent().find('.file-name').text();

        if (data.ext == 'jpg' || data.ext == 'png' || data.ext == 'gif' || data.ext == 'jpeg') {
            $('#store').find('.file-name').empty().text(data.name);
            var img_src =  'uploads/' + data.name;
            $('#store').find('.file-content').append("<img class='file-img' src='" + getCookie('base_url') + img_src + "' alt=''/>");
        } else {
            $.ajax({
                url: 'file/read',
                type: 'POST',
                data: data,
                success: function (response) {
                    $('#store').find('.file-name').empty().text(data.name);
                    var store_field = "<textarea id='file-store' class='edit-field form-control' rows='10' autofocus disabled>" + response + "</textarea>";
                    $('#store').find('.file-content').empty().append(store_field);
                }
            });
        }

    });

    /*Removing file*/
    $('.remove-file').on('click', function (e) {
        e.preventDefault();
        var data = {};

        data.id= $(this).data('id');
        data.name = $(this).data('name');

        $('#delete-btn').on('click', function () {
            $.ajax({
                url: 'file/delete',
                type: 'POST',
                data: data,
                success: function () {
                    window.location.reload();
                    $('#delete-close').click();
                },
            });
        });
    });

    /*Editing file*/
    $('.edit-file').on('click', function (e) {
        $('#edit').find('#content').empty();
        $('#edit-btn').addClass('hidden');
        e.preventDefault();
        var data = {};

        data.id = $(this).data('id');
        data.ext = $(this).data('ext');
        data.name = $(this).parent().parent().find('.file-name').text();

        if (data.ext == 'jpg' || data.ext == 'png' || data.ext == 'gif' || data.ext == 'jpeg') {
            // var img_src =  getCookie('base_url') + 'uploads/' + data.name;
            // $('#edit').find('#content').append("<img class='file-img' src='" + img_src + "' alt=''/>");
            $('#edit').find('#content').text('Ви не можете редагувати цей файл! Він не є тестовим.');
        } else {
            $.ajax({
                url: 'file/read',
                type: 'POST',
                data: data,
                success: function (response) {
                    console.log(response);
                    var edit_field = "<textarea id='file-edit' class='edit-field form-control' rows='10' autofocus>" + response + "</textarea>";
                    $('#edit').find('#content').empty().append(edit_field);
                    $('#edit-btn').removeClass('hidden');

                    $('#edit-btn').on('click', function () {
                        data.text = $('#file-edit').val();
                        $('#content').find('#file-edit').remove();
                        $.ajax({
                            url: 'file/save',
                            type: 'POST',
                            data: data,
                            success: function (response) {
                                console.log(response);
                                $('.close').click();
                            }
                        });
                    });
                }
            });
        }
    });

});

function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}
