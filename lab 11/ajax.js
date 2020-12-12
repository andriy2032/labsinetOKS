$(document).ready(function () {
    $('#btn1').click(function () {
        $.ajax({
            url: 'lab11.php',
            method: 'POST',
            dataType: 'html',
            data: $('#form1').serialize(),
            success: function (data) {
                $('.message').html(data);
            }
        });
    });
    $('#btn2').click(function () {
        $.ajax({
            url: 'lab11.php',
            method: 'POST',
            dataType: 'html',
            data: $('#form2'),
            success: function (data) {
                $('.message').html(data);
            }
        });
    });
});
