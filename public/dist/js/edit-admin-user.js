jQuery(function() {
    $('#edit-admin-user').on('submit', function() {

        let post = 0

        if($('#edit-admin-user #firstName').val() === '') {
            $('#edit-admin-user #firstName').parent().find('.err').show()
            post = 1
        } else {
            $('#edit-admin-user #firstName').parent().find('.err').hide()
        }
        
        if($('#edit-admin-user #email').val() === '') {
            $('#edit-admin-user #email').parent().find('.err').show()
            post = 1
        } else {
            $('#edit-admin-user #email').parent().find('.err').hide()
        }

        if($('#edit-admin-user #email').val() === '') {
            $('#edit-admin-user #email').parent().find('.err').show()
            post = 1
        } else {
            $('#edit-admin-user #email').parent().find('.err').hide()
        }

        if($('#edit-admin-user #phone').val() === '') {
            $('#edit-admin-user #phone').parent().find('.err').show()
            post = 1
        } else {
            $('#edit-admin-user #phone').parent().find('.err').hide()
        }

        if($('#edit-admin-user #password').val() === '') {
            $('#edit-admin-user #password').parent().find('.err').show()
            post = 1
        } else {
            $('#edit-admin-user #password').parent().find('.err').hide()
        }

        if($('#edit-admin-user #confirm_password').val() === '') {
            $('#edit-admin-user #confirm_password').parent().find('.err').show()
            post = 1
        } else {
            $('#edit-admin-user #confirm_password').parent().find('.err').hide()
        }


        if(post === 0) {
            let data = {
                _token: $('input[name="_token"]').val(),
                id: $('.id').val(),
                email: $('#edit-admin-user #email').val(),
                first_name: $('#edit-admin-user #firstName').val(),
                last_name: $('#edit-admin-user #lastName').val(),
                phone: $('#edit-admin-user #phone').val(),
                password: $('#edit-admin-user #password').val(),
                password_confirmation: $('#edit-admin-user #confirm_password').val(),
            }

            $.post($('.url').val() + '/users/edit-admin-user', data, function(rst) {
                console.log(rst)

                if(rst.success === true) {
                    $('#edit-admin-user #password').val('')
                    $('#edit-admin-user #confirm_password').val('')

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