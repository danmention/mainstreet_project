jQuery(function() {
    $('#add-loan').on('submit', function() {
        let post = 0

        if($('#add-loan #amount').val() === '') {
            $('#add-loan #amount').parent().find('.err').show()
            post = 1
        } else {
            $('#add-loan #amount').parent().find('.err').hide()
        }
        
        if($('#add-loan #duration').val() === '') {
            $('#add-loan #duration').parent().find('.err').show()
            post = 1
        } else {
            $('#add-loan #duration').parent().find('.err').hide()
        }

        if($('#add-loan #product_id').val() === '') {
            $('#add-loan #product_id').parent().find('.err').show()
            post = 1
        } else {
            $('#add-loan #product_id').parent().find('.err').hide()
        }

        if($('#add-loan #customer').val() === '') {
            $('#add-loan #customer').parent().find('.err').show()
            post = 1
        } else {
            $('#add-loan #customer').parent().find('.err').hide()
        }

        if($('#add-loan #desc').val() === '') {
            $('#add-loan #desc').parent().find('.err').show()
            post = 1
        } else {
            $('#add-loan #desc').parent().find('.err').hide()
        }


        if(post === 0) {
            let data = {
                _token: $('input[name="_token"]').val(),
                amount: $('#add-loan #amount').val(),
                duration: $('#add-loan #duration').val(),
                product_id: $('#add-loan #product_id').val(),
                customer_id: $('#add-loan #customer').val(),
                desc: $('#add-loan #desc').val()
            }

            $.post($('.url').val() + '/loans/add', data, function(rst) {
                if(rst.success === true) {
                    $('#add-loan #amount').val('')
                    $('#add-loan #duration').val('')
                    $('#add-loan #customer').prop('selectedIndex', 0)
                    $('#add-loan #product_id').prop('selectedIndex', 0)
                    $('#add-loan #desc').val('')

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