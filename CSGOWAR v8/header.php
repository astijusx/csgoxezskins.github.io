<?php
	if(isset($_SESSION["steamid"])) {

include_once('steamauth/userInfo.php');}
?>
<audio id="bet1-sound" src="/sounds/Stavka-1.mp3" preload="auto"></audio>
<audio id="bet2-sound" src="/sounds/Stavka-2.mp3" preload="auto"></audio>
<audio id="bet3-sound" src="/sounds/Stavka-3.mp3" preload="auto"></audio>
<audio id="start-game-sound" src="/sounds/start-game.mp3" preload="auto"></audio>
<audio id="rulette-sound" src="/sounds/rulette.wav" preload="auto"></audio>
<audio id="rulette-end" src="/sounds/5.mp3" preload="auto"></audio>
<audio id="click-sound-1" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-2" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-3" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-4" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-5" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-6" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-7" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-8" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-9" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="click-sound-10" src="/sounds/click.mp3" preload="auto"></audio>
<audio id="rulet" src="/sounds/rulet.mp3" preload="auto"></audio>

<center><header>

	<div class="top">
		<div class="width">

			<a href="/" class="logotype left"></a>
				<ul class="menu">
				<li><a href="/">Главная</a></li>
				<li><a href="/top.php">Топ</a></li>
				<li><a href="/history.php">История</a></li>
				<li><a href="/about.php">О Сайте</a></li>
				<li><a href="https://vk.com/igaming">Группа Вконтакте</a></li> 
									    
		</div>

								<?php if(!isset($_SESSION['steamid'])) {

        ?>	
	<a href="logger.php?login" class="login login-link right">Войти на сайт</a>
			
					 
<?php } else { 

						include ('steamauth/userInfo.php');
						?>
						
						<div class="profile" style="display:none;">

							<?php echo "<img src=\"".$steamprofile['avatarfull']."\" class=\"avatar\">";

							echo "<div class=\"nickname\">". $steamprofile['personaname'] ."</div>";

							echo "<div class=\"logout\"><a href=\"steamauth/logout.php\">".$msg['my_out']."</a></div>";?>

							<div class="getlink"><a target="_blank" href="http://steamcommunity.com/id/me/tradeoffers/privacy#trade_offer_access_url">Получить ссылку на обмен</a></div>

						</div>
			
				<div class="profile">
				<div class="avatar"><img src="<?php echo $steamprofile['avatarfull'];  ?>" alt="" title="" /></div>
				<ul>
					<li><span><?php echo $steamprofile['personaname'];  ?></span><a href="/steamauth/logout.php">выйти</a></li>
					<li><a href="/myprofile.php"></a><span></span><a href="/mysettings.php">настройки</a></li>
				</ul>
			</div>			
			
						<div hidden id="steamtoken"><?php				
						function generateRandomString($length = 10) {
							$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
							$charactersLength = strlen($characters);
							$randomString = '';
							for ($i = 0; $i < $length; $i++) {
								$randomString .= $characters[rand(0, $charactersLength - 1)];
							}
							return $randomString;
						}
						$rstr = generateRandomString(32);
						$m = new MongoClient("mongodb://localhost:27017");
						$db = $m->admin;
						$collection = $db->auth;
						$document = array( "userid" => $_SESSION['steamid'] );
						$collection->remove($document);
						$document = array( "userid" => $_SESSION['steamid'], "token" => $rstr );
						$collection->insert($document);
						echo $rstr;
						?></div>

					
						

						<div hidden id="steamid"><?php echo $steamprofile['steamid'];?></div>
						
						

						

						<?php 

					}?>
			

		</div>
	</div>

	<div class="clear"></div>

</header>
<div class="main-box">
			<div class="inform">
				<div class="block">Чем больше сумма всех поставленных Вами предметов, тем выше Ваш шанс на победу.</div>
				<div class="block">Минимальный депозит - 15 предметов. Минимальная сумма депозита - 10 руб.</div>
				<div class="block">Добавь к своему нику в Steam <span>UPSKINS.COM</span> и получи бонус к выйгрышу +5% и VIP.</div>
			</div>
		
			<div class="last-winner">
				<div class="title">Последний победитель</div>
				<div class="avatar" id="winner-avatar"><a href="http://storegamer.ru" target="_blank"><img src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/7c/7c8bfd41db0ee477f37daccaa5d661e65020592d_full.jpg" width="110" height="110" alt=""></a></div>
				<ul>
					<li id="winner-name"><div target="_blank">STOREGAMER.RU</div></li>
					<li>Выигрыш: <span id="winner-money">Загрузка...</span></li>
					<li>Шанс: <span id="winner-chance">Загрузка..</span></li>
				</ul>
			</div>
<div class="action">
<div class="picture"><img src="http://steamcommunity-a.akamaihd.net/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhz2v_Nfz5H_uO1gb-Gw_alfqjuk2dU78R_ntbN_Iv9nGu4qgE7NnfyddXHIAY-Z1jW_lm-yO--1pO_vsmcz3ow7HQl53-PmETjiBBMa-Nrm7XAHnr9YjkW/360fx360f" alt="" title=""></div>
<div class="right">
<div class="title">STOREGAMER.RU</div>
<div class="name">Разыгрываемый предмет: <br>На данный момент нечего</div>
</div>
<div class="clear"></div>
<div class="text">На время проведения розыгрыша необходимо, чтобы в вашем нике было название нашего сайта STOREGAMER.RU</div>
<a href="http://vk.com/storegamer13">Подробнее</a>
</div>


		</div>

