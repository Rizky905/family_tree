$(function () {
    // console.log('test')
    $("form#loginForm").validate({
        ignore: '',
        errorElement: 'span',
        errorClass: 'is-invalid help-block help-block-error text-danger',

        rules: {
            email : {
              required: true,
            },
            password: {
              required: true,
            },
        },

        messages : {
            email: {
                required: "Please input Email"
            },
            password: {
                required: "Please input Password"
            },
        },

        submitHandler: function(form, e) {
            form.submit();
        }
    });

    $("form#formSignUp").validate({
        ignore: '',
        errorElement: 'span',
        errorClass: 'is-invalid help-block help-block-error text-danger',

        rules: {
            name : {
              required: true,
            },
            email : {
              required: true,
            },
            password: {
              required: true,
            },
        },

        messages : {
            name: {
                required: "Please input your name"
            },
            email: {
                required: "Please input your email"
            },
            password: {
                required: "Please input your password"
            },
        },

        submitHandler: function(form, e) {
            form.submit();
        }
    });
})
