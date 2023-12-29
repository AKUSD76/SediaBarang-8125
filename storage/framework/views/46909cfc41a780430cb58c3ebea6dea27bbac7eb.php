<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>login</h1>
        <form action="/posts" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" name="email" value="<?php echo e(Session::get('email')); ?>" class="from-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" name="password" class="from-control">
            </div>
            <div class="mb-3 d-grid">
               <button type="submit" name="submit" class="btn btn-primary">login</button>
            </div>
        </form>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\pkl-for-laravel\resources\views/sesi/index.blade.php ENDPATH**/ ?>