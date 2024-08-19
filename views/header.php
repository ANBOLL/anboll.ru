<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <link type="image/x-icon" href="/images/site/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="/style/config.css">
    <link rel="stylesheet" href="/style/header.css">
    <link rel="stylesheet" href="/style/footer.css">
    <?php if(isset($data["style"])) {?>
        <link rel="stylesheet" href="<?=$data["style"] ? $data["style"] : ''?>"> 
    <?php } ?>
    <title>ANBOLL</title>
</head>
<body>
<header>
    <div class="l-container">
        <a href="/" class="logo"></a>
    </div>
</header>
<main>
