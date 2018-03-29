<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


?>

<div class="row">
    <? foreach ($arResult as $aItem): ?>
        <div class="col-5">
            <div>
                <?= $aItem['NAME']; ?>
            </div>
            <div>
                Описание: <?= $aItem['DETAIL_TEXT'];?>
            </div>
            <div>
                <?= $aItem['PROPERTY_LIKE_VALUE']; ?>
            </div>
            <a href="">Детальная</a>
        </div>
    <? endforeach; ?>
</div>

