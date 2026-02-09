<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Kampus</title>
    
    <?= $this->include('layout/styles'); ?>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <?= $this->include('layout/navbar'); ?>

    <div class="flex-grow">
        <?= $this->renderSection('konten_utama'); ?>
    </div>

    <?= $this->include('layout/footer'); ?>

    <?= $this->include('layout/scripts'); ?>

</body>
</html>