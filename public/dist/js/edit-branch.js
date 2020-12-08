jQuery(function() {
    $('#edit-branch').on('submit', function() {
        let post = 0

        if($('#edit-branch #name').val() === '') {
            $('#edit-branch #name').parent().find('.err').show()
            post = 1
        } else {
            $('#edit-branch #name').parent().find('.err').hide()
        }
        
        if($('#edit-branch #address').val() === '') {
            $('#edit-branch #adress').parent().find('.err').show()
            post = 1
        } else {
            $('#edit-branch #adress').parent().find('.err').hide()
        }


        if(post === 0) {
            let data = {
                _token: $('input[name="_token"]').val(),
                id: $('.id').val(),
                name: $('#edit-branch #name').val(),
                address: $('#edit-branch #address').val()
            }

            $.post($('.url').val() + '/branch/edit', data, function(rst) {
                console.log(rst)

                if(rst.success === true) {
                    $('.alert-success').show()

                    $("html, body").animate({ scrollTop: 0 }, "slow");

                    setTimeout(function() {
                        $('.alert-success').hide()
                    }, 3000)
                }
            })
        }

        return false
    })
})