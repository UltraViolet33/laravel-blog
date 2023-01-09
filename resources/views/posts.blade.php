<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Blog</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php foreach ($posts as $post): ?>
    <article>
    <h1>
        <a href="posts/<?=$post->slug?>">
        <?= $post->title ?></a></h1>
    <div>
        <p><?= $post->excerpt ?></p>
    </div>
    </article>
    <?php endforeach;?>
</body>

</html>
