$.ajax({
    type: 'POST',
    data: data,
    beforeSend: function() {
        btn.attr('disabled', true);
        formAlert.removeClass('alert-success alert-danger').empty();
        btn.after(loader);
    },
    success: function(responce) {
        formAlert.fadeIn(300, function() {
            console.log(responce);
        });
    },
    error: function() {
        alert('Error!');
    }
});

return false;