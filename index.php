<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$APPLICATION->SetTitle(" ");
?>

    <div class="author author-large">
        <img width="50" class="author-image" src="/images/author.png" alt="Олег Низамов"/>
        <span class="author-name">Олег Низамов</span>
        <span class="author-title">Symfony &amp; Go разработчик (редко еще битрикс).</span>
    </div>


    <div class="intro">
        <h1>Пилим код, проектируем системы и пишем об этом в блоге.</h1>
        <div class="intro-content"><p>xxx: zzz - знаешь такого?</p>
            <p>yyy: наполовину битриксоид, наполовину хороший программист. работать с ним можно, обучаемость и понимание
                отличное, мягкий покладистый характер, к гиту приучен))</p>
            <p>xxx: ладно, битриксоида мы вытрясем если что (с)</p>
        </div>
    </div>


<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>