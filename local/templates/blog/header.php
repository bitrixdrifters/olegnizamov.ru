<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
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

IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php $APPLICATION->ShowHead(); ?>
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <meta charset="UTF-8"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" href="/favicon.ico">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="canonical" href="/posts/a-team-in-search-of-perfect-team/" />-->
<!--    <meta property="og:title" content="The A-Team. В поисках идеальной команды."/>-->
<!--    <meta property="og:type" content="website"/>-->
<!--    <meta property="og:url" content="/posts/a-team-in-search-of-perfect-team/"/>-->
<!--    <meta property="og:image" content="/images/posts/ateam.jpg"/>-->
<!--    <meta name="twitter:card" content="summary"/>-->
<!--    <link rel="preconnect" href="https://fonts.gstatic.com">-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class='page frame page-blog-single'>
<body class='page frame page-home'>
<div id='panel'><? $APPLICATION->ShowPanel(); ?></div>

<?php
$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "header_menu_mobile",
    [
        "ROOT_MENU_TYPE"        => "top",
        "MENU_CACHE_TYPE"       => "A",
        "MENU_CACHE_TIME"       => "36000000",
        "MENU_CACHE_USE_GROUPS" => "N",
        "MENU_CACHE_GET_VARS"   => [
        ],
        "MAX_LEVEL"             => "1",
        "CHILD_MENU_TYPE"       => "left",
        "USE_EXT"               => "Y",
        "DELAY"                 => "N",
        "ALLOW_MULTI_SELECT"    => "N",
        "COMPONENT_TEMPLATE"    => "header_menu_mobile",
    ],
    false
); ?>

<div id="wrapper" class="wrapper">
    <div class='header'>
        <a class="header-logo" href="/"></a>
        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "header_menu",
            [
                "ROOT_MENU_TYPE"        => "top",
                "MENU_CACHE_TYPE"       => "A",
                "MENU_CACHE_TIME"       => "36000000",
                "MENU_CACHE_USE_GROUPS" => "N",
                "MENU_CACHE_GET_VARS"   => [
                ],
                "MAX_LEVEL"             => "1",
                "CHILD_MENU_TYPE"       => "left",
                "USE_EXT"               => "Y",
                "DELAY"                 => "N",
                "ALLOW_MULTI_SELECT"    => "N",
                "COMPONENT_TEMPLATE"    => "header_menu",
            ],
            false
        ); ?>
        <div id="toggle-menu-main-mobile" class="hamburger-trigger">
            <button class="hamburger">Menu</button>
        </div>
    </div>
    <div class="blog">
        <div class="content">
