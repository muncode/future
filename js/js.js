$(document).ready(function() {
    $('#comment_create').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'add.php',
            data: $(this).serialize(),
            success: function(response)
            {
                let jsonData = JSON.parse(response);
                if (jsonData.success === 1)
                {
                    location.href = '';
                }
                else
                {
                    alert('Ошибка!');
                }
            }
        });
    });
});