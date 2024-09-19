<?php
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
        <h1>Ты знаешь что тут</h1>
        <div class="form-group">
            <label id="gameSelectLabel" for="gameSelect">Выбери игру</label>
            <select id="gameSelect">
                <option value="1">ZooPolis</option>
                <option value="2">Chain Cube 2048</option>
                <option value="3">Fluff Crusade (new)</option>
                <option value="4">Train Miner</option>
                <option value="5">Merge Away </option>
                <option value="6">Twerk Race</option>
                <option value="7">Polysphere</option>
                <option value="8">Mow and Trim</option>
                <option value="9">Tile Trio </option>
                <option value="10">Stone Age </option>
                <option value="11">Bouncemasters </option>
                <option value="12">Hide Ball </option>
                <option value="13">Pin Out Master </option>
                <option value="14">Count Masters </option>
                <option value="15">Infected Frontier (NEW) </option>
                <option value="16">Among Water (NEW) </option>
                <option value="17">Factory World (NEW) </option>
            </select>
        </div>
        
        <div class="form-group">
            <label id="keyCountLabel" for="keyCountSelect">Сколько ключей:</label>
            <select id="keyCountSelect">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
        <button class="c-button" id="startBtn" style="margin: 0 auto 30px;">Получить ключи</button>
        
        <div id="progressContainer" class="hidden">
            <div class="progress-bar">
                <div id="progressBar"></div>
            </div>
            <div id="progressText">0%</div>
            <div id="progressLog">Понеслось...</div>
            <div id="countdownContainer">
            <p>Следующее шаг через: <span id="countdownTimer"></span> секунд</p>
            </div>
        </div>
        <div id="keyContainer" class="hidden">
            <h3 id="generatedKeysTitle" class="hidden">Возьми же их:</h3>
            <div id="keysList"></div>
            <button id="copyAllBtn" class="hidden">Скопировать все</button>
            <div id="copyStatus" class="hidden">Скопировано!</div>
        </div>

        <label>
            <input type="checkbox" id="logCheckbox"> Показать логи (для тех кто шарит)
        </label>
        <textarea id="logArea" rows="3" readonly style="height: 100px;width: 100%; resize: none; font-size: 12px; display: none;"></textarea>
    </div>
</div>
<?php
include_once("views/footer.php");
?>