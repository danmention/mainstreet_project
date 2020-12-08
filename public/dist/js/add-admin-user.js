jQuery(function() {
    $('#add-admin-user').on('submit', function() {

        let post = 0

        if($('#add-admin-user #firstName').val() === '') {
            $('#add-admin-user #firstName').parent().find('.err').show()
            post = 1
        } else {
            $('#add-admin-user #firstName').parent().find('.err').hide()
        }
        
        if($('#add-admin-user #email').val() === '') {
            $('#add-admin-user #email').parent().find('.err').show()
            post = 1
        } else {
            $('#add-admin-user #email').parent().find('.err').hide()
        }

        if($('#add-admin-user #email').val() === '') {
            $('#add-admin-user #email').parent().find('.err').show()
            post = 1
        } else {
            $('#add-admin-user #email').parent().find('.err').hide()
        }

        if($('#add-admin-user #phone').val() === '') {
            $('#add-admin-user #phone').parent().find('.err').show()
            post = 1
        } else {
            $('#add-admin-user #phone').parent().find('.err').hide()
        }

        if($('#add-admin-user #password').val() === '') {
            $('#add-admin-user #password').parent().find('.err').show()
            post = 1
        } else {
            $('#add-admin-user #password').parent().find('.err').hide()
        }

        if($('#add-admin-user #confirm_password').val() === '') {
            $('#add-admin-user #confirm_password').parent().find('.err').show()
            post = 1
        } else {
            $('#add-admin-user #confirm_password').parent().find('.err').hide()
        }


        if(post === 0) {
            let data = {
                _token: $('input[name="_token"]').val(),
                email: $('#add-admin-user #email').val(),
                first_name: $('#add-admin-user #firstName').val(),
                last_name: $('#add-admin-user #lastName').val(),
                phone: $('#add-admin-user #phone').val(),
                password: $('#add-admin-user #password').val(),
                password_confirmation: $('#add-admin-user #confirm_password').val(),
            }

            $.post($('.url').val() + '/users/add-admin-user', data, function(rst) {
                console.log(rst)

                if(rst.success === true) {
                    $('#add-admin-user #email').val('')
                    $('#add-admin-user #firstName').val('')
                    $('#add-admin-user #lastName').val('')
                    $('#add-admin-user #phone').val('')
                    $('#add-admin-user #password').val('')
                    $('#add-admin-user #confirm_password').val('')

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