<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
$this->setFrameMode(true);
?>
<div class="news-list">
	<? if ($arParams["DISPLAY_TOP_PAGER"]) : ?>
		<?= $arResult["NAV_STRING"] ?><br />
	<? endif; ?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

<section class="first_product_couple position-relative" id="first_product_couple">
		<!-- антистресс -->
		<div class="antistress">
			<div class="row m-0">
				<div class="col offset-xl-1 px-0">
					<div class="row m-0">
						<div class="col-12 col-md-5 px-0 order-2 order-md-1">
							<div class="antistress_img_wrap">
								<img src="<?= SITE_TEMPLATE_PATH; ?>/img/antistress.png" alt="два товара вэлкопэт для кошек и собак антистресс" class="antistress_img product_img">
							</div>
							<div class="col-12 col-7 order-1 order-md-2 d-flex d-md-none flex-column justify-content-center align-items-center">
								<p class="antistress_text">
									Содержит витамины группы В и целебный экстракт мелиссы, которые
									обеспечивают снижение уровня стресса и помогают животным стать спокойнее
									и счастливее.
								</p>
								<!-- кнопки -->
								<div class="round_links d-flex justify-content-between">
									<a href="#where_bay" class="round_button">где <br> купить <br><i class="fa-solid fa-chevron-down"></i></a>
									<a href="" class="round_button pt-2">состав <br><i class="fa-solid fa-plus"></i> </a>
								</div>
							</div>
						</div>
						<div class="col col-7 order-1 order-md-2">
							<div class="antistress_title">
								<h1>Антистресс</h1>
								<h3>для кошек и собак</h3>
							</div>
							<p class="antistress_text d-none d-md-block">
								Содержит витамины группы В и целебный экстракт мелиссы, которые
								обеспечивают снижение уровня стресса и помогают животным стать спокойнее
								и счастливее.
							</p>
							<!-- кнопки -->
							<div class="round_links justify-content-between d-none d-md-flex">
								<a href="" class="round_button pt-2">состав <br><i class="fa-solid fa-plus"></i> </a>
								<a href="#where_bay" class="round_button">где <br> купить <br><i class="fa-solid fa-chevron-down"></i></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- почки -->
		<div class="kidney">
			<div class="row m-0 h-100">
				<div class="col offset-xl-1 px-0">
					<div class="row m-0 h-100">

						<div class="col-lg-6 ps-0 h-100 kidney_content d-flex flex-column align-items-end">
							<div class="kidney_title">
								<h1>здоровые почки</h1>
								<h3>для кошек</h3>
							</div>
							<p class="kidney_text">
								Содержит экстракт плодов клюквы, который улучшает состояние почек и
								мочевыводящих путей, поддерживая здоровье мочевыделительной системы у
								кошек.
							</p>
							<div class="round_links d-flex justify-content-between">
								<a href="" class="round_button pt-2">состав <br><i class="fa-solid fa-plus"></i> </a>
								<a href="#where_bay" class="round_button">где <br> купить <br><i class="fa-solid fa-chevron-down"></i></a>
							</div>
						</div>
						<div class="col-lg-6 px-0 h-100 d-flex align-items-center">
							<div class="kidney_img_wrap">
								<img src="<?= SITE_TEMPLATE_PATH; ?>/img/kidney.png" alt="коробка товара вэлкопэт здоровые почки для кошек" class="kidney_img product_img">
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- Модалка  антистресс-->
	<div class="modal fade" id="modalAntistress" tabindex="-1" aria-labelledby="modalAntistressLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl modal-dialog-centered">
			<div class="modal-content h-100">
				<div class="modal-header border-0">
					<h5 class="modal-title" id="modalAntistressLabel">WELCO АНТИСТРЕСС</h5>
					<button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">

					<div class="row m-0">
						<div class="col-5">
							<p class="modal-subtitle" id="modalAntistressLabel">для кошек и собак</p>
							<p class="modalAmount">7шт х 35мл (35г)</p>
							<div class="modalAntistressImgWrap"><img src="<?=SITE_TEMPLATE_PATH;?>/img/modalAntistress.png" alt="изображение упаковки товара велкопэт" class="modal_antistress_img"></div>
							<div class="col-7"></div>
						</div>
						<div class="col-7">
							<div class="modalAntistress_content">
								<div class="modalAntistress_content_composition">
									<div class="modalAntistress_title">
										<h6>Состав</h6>
									</div>
									<div class="modalAntistress_text">
										<p>Молоко и молочные продукты, гидролизат куриного белка, экстракт дрожжей, фруктоолигосахариды, экстракт мелиссы, аминокислоты, клеточные стенки дрожжей (Иммуносан), масло лосося, ксантановая камедь, агар-агар, витамины и минералы, полисахариды амилозы, карбоксиметилцеллюлоза, вода питьевая.</p>
									</div>
								</div>
							</div>
							<div class="modalAntistress_content_table">
								<div class="row">
									<div class="col modalAntistress_left">
										<div class="modalAntistress_title">
											<h6>Добавки</h6>
										</div>
										<table class="">
											<tr>
												<th>Витамины</th>
											</tr>
											<tr>
												<td>Витамин В1</td>
												<td>Не менее 0,15 мг</td>
											</tr>
											<tr>
												<td>Витамин В1</td>
												<td>Не менее 0,15 мг</td>
											</tr>
											<tr>
												<td>Витамин В1</td>
												<td>Не менее 0,15 мг</td>
											</tr>
											<tr>
												<td>Витамин В1</td>
												<td>Не менее 0,15 мг</td>
											</tr>
										</table>
										<table class="micro-table">
											<tr>
												<th>Микроэлементы</th>
											</tr>
											<tr>
												<td>Сульфат меди пентагирдрат</td>
												<td>Не менее 0,035 мг</td>
											</tr>
											<tr>
												<td>Йодит калия</td>
												<td>Не менее 0,035 мг</td>
											</tr>
										</table>
									</div>
									<div class="col-7 modalAntistress_right">
										<div class="modalAntistress_title">
											<h6>Питательная ценность</h6>
										</div>
										<table class="nutrition_value_table">
											<tr>
												<th>На 100г продукта</th>
											</tr>
											<tr>
												<td>Белок</td>
												<td>2.3 г</td>
											</tr>
											<tr>
												<td>Жир</td>
												<td>2.1</td>
											</tr>
											<tr>
												<td>Клетчатка</td>
												<td>0.5 г</td>
											</tr>
											<tr>
												<td>Клетчатка</td>
												<td>0.5 г</td>
											</tr>
										</table>
										<table>
											<tr>
												<th>Энергетическая ценность (100 г): 37 ккал/155 кДж</th>
											</tr>
										</table>
									</div>
									<p class="modalAntistress_bottom_text">
										Неполнорационный корм (лакомство-пребиотик). Не является лекарственным средством.
									</p>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>







	<?/*<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</p>*/?>
<?endforeach;?>

	

	<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?>
		<br /><?= $arResult["NAV_STRING"] ?>
	<? endif; ?>
</div>