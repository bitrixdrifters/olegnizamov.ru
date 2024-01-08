<?php
if (count($arResult) > 0) { ?>
    <div class="footer-social">
        <?php
        foreach ($arResult as $arItem) { ?>
            <span class="social-icon social-icon-<?= $arItem['TEXT']; ?>">
                <a href="<?= $arItem['LINK']; ?>" title="<?= $arItem['TEXT']; ?>" target="_blank" rel="noopener">
                  <img src="/images/social/<?= $arItem['TEXT']; ?>.svg" width="24" height="24" alt="<?= $arItem['TEXT']; ?>"/>
                </a>
             </span>
            <?php
        } ?>
    </div>
    <?php
}