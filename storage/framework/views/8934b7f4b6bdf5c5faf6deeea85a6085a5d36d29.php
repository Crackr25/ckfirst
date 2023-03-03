</html>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link ref="/css/style.css" type="text/css"><link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
        <title>Phone Book</title>

    <body>
        <?php echo $__env->yieldContent('content'); ?>
    </body>
</html><?php /**PATH C:\laragon\www\Pbook\resources\views/layout/app.blade.php ENDPATH**/ ?>