<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<? foreach ($arResult['ITEMS'] as $aItem): ?>
    <div class="row">
        <div class="col-4">
            <a href="<?= $aItem['DETAIL_PAGE_URL']; ?>"
               class="">
                <img src="<?= $aItem['DETAIL_PICTURE']['src']; ?>">
            </a>
            <div>
                <?= $aItem['AUTHOR']; ?>
            </div>
        </div>
    </div>
<? endforeach; ?>
