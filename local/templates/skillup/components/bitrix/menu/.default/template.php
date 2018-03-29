<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

    <?
    foreach($arResult as $arItem):
        if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
            continue;
        ?>
        <?if($arItem["SELECTED"]):?>
            <span class="col-2 nav-item">
                <a href="<?=$arItem["LINK"]?>" class="nav-link active"><?=$arItem["TEXT"]?></a>
            </span>
        <?else:?>
            <span class="col-2 nav-item">
                <a href="<?=$arItem["LINK"]?>" class="nav-link"><?=$arItem["TEXT"]?></a>
            </span>
        <?endif?>

    <?endforeach?>

<?endif?>

