<?php include('head.php'); ?>
<?php include('header.php'); ?>


<div class="content">
<!-- <middle> -->

	

	

<div class="rightbar hiddenes" id="trade_link">


		<div class="settings-url hidden">
			<div class="left">Введите ссылку на обмен</div>
			<div class="right">
				<input type="text" rel="get-trade-link" placeholder="Вставьте ссылку...">
				<input type="submit" id="save-link" value="">
				</div>
		</div>

		<div class="settings-text">Внимание! cделайте ваш инвентарь видимым и открытым для всех, а так-же введите вашу ссылку на обмен.</div>
</div>


	<div class="rightbar" id="rightbar">


		<div class="game-number">Игра #<span class="game-num"></span></div>

		<div class="middle-game">
		<div class="settings-game">
				<div class="button">
					<div class="hollow"></div>
					<div class="sub">
						<div>Настройки звука</div>
						<a href="#" class="sound-link-on">вкл</a>
						<a href="#" class="sound-link-off">выкл</a>
					</div>
				</div>
			</div>
			
			<div class="progress">
				<div class="line" id="pb" style="width: 0%;"><span>&nbsp;</span></div>
				
			</div>
			<div class="timer"><div id="timer">00:00</div></div>
			<div class="sum">
				<div class="percent">Текущий прогресс - <span id="items-count-temps">0</span>%</div>
				<div class="dollar">Общая сумма  - <span id="jackpot-temp">0.00 руб.</span></div>
			</div>
		</div>

		<div class="roulette hiddenes">
			<div class="inbox" style="-moz-transform: translate3d(390px, 0, 0);-ms-transform: translate3d(390px, 0, 0);-o-transform: translate3d(390px, 0, 0);-webkit-transform: translate3d(390px, 0, 0);transform: translate3d(390px, 0, 0); -moz-transition: 13s ease;-o-transition: 13s ease;-webkit-transition: 13s ease;transition: 13s ease; backface-visibility: hidden;">


			</div>
		</div>

		
				
	

		<?php if(isset($_SESSION['steamid'])) {

        ?>	<div class="inform">
			<div class="text"><div>Вы внесли <span id="player-items-count">0</span> из 20 вещей</div>Мин. сумма депозита 10 руб. - <span id="currency"></span> Макс. количество 20 вещей</div>
			<div class="right">
				<div class="chance left">Ваш шанс: <span id="chance-temp">0</span>%</div>
				<a href="/deposit.php" target="_blank" class="add-item left">внести вещи</a>
			</div>
				<?php 

					}?>

	

		 <div class="choice-winner gameend hiddenes">
			<div class="text"><div>Победил игрок: <span id="winner-end">???</span> / Выигрыш: <span class="winner-cost-value">???</span> / Победный билет: <span id="winner-ticket"> ??? </span></div>Выигрыш можно получить в инвентаре Steam</div>			<?php if(isset($_SESSION['steamid'])) {

        ?>	<div class="right">
				<a href="/deposit.php" target="_blank" class="add-item left">внести первым</a>
			</div>			</div>	<?php 

					}?>
		</div>
		
		
<div class="added-short ">
<div class="game-end acceptoffer hiddenes">
 <div class="text"><div><?=$msg['Your_bid_accepted']?></div><?=$msg['Wait_your_bet_is_processed']?></div>
</div>
<div class="game-end maxitem hiddenes">
<div class="text"><div><?=$msg['Your_proposal_has_been_declined_by_the_exchange']?></div><?=$msg['Maximum_Delivered_items_20']?></div>
</div>
<div class="game-end notradelink hiddenes">
<div class="text"><div><?=$msg['Your_proposal_has_been_declined_by_the_exchange']?></div><?=$msg['Enter_a_reference_to_the_exchange_settings']?></div>
</div>
<div class="game-end errortrade hiddenes">
<div class="text"><div><?=$msg['Your_proposal_has_been_declined_by_the_exchange']?></div><?=$msg['The_minimum_rate_of_5_rubles']?></div>
</div>	
<div class="game-end game_end hiddenes">
<div class="text"><div><?=$msg['igra_offnik']?></div><?=$msg['chislo_raunda']?><span id="roundNum">0.0000000000</span></div>
</div>
<div class="game-end game_end hiddenes">
<div class="text"><div><?=$msg['igra_offnik']?></div><?=$msg['win_temssss']?><span id="winner-item"> ??? </span></div>
</div>
<div class="game-end pauses hiddenes">
<div class="text"><div>ПРОБЛЕМЫ СО СТИМОМ</div><span id="winner-item">поэтому мы на некоторое время отключили прием ставок</span></div>
</div>
</div>

<div class="swiper-container">
<div class="swiper-wrapper" style="cursor: -webkit-grab;">
<div ng-transclude="" class="swiper-slide users-add hidden" ></div>
</div>
</div>
<script type="text/javascript">
				var swiper = new Swiper('.swiper-container', {
					pagination: '.swiper-pagination',
					slidesPerView: 3,
					paginationClickable: true,
					spaceBetween: 0
				});
				</script>

<div class="added-short">
<div class="game-end gamepause hiddenes">
<div class="text"><div>Данная игра заканчивается</div>Принимаются последние ставки из очереди в текущую игру</div>		
</div>
<div class="bg-shorts hiddenes" id="game">
</div></div>
<div class="game-start">

<div class="title">Игра началась! Вносите депозиты!</div>
<div class="clear"></div>
<div class="fair">Честная игра</div>

<div class="hash">Хэш раунда: <span id="roundHash">90c9920f8d9dce17ae6d755523f1a635</span></div>

</div>
<!-- </middle> -->
<div class="clear"></div>
</div>
</div>
<div class="scrolltotop" style="display: block;"><div class="scrolltotop__side"></div><div class="scrolltotop__arrow"></div></div>
</body>
</html>