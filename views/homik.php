<?php
session_start();
$code = "Index";
include_once("views/header.php");
?>
<div class="l-container">
<div class="container">
        <h1 class="main-title">Кароч ключи для хомяка тута 👇</h1>
        <h1 class="second-title hidden">Немного терпения, ты же веришь в листинг хомяка... 🐹</h1>
        <div class="form-group">
            <label class="gameSelect-label" for="gameSelect">Выбери какую игру будем наебывать:</label>
            <select id="gameSelect">
                <option value="1" selected>Riding Extreme 3D</option>
                <option value="2">Chain Cube 2048</option>
                <option value="3">My Clone Army</option>
                <option value="4">Train Miner</option>
                <option value="5">Merge Away</option>
            </select>
        </div>
        <div class="form-group">
            <label id="keyCountLabel" for="keyCountSelect">Сколька ключей те надо?</label>
            <select id="keyCountSelect">
                <option value="1">Один(</option>
                <option value="2">Два, как в рекламе</option>
                <option value="3">Три, как любит бог</option>
                <option value="4" selected>Четыре, чтоб сразу с кайфом</option>
            </select>
        </div>
        <button id="startBtn">Получить <del>пизды</del> ключ(и)</button>
        <div id="progressContainer" class="hidden">
            <div class="progress-bar">
                <div id="progressBar"></div>
            </div>
            <div id="progressText">0%</div>
            <div id="progressLog">Летс го...</div>
        </div>
        <div id="keyContainer" class="hidden">
            <h3 id="generatedKeysTitle" class="hidden">Ну кароче вот... Чем богаты - тому рады:</h3>
            <div id="keysList"></div>
            <button id="copyAllBtn" class="hidden">Скопировать все ключи разом, по мужЫцки</button>
            <div id="copyStatus" class="hidden">Ура, у тебя получилось!</div>
        </div>
    </div>
</div>
<?php
include_once("views/footer.php");
?>