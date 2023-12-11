<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="/">Night School</a>
    </nav>


    <div id="login">
        <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <strong><?php echo e(Session::get('success')); ?></strong>
        </div>
        <?php endif; ?>
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <?php if(Session::has('error')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('error')); ?>

                        </div>
                        <?php endif; ?>
                        <form id="login-form" class="form" action="<?php echo e(url('/student/user-login')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <h3 class="text-center text-info">Student Login</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info btn-md">Login</button>
                                <a href="<?php echo e(url('student/forgot-password')); ?>">Forgot Password?</a>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="<?php echo e(url('student/register')); ?>" class="text-info">Register here</a>
                                <a href="<?php echo e(url('/teacher/login')); ?>" class="text-info">Teacher panel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('shared.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html><?php /**PATH H:\BreakingGrad\Works\1_SchoolManagementLaravel\xampp\htdocs\NightSchool\resources\views/student/auth/loginStudent.blade.php ENDPATH**/ ?>