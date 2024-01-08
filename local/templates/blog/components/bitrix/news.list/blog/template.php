<?php

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
foreach ($arResult['ITEMS'] as $item) { ?>
    <div class="summary">
        <div class="summary-date"><?= $item['FIELDS']['ACTIVE_FROM'] ?></div>
        <h2 class="summary-title"><a href="<?= $item['FIELDS']['CODE'] ?>/"><?= $item['FIELDS']['NAME'] ?></a></h2>
        <p class="summary-description"><?= $item['FIELDS']['PREVIEW_TEXT']; ?></p>
    </div>
    <?php
}