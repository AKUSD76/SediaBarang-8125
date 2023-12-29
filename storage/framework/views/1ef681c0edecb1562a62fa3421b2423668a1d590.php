<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body id="page-top">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?php echo e(route('index')); ?>">Barang</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('logout')); ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

               <!-- End Navbar -->

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-md btn-success mb-3">TAMBAH
                                BARANG</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NAMA BARANG</th>
                                        <th scope="col">HARGA</th>
                                        <th scope="col">STOK BARANG</th>
                                        <th scope="col">AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = $posts->firstItem() ?>
                                    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($i); ?></td>
                                        <td><?php echo e($post->nama); ?></td>
                                        <td><?php echo e($post->harga); ?></td>
                                        <td><?php echo e($post->stok); ?></td>

                                        <td class="text">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST">
                                                <a href="<?php echo e(route('posts.edit', $post->id)); ?>"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php $i++ ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="alert alert-danger">
                                        Data Post belum Tersedia.
                                    </div>
                                    <?php endif; ?>
                                </tbody>
                            </table>

                            <?php echo e($posts->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <!-- <script>
        //message with toastr
        <?php if(session()->has('success')): ?>
        
            toastr.success('<?php echo e(session('success')); ?>', 'BERHASIL!'); 

        <?php elseif(session()->has('error')): ?>

            toastr.error('<?php echo e(session('error')); ?>', 'GAGAL!'); 
            
        <?php endif; ?>
    </script> -->

</body>

</html>
<?php /**PATH C:\xampp\htdocs\pkl-for-laravel\resources\views/posts/index.blade.php ENDPATH**/ ?>