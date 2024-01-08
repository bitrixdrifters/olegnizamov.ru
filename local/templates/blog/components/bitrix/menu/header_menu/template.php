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

if (count($arResult) > 0) { ?>
    <div class="menu-main">
        <ul>
            <?php
            foreach ($arResult as $arItem) { ?>
                <li class="menu-item <?php
                echo($APPLICATION->GetCurPage(false) == $arItem['LINK'] ? 'active' : ''); ?>">
                    <a href="<?= $arItem['LINK']; ?>"> <span><?= $arItem['TEXT']; ?></span></a>
                </li>
                <?php
            } ?>
        </ul>
    </div>
    <?php
}
