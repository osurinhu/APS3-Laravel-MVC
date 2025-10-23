<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    
    Categorias

    <form action="/categorias" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="nome" id="nome">
        <input type="submit" value="Inserir">
    </form>
    <ul>
        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($categoria->nome); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html><?php /**PATH /workspaces/APS3-Laravel-MVC/aps/resources/views/categorias.blade.php ENDPATH**/ ?>