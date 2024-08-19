<?php
session_start();
$code = "Index";
$title_meta = "Hamster Kombat";
$style_data = [
    "/homik/style.css",
];

$script_data = [
    "/homik/scriptHomik.js",
    "/homik/scriptSelect.js",
];
include_once("views/header.php");
?>
<div class="l-container">
    <div class="container">
        <h1 class="main-title">Кароч, ключи для хомяка тута 👇</h1>
        <h1 class="second-title hidden">Немного терпения, ты же веришь в листинг хомяка... 🐹</h1>
        <div class="form-group">
            <label class="gameSelect-label" for="gameSelect">Выбери игру для генерации ключей:</label>
            <div class="custom-select" >
                <select id="gameSelect">
                    <option value="1">Bike Ride 3D</option>
                    <option value="2">Chain Cube 2048</option>
                    <option value="3">My Clone Army</option>
                    <option value="4">Train Miner</option>
                    <option value="5">Merge Away</option>
                    <option value="6">Twerk Race <sup>(new)</sup></option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label id="keyCountLabel" for="keyCountSelect">Сколька ключей надо?</label>
            <div class="custom-select" >
                <select id="keyCountSelect">
                    <option value="1">Один(</option>
                    <option value="2">Два, как в рекламе</option>
                    <option value="3">Три, как любит бог</option>
                    <option value="4">Четыре, чтоб сразу с кайфом</option>
                </select>
            </div>
        </div>
        <div class="c-button" id="startBtn">Получить ключ(и)</div>
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
            <button id="copyAllBtn" class="c-button hidden">Скопировать все ключи разом, по мужЫцки</button>
            <div id="copyStatus" class="hidden">Ура, у тебя получилось!</div>
        </div>
    </div>
</div>
<?php
include_once("views/footer.php");
?>