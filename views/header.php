<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <link type="image/x-icon" href="/public/images/site/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="/style/config.css">
    <link rel="stylesheet" href="/style/header.css">
    <link rel="stylesheet" href="/style/footer.css">
    <script src="/script/header/script.js"></script>
    <script src="/script/footer/script.js"></script>
    <?php if(isset($data["style"])) {?>
    <link rel="stylesheet" href="<?=$data["style"] ? $data["style"] : ''?>">
    <?php } ?>
    <?php 
        $offset = $offset ?? true;
        $script_data = $script_data ?? "";
        $style_data = $style_data ?? "";
        $component_data = $component_data ?? "";
        
        if($style_data !== "") {
            foreach ($style_data as $value_style) {
                echo "<link rel=\"stylesheet\" href=\"/style" . $value_style . "\">";
            }
        }
        if($script_data !== "") {
            foreach ($script_data as $value_script) {
                echo "<script src=\"/script" . $value_script . "\"></script>";
            }
        }
        if($component_data !== "") {
            foreach ($component_data as $value_component) {
                echo "<script src=\"/views/components/" . $value_component . "/" . $value_component . ".js" . "\"></script>";
                echo "<link rel=\"stylesheet\" href=\"/views/components/" . $value_component . "/" . $value_component . ".css" . "\">";
            }
        }
    ?>
    <title><?= $title_meta = $title_meta ?? "ANBOLL" ?></title>
</head>

<body>
    <header class="<?= $offset ? 'offset' : ''?>">
        <div class="header-wrapper">
            <div class="header-content">
                <div class="l-container">
                    <?php if ($_SERVER['REQUEST_URI'] != '/') {?>
                        <a href="/" class="logo-link"></a>
                    <?php } else {?>
                        <div href="/" class="logo"></div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </header>
    <main>