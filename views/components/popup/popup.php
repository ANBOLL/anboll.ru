<div id="<?= $id = $id ?? ""?>" class="popup <? $user ? "" : "is-active"?>" data-id="<?= $id = $id ?? ""?>">
    <div class="offset"></div>
    <div class="popup-wrapper">
        <div class="close">
            <span class="top"></span>
            <span class="bot"></span>
        </div>
        <div class="popup-content">
            <?= $content = $content ?? "" ?>
        </div>
    </div>
</div>