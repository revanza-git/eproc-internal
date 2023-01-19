<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aplikasi Sistem Kelogistikan</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/styles/normalize.css'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url('assets/font/font-awesome/css/font-awesome.min.css'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url('assets/styles/base.css'); ?>" type="text/css" media="screen" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="loginPanel block">
                <div class="panel">
                   
                    <div class="panel-content">
                        <div class="contentForm">
                            <div class="form" id="login-form"> </div>
                        </div>
                        <div class="form-group btn-group"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var base_url = "<?php echo base_url()?>";
    var site_url = "<?php echo site_url()?>";
</script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.imask.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/form.js');?>"></script>
<script type="text/javascript">
    $(document).ready(function(e) {
        var data = $('.loginPanel .form').form({
            url: '<?php echo site_url('main/check'); ?>',
            form: [{
                field: 'username',
                type: 'text',
                icon: 'fa fa-user',
                placeholder: 'Username'
            }, {
                field: 'password',
                type: 'password',
                icon: 'fa fa-key',
                placeholder: 'Password'
            }],
            button: [{
                type: 'submit',
                label: 'LOGIN',
                field: 'submit',
                class: 'buttonBlock'
            }],
            onError: function(xhr) {
                this.errorMessage = xhr.message;
            },
            onSuccess: function(xhr) {
                this.successMessage = xhr.message;
                window.location = xhr.url;
            }
        });
    })
</script>

</html>