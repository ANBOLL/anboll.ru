<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/x-icon" href="/images/site/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="/style/config.css">
    <link rel="stylesheet" href="/style/reset-style/reset.css">
    <link rel="stylesheet" href="/style/header.css">
    <link rel="stylesheet" href="/style/footer.css">
    <link rel="stylesheet" href="/style/styleHomik.css">
    <?php if(isset($data["style"])) {?>
        <link rel="stylesheet" href="<?=$data["style"] ? $data["style"] : ''?>"> 
    <?php } ?>
    <title>ANBOLL</title>
</head>
<body>
<header>
    <div class="l-container">
        Шапочка
    </div>
</header>
<main>
