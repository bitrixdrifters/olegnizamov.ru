</div>
</div>
<div class="footer">
    <?php
    $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "bottom_menu",
        [
            "ROOT_MENU_TYPE" => "bottom",
            "MENU_CACHE_TYPE" => "A",
            "MENU_CACHE_TIME" => "36000000",
            "MENU_CACHE_USE_GROUPS" => "N",
            "MENU_CACHE_GET_VARS" => [
            ],
            "MAX_LEVEL" => "1",
            "CHILD_MENU_TYPE" => "left",
            "USE_EXT" => "Y",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "N",
            "COMPONENT_TEMPLATE" => "bottom_menu",
        ],
        false
    ); ?>
</div>
</div>
</body>
</html>

