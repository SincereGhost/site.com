<html lang="ru-RU"><head>

	<meta charset="UTF-8">
	<title>
		Обменный пункт электронных валют NixTrade — Обмен, вывод, пополнение и оплата электронных и крипто валют.		
	</title>
			
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="dns-prefetch" href="//s.w.org">
	<link rel="stylesheet" id="theme style-css" href="/css/main.css" type="text/css" media="all">
	<link rel="stylesheet" id="open-sans-css" href="http://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C700italic%2C400%2C300%2C600%2C700&amp;subset=latin%2Ccyrillic-ext%2Ccyrillic&amp;ver=1.0" type="text/css" media="all">
<script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/watch.js"></script>
<script type="text/javascript" async="" src="http://static.siteheart.com/widget/shembed/830528/ru/20170820195614/20170820195614/widget.js"></script>
<script async="" src="//www.google-analytics.com/analytics.js"></script>
<script type="text/javascript" src="http://site.com/wp-content/plugins/jquery.min.js"></script>
<script type="text/javascript" async="" src="http://widget.siteheart.com/widget/sh/830528/ru/widget.js"></script>
<script type="text/javascript" src="http://site.com/wp-content/plugins/jquery-ui/script.min.js"></script>
<script type="text/javascript" src="http://site.com/wp-content/plugins/jquery.form.js"></script>
<script type="text/javascript" src="http://site.com/wp-content/plugins/jcook.js"></script>
<script type="text/javascript" src="http://site.com/wp-content/themes/js/site.js"></script>
<script type="text/javascript" src="http://site.com/wp-content/themes/js/jquery-select.js"></script>
<script type="text/javascript" src="http://site.com/wp-content/premiumjs.js?lang=ru&amp;ver=1.4"></script>
<script type="text/javascript">
$(function(){
   $("#send").click(function(){
      var author = $("#author").val();
      var message = $("#message").val();
      $.ajax({
         type: "POST",
         url: "sendMessage.php",
         data: {"author": author, "message": message},
         cache: false,
         success: function(response){
             var messageResp = new Array('Ваше сообщение отправлено','Сообщение не отправлено Ошибка базы данных','Нельзя отправлять пустые сообщения');
             var resultStat = messageResp[Number(response)];
             if(response == 0){
                $("#author").val("");
                $("#message").val("");
             }
             $("#resp").text(resultStat).show().delay(1500).fadeOut(800);
                                                               
                                               }
          });
          return false;
                                                               
    });
});
</script>
</head>	
	
	
		
	



	
	

	
	<!-- top menu -->
	<div class="tophead_wrap">
		<div class="tophead_ins">
			<div class="tophead">
				<div class="logoblock">
					<div class="logoblock_ins"><a href="http://site.com">NixTrade</a>							
					</div>
				</div>
				
				<div class="topmenu">
					<ul id="menu-verhnee-menyu" class="tmenu js_menu">
<li id="menu-item-30" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4 current_page_item  first_menu_li menu-item-30"><a href="http://site.com">
	<span>Главная</span></a></li>
<li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33"><a href="http://site.com/rules.html">
	<span>Правила</span></a></li>
<li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33"><a href="http://site.com/reviews.html">
	<span>Отзывы</span></a></li>
<li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34"><a href="http://site.com/rates.html">
	<span>Курсы</span></a></li>
<li id="menu-item-31" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31"><a href="http://site.com/contacts.html">
	<span>Контакты</span></a></li>

					</ul>

					<div class="clear"></div>

				</div>
				<div class="topmenuright">
					<ul id="menu-verhnee-menyu" class="tmenu js_menu">
<li id="menu-item-registr1" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-registr1"><a href="http://site.com/authorization.html">
	<span>Вход</span></a></li>
<li id="menu-item-registr2" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-registr2"><a href="http://site.com/registr.html">
	<span>Регистрация</span></a></li>
					</ul>
					<div class="clear"></div> 
					</div>
			</div>
		</div>
	</div>
	<!-- end top menu -->
	
	<div class="wrapper">

<div class="home_text_wrap">
	<!--<div class="home_gray_blick"></div>-->
	<div class="home_text_ins">
		<div class="home_text_block">
			<div class="home_text_title">Уважаемый клиент, добро пожаловать на сайт обменного пункта Nix-Trade.com!</div>
			<div class="home_text_div">
				<div class="text">
					<p>Nix-Trade — это сервис для тех, кто хочет выгодно и безопасно обменять одну электронную валюту на другую. Благодаря ему вы всегда сможете произвести обмен Perfect Money, Neteller, Bitcoin, Litecoin, Monero, Dash, Advanced Cash, MoneyPolo, OkPay, Payeer, Payza, Solid Trust Pay и Яндекс Денег.
					</p>
					<div class="clear"></div>
				</div>
			</div>
		</div>	
	</div>
</div>	

<div class="homepage_wrap">

<div class="xchange_table_wrap">
	
	<div class="xchange_type_table">
		<div class="xchange_type_table_ins">	
			<div class="xtt_icon_wrap">
				<div class="xtt_left_col_icon">
				
					<div class="xtt_icon active js_icon_left" data-type="0" style="">
						<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>Все</div>
						</div>
						<div class="xtt_icon js_icon_left js_icon_left_BTC" style="" data-type="BTC">
							<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>BTC</div>
						</div>

						<div class="xtt_icon js_icon_left js_icon_left_USD" style="" data-type="USD">
							<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>USD</div>
						</div>
						<div class="xtt_icon js_icon_left js_icon_left_RUB" style="" data-type="RUB">
							<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>RUB</div>
						</div>

						<div class="xtt_icon js_icon_left js_icon_left_DASH" style="display: none;" data-type="DASH">
							<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>DASH</div>
						</div>

						<div class="xtt_icon js_icon_left js_icon_left_ETH" style="" data-type="ETH">
							<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>ETH</div>
						</div>

						<div class="xtt_icon js_icon_left js_icon_left_UAH" style="" data-type="UAH">
							<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>UAH</div>
						</div>

						<div class="xtt_icon js_icon_left js_icon_left_LTC" style="display: none;" data-type="LTC">
							<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>LTC</div>
						</div>

						<div class="xtt_icon js_icon_left js_icon_left_ZEC" style="" data-type="ZEC">
							<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>ZEC</div>
						</div>

					<div class="clear"></div>
				</div>

				<div class="xtt_right_col_icon">

					<div class="xtt_icon active js_icon_right" data-type="0" style="">
							<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>Все</div>
					</div>

						<div class="xtt_icon js_icon_right js_icon_right_BTC" style="display: none;" data-type="BTC">
							<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>BTC</div>
						</div>
					
						<div class="xtt_icon js_icon_right js_icon_right_USD" style="display: none;" data-type="USD">
							<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>USD</div>
						</div>

						<div class="xtt_icon js_icon_right js_icon_right_RUB" style="" data-type="RUB">
							<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>RUB</div>
						</div>

						<div class="xtt_icon js_icon_right js_icon_right_DASH" style="display: none;" data-type="DASH">
							<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>DASH</div>
						</div>

						<div class="xtt_icon js_icon_right js_icon_right_ETH" style="display: none;" data-type="ETH">
							<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>ETH</div>
						</div>

						<div class="xtt_icon js_icon_right js_icon_right_UAH" style="" data-type="UAH">
							<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>UAH</div>
						</div>

						<div class="xtt_icon js_icon_right js_icon_right_LTC" style="display: none;" data-type="LTC">
							<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>LTC</div>
						</div>

						<div class="xtt_icon js_icon_right js_icon_right_ZEC" style="display: none;" data-type="ZEC">
							<div class="xtt_icon_ins">
							<div class="xtt_icon_abs"></div>ZEC</div>
						</div>

					<div class="clear">
						
					</div>
				</div>
					<div class="clear"></div>
			</div>
			<div class="xtt_table_wrap">
				<div class="xtt_table_title_wrap">
					<div class="xtt_left_col_title">
						<div class="xtt_table_title1">
							<span>Вы отдаете</span>
						</div>
					</div>
					<div class="xtt_right_col_title">
						<div class="xtt_table_title2">
							<span>Вы получаете</span>
						</div>
						<div class="xtt_table_title3">
							<span>Резерв</span>
						</div>
							<div class="clear"></div>
					</div>
						<div class="clear"></div>
				</div>
				<div class="xtt_table_body_wrap">
					<div class="xtt_html_abs"></div>
						<div class="xtt_left_col_table">
										<!-- one item -->
										<div class="js_item_left js_item_left_ZEC  " data-id="28" data-type="ZEC">
											<div class="xtt_one_line_left">
										<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
												<div class="xtt_one_line_ico_left"> 
													<div class="xtt_change_ico" style="background: url(/img/valute/zcash.jpg) no-repeat center center;"></div>
												</div>
												<div class="xtt_one_line_name_left">
													<div class="xtt_one_line_name">
														Zcash ZEC
													</div>
												</div>
												
												<div class="xtt_one_line_curs_left">
													<div class="xtt_one_line_curs">
														100
													</div>	
												</div>												
												
												<div class="clear"></div>
											</div>	
										</div>
										<!-- end one item -->
										
										<!-- one item -->
										<div class="js_item_left js_item_left_RUB  " data-id="17" data-type="RUB">
											<div class="xtt_one_line_left">
										<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
												<div class="xtt_one_line_ico_left"> 
													<div class="xtt_change_ico" style="background: url(/img/valute/Sberbank.png) no-repeat center center;"></div>
												</div>
												<div class="xtt_one_line_name_left">
													<div class="xtt_one_line_name">
														Сбербанк RUB
													</div>
												</div>
												
												<div class="xtt_one_line_curs_left">
													<div class="xtt_one_line_curs">
														100
													</div>	
												</div>												
												
												<div class="clear"></div>
											</div>	
										</div>
										<!-- end one item -->
										
										<!-- one item -->
										<div class="js_item_left js_item_left_BTC  " data-id="11" data-type="BTC">
											<div class="xtt_one_line_left">
										<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
												<div class="xtt_one_line_ico_left"> 
													<div class="xtt_change_ico" style="background: url(/img/valute/Bitcoin.png) no-repeat center center;"></div>
												</div>
												<div class="xtt_one_line_name_left">
													<div class="xtt_one_line_name">
														Bitcoin BTC
													</div>
												</div>
												
												<div class="xtt_one_line_curs_left">
													<div class="xtt_one_line_curs">
														100
													</div>	
												</div>												
												
												<div class="clear"></div>
											</div>	
										</div>
										<!-- end one item -->
										
										<!-- one item -->
										<div class="js_item_left js_item_left_ETH  active" data-id="13" data-type="ETH">
											<div class="xtt_one_line_left">
										<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
												<div class="xtt_one_line_ico_left"> 
													<div class="xtt_change_ico" style="background: url(/img/valute/Ethereum.png) no-repeat center center;"></div>
												</div>
												<div class="xtt_one_line_name_left">
													<div class="xtt_one_line_name">
														Ethereum ETH
													</div>
												</div>
												
												<div class="xtt_one_line_curs_left">
													<div class="xtt_one_line_curs">
														100
													</div>	
												</div>												
												
												<div class="clear"></div>
											</div>	
										</div>
										<!-- end one item -->
										
										<!-- one item -->
										<div class="js_item_left js_item_left_RUB  " data-id="12" data-type="RUB">
											<div class="xtt_one_line_left">
										<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
												<div class="xtt_one_line_ico_left"> 
													<div class="xtt_change_ico" style="background: url(/img/valute/Qiwi.png) no-repeat center center;"></div>
												</div>
												<div class="xtt_one_line_name_left">
													<div class="xtt_one_line_name">
														Qiwi RUB
													</div>
												</div>
												
												<div class="xtt_one_line_curs_left">
													<div class="xtt_one_line_curs">
														100
													</div>	
												</div>												
												
												<div class="clear"></div>
											</div>	
										</div>
										<!-- end one item -->
										
										<!-- one item -->
										<div class="js_item_left js_item_left_UAH  " data-id="5" data-type="UAH">
											<div class="xtt_one_line_left">
										<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
												<div class="xtt_one_line_ico_left"> 
													<div class="xtt_change_ico" style="background: url(/img/valute/Privatbank.png) no-repeat center center;"></div>
												</div>
												<div class="xtt_one_line_name_left">
													<div class="xtt_one_line_name">
														Приват24 UAH
													</div>
												</div>
												
												<div class="xtt_one_line_curs_left">
													<div class="xtt_one_line_curs">
														100
													</div>	
												</div>												
												
												<div class="clear"></div>
											</div>	
										</div>
										<!-- end one item -->
										
										<!-- one item -->
										<div class="js_item_left js_item_left_USD  " data-id="26" data-type="USD">
											<div class="xtt_one_line_left">
										<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
												<div class="xtt_one_line_ico_left"> 
													<div class="xtt_change_ico" style="background: url(/img/valute/tether.png) no-repeat center center;"></div>
												</div>
												<div class="xtt_one_line_name_left">
													<div class="xtt_one_line_name">
														Tether USD
													</div>
												</div>
												
												<div class="xtt_one_line_curs_left">
													<div class="xtt_one_line_curs">
														1
													</div>	
												</div>												
												
												<div class="clear"></div>
											</div>	
										</div>
										<!-- end one item -->
										
						</div>		
						<div class="xtt_right_col_table">
						
										<!-- tab currency -->
										<div class="xtt_line_tab js_line_tab" id="js_tabnaps_28">
													<!-- one item -->
													<a href="http://zanachka-pay.com/exchange_ZEC_to_SBERRUB/" class="js_exchange_link js_item_right js_item_right_RUB" data-type="RUB" data-naps="115">
														<div class="xtt_one_line_right">
													<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
															<div class="xtt_one_line_ico_right"> 
																<div class="xtt_change_ico" style="background: url(/img/valute/Sberbank.png) no-repeat center center;"></div>
															</div>															
															
															<div class="xtt_one_line_name_right">
																<div class="xtt_one_line_name">
																	Сбербанк RUB
																</div>
															</div>														
															
															<div class="xtt_one_line_curs_right">
																<div class="xtt_one_line_curs">
																	18 134.411
																</div>	
															</div>															
															
															<div class="xtt_one_line_reserv_right">
																<div class="xtt_one_line_reserv">
																	54 038.1915
																</div>	
															</div>															
															
		<div class="xtt_one_line_rez js_reserv" data-id="115" data-title="Zcash ZEC-Сбербанк RUB">
			<div class="xtt_one_line_rez_ins">
				<span>Не хватает?</span>
			</div>
		</div>



																
				
															<div class="clear"></div>
														</div>	
													</a>
													<!-- end one item -->											
													
													<!-- one item -->
													<a href="http://zanachka-pay.com/exchange_ZEC_to_P24UAH/" class="js_exchange_link js_item_right js_item_right_UAH" data-type="UAH" data-naps="117">
														<div class="xtt_one_line_right">
													<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
															<div class="xtt_one_line_ico_right"> 
																<div class="xtt_change_ico" style="background: url(/img/Privatbank.png) no-repeat center center;"></div>
															</div>															
															
															<div class="xtt_one_line_name_right">
																<div class="xtt_one_line_name">
																	Приват24 UAH
																</div>
															</div>														
															
															<div class="xtt_one_line_curs_right">
																<div class="xtt_one_line_curs">
																	7 700.0044
																</div>	
															</div>															
															
															<div class="xtt_one_line_reserv_right">
																<div class="xtt_one_line_reserv">
																	350 692.6348
																</div>	
															</div>															
															
		<div class="xtt_one_line_rez js_reserv" data-id="117" data-title="Zcash ZEC-Приват24 UAH">
			<div class="xtt_one_line_rez_ins">
				<span>Не хватает?</span>
			</div>
		</div>														
				
															<div class="clear"></div>
														</div>	
													</a>
													<!-- end one item -->											
													
										</div>
										<!-- end tab currency -->										
										
										<!-- tab currency -->
										<div class="xtt_line_tab js_line_tab" id="js_tabnaps_17">
													<!-- one item -->
													<a href="http://zanachka-pay.com/exchange_SBERRUB_to_P24UAH/" class="js_exchange_link js_item_right js_item_right_UAH" data-type="UAH" data-naps="47">
														<div class="xtt_one_line_right">
													<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
															<div class="xtt_one_line_ico_right"> 
																<div class="xtt_change_ico" style="background: url(/img/valute/Privatbank.png) no-repeat center center;"></div>
															</div>															
															
															<div class="xtt_one_line_name_right">
																<div class="xtt_one_line_name">
																	Приват24 UAH
																</div>
															</div>														
															
															<div class="xtt_one_line_curs_right">
																<div class="xtt_one_line_curs">
																	431.2204
																</div>	
															</div>															
															
															<div class="xtt_one_line_reserv_right">
																<div class="xtt_one_line_reserv">
																	350 692.6348
																</div>	
															</div>															
															
		<div class="xtt_one_line_rez js_reserv" data-id="47" data-title="Сбербанк RUB-Приват24 UAH">
			<div class="xtt_one_line_rez_ins">
				<span>Не хватает?</span>
			</div>
		</div>														
				
															<div class="clear"></div>
														</div>	
													</a>
													<!-- end one item -->											
													
													<!-- one item -->
													<a href="http://zanachka-pay.com/exchange_SBERRUB_to_BTC/" class="js_exchange_link js_item_right js_item_right_BTC" data-type="BTC" data-naps="74">
														<div class="xtt_one_line_right">
													<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
															<div class="xtt_one_line_ico_right"> 
																<div class="xtt_change_ico" style="background: url(/img/valute/Bitcoin.png) no-repeat center center;"></div>
															</div>															
															
															<div class="xtt_one_line_name_right">
																<div class="xtt_one_line_name">
																	Bitcoin BTC
																</div>
															</div>														
															
															<div class="xtt_one_line_curs_right">
																<div class="xtt_one_line_curs">
																	0.00132
																</div>	
															</div>															
															
															<div class="xtt_one_line_reserv_right">
																<div class="xtt_one_line_reserv">
																	0.66822
																</div>	
															</div>															
															
		<div class="xtt_one_line_rez js_reserv" data-id="74" data-title="Сбербанк RUB-Bitcoin BTC">
			<div class="xtt_one_line_rez_ins">
				<span>Не хватает?</span>
			</div>
		</div>														
				
															<div class="clear"></div>
														</div>	
													</a>
													<!-- end one item -->											
													
													<!-- one item -->
													<a href="http://zanachka-pay.com/exchange_SBERRUB_to_BTC25/" class="js_exchange_link js_item_right js_item_right_ETH" data-type="ETH" data-naps="88">
														<div class="xtt_one_line_right">
													<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
															<div class="xtt_one_line_ico_right"> 
																<div class="xtt_change_ico" style="background: url(/img/valute/Ethereum.png) no-repeat center center;"></div>
															</div>															
															
															<div class="xtt_one_line_name_right">
																<div class="xtt_one_line_name">
																	Ethereum ETH
																</div>
															</div>														
															
															<div class="xtt_one_line_curs_right">
																<div class="xtt_one_line_curs">
																	0.03145
																</div>	
															</div>															
															
															<div class="xtt_one_line_reserv_right">
																<div class="xtt_one_line_reserv">
																	2.32213
																</div>	
															</div>															
															
		<div class="xtt_one_line_rez js_reserv" data-id="88" data-title="Сбербанк RUB-Ethereum ETH">
			<div class="xtt_one_line_rez_ins">
				<span>Не хватает?</span>
			</div>
		</div>														
				
															<div class="clear"></div>
														</div>	
													</a>
													<!-- end one item -->											
													
													<!-- one item -->
													<a href="http://zanachka-pay.com/exchange_SBERRUB_to_ZEC/" class="js_exchange_link js_item_right js_item_right_ZEC" data-type="ZEC" data-naps="116">
														<div class="xtt_one_line_right">
													<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
															<div class="xtt_one_line_ico_right"> 
																<div class="xtt_change_ico" style="background: url(/img/valute/zcash.jpg) no-repeat center center;"></div>
															</div>															
															
															<div class="xtt_one_line_name_right">
																<div class="xtt_one_line_name">
																	Zcash ZEC
																</div>
															</div>														
															
															<div class="xtt_one_line_curs_right">
																<div class="xtt_one_line_curs">
																	25 000 000
																</div>	
															</div>															
															
															<div class="xtt_one_line_reserv_right">
																<div class="xtt_one_line_reserv">
																	36.499
																</div>	
															</div>															
															
		<div class="xtt_one_line_rez js_reserv" data-id="116" data-title="Сбербанк RUB-Zcash ZEC">
			<div class="xtt_one_line_rez_ins">
				<span>Не хватает?</span>
			</div>
		</div>														
				
															<div class="clear"></div>
														</div>	
													</a>
													<!-- end one item -->											
													
										</div>
										<!-- end tab currency -->										
										
										<!-- tab currency -->
										<div class="xtt_line_tab js_line_tab" id="js_tabnaps_11">
													<!-- one item -->
													<a href="http://zanachka-pay.com/exchange_BTC_to_QWRUB/" class="js_exchange_link js_item_right js_item_right_RUB" data-type="RUB" data-naps="19">
														<div class="xtt_one_line_right">
													<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
															<div class="xtt_one_line_ico_right"> 
																<div class="xtt_change_ico" style="background: url(/img/valute/Qiwi.png) no-repeat center center;"></div>
															</div>															
															
															<div class="xtt_one_line_name_right">
																<div class="xtt_one_line_name">
																	Qiwi RUB
																</div>
															</div>														
															
															<div class="xtt_one_line_curs_right">
																<div class="xtt_one_line_curs">
																	500 000
																</div>	
															</div>															
															
															<div class="xtt_one_line_reserv_right">
																<div class="xtt_one_line_reserv">
																	28 479.884
																</div>	
															</div>															
															
		<div class="xtt_one_line_rez js_reserv" data-id="19" data-title="Bitcoin BTC-Qiwi RUB">
			<div class="xtt_one_line_rez_ins">
				<span>Не хватает?</span>
			</div>
		</div>														
				
															<div class="clear"></div>
														</div>	
													</a>
													<!-- end one item -->											
													
										</div>
										<!-- end tab currency -->										
										
										<!-- tab currency -->
										<div class="xtt_line_tab js_line_tab active" id="js_tabnaps_13">
													<!-- one item -->
													<a href="http://site.com/exchange/ETH_to_P24UAH.html" class="js_exchange_link js_item_right js_item_right_UAH" data-type="UAH" data-naps="67">
														<div class="xtt_one_line_right">
													<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
															<div class="xtt_one_line_ico_right"> 
																<div class="xtt_change_ico" style="background: url(/img/valute/Privatbank.png) no-repeat center center;"></div>
															</div>															
															
															<div class="xtt_one_line_name_right">
																<div class="xtt_one_line_name">
																	Приват24 UAH
																</div>
															</div>														
															
															<div class="xtt_one_line_curs_right">
																<div class="xtt_one_line_curs">
																	12 184.0132
																</div>	
															</div>															
															
															<div class="xtt_one_line_reserv_right">
																<div class="xtt_one_line_reserv">
																	350 692.6348
																</div>	
															</div>															
															
		<div class="xtt_one_line_rez js_reserv" data-id="67" data-title="Ethereum ETH-Приват24 UAH">
			<div class="xtt_one_line_rez_ins">
				<span>Не хватает?</span>
			</div>
		</div>														
				
															<div class="clear"></div>
														</div>	
													</a>
													<!-- end one item -->											
													
													<!-- one item -->
													<a href="http://zanachka-pay.com/exchange_ETH_to_P24UAH6/" class="js_exchange_link js_item_right js_item_right_RUB" data-type="RUB" data-naps="80">
														<div class="xtt_one_line_right">
													<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
															<div class="xtt_one_line_ico_right"> 
																<div class="xtt_change_ico" style="background: url(/img/valute/Sberbank.png) no-repeat center center;"></div>
															</div>															
															
															<div class="xtt_one_line_name_right">
																<div class="xtt_one_line_name">
																	Сбербанк RUB
																</div>
															</div>														
															
															<div class="xtt_one_line_curs_right">
																<div class="xtt_one_line_curs">
																	27 476.0145
																</div>	
															</div>															
															
															<div class="xtt_one_line_reserv_right">
																<div class="xtt_one_line_reserv">
																	54 038.1915
																</div>	
															</div>															
															
		<div class="xtt_one_line_rez js_reserv" data-id="80" data-title="Ethereum ETH-Сбербанк RUB">
			<div class="xtt_one_line_rez_ins">
				<span>Не хватает?</span>
			</div>
		</div>														
				
															<div class="clear"></div>
														</div>	
													</a>
													<!-- end one item -->											
													
													<!-- one item -->
													<a href="http://zanachka-pay.com/exchange_ETH_to_P24UAH62/" class="js_exchange_link js_item_right js_item_right_RUB" data-type="RUB" data-naps="82">
														<div class="xtt_one_line_right">
													<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
															<div class="xtt_one_line_ico_right"> 
																<div class="xtt_change_ico" style="background: url(/img/valute/Qiwi.png) no-repeat center center;"></div>
															</div>															
															
															<div class="xtt_one_line_name_right">
																<div class="xtt_one_line_name">
																	Qiwi RUB
																</div>
															</div>														
															
															<div class="xtt_one_line_curs_right">
																<div class="xtt_one_line_curs">
																	27 572.691
																</div>	
															</div>															
															
															<div class="xtt_one_line_reserv_right">
																<div class="xtt_one_line_reserv">
																	28 479.884
																</div>	
															</div>															
															
		<div class="xtt_one_line_rez js_reserv" data-id="82" data-title="Ethereum ETH-Qiwi RUB">
			<div class="xtt_one_line_rez_ins">
				<span>Не хватает?</span>
			</div>
		</div>														
				
															<div class="clear"></div>
														</div>	
													</a>
													<!-- end one item -->											
													
													<!-- one item -->
													<a href="http://zanachka-pay.com/exchange_ETH_to_P24UAH4/" class="js_exchange_link js_item_right js_item_right_UAH" data-type="UAH" data-naps="102">
														<div class="xtt_one_line_right">
													<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
															<div class="xtt_one_line_ico_right"> 
																<div class="xtt_change_ico" style="background: url(/img/valute/Visa-MasterCard.png) no-repeat center center;"></div>
															</div>															
															
															<div class="xtt_one_line_name_right">
																<div class="xtt_one_line_name">
																	Visa/MasterCard UAH
																</div>
															</div>														
															
															<div class="xtt_one_line_curs_right">
																<div class="xtt_one_line_curs">
																	11 618.7741
																</div>	
															</div>															
															
															<div class="xtt_one_line_reserv_right">
																<div class="xtt_one_line_reserv">
																	32 667.7976
																</div>	
															</div>															
															
		<div class="xtt_one_line_rez js_reserv" data-id="102" data-title="Ethereum ETH-Visa/MasterCard UAH">
			<div class="xtt_one_line_rez_ins">
				<span>Не хватает?</span>
			</div>
		</div>														
				
															<div class="clear"></div>
														</div>	
													</a>
													<!-- end one item -->											
													
										</div>
										<!-- end tab currency -->										
										
										<!-- tab currency -->
										<div class="xtt_line_tab js_line_tab" id="js_tabnaps_12">
													<!-- one item -->
													<a href="http://zanachka-pay.com/exchange_QWRUB_to_CARDUAH/" class="js_exchange_link js_item_right js_item_right_UAH" data-type="UAH" data-naps="48">
														<div class="xtt_one_line_right">
													<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
															<div class="xtt_one_line_ico_right"> 
																<div class="xtt_change_ico" style="background: url(/img/valute/Visa-MasterCard.png) no-repeat center center;"></div>
															</div>															
															
															<div class="xtt_one_line_name_right">
																<div class="xtt_one_line_name">
																	Visa/MasterCard UAH
																</div>
															</div>														
															
															<div class="xtt_one_line_curs_right">
																<div class="xtt_one_line_curs">
																	410.7787
																</div>	
															</div>															
															
															<div class="xtt_one_line_reserv_right">
																<div class="xtt_one_line_reserv">
																	32 667.7976
																</div>	
															</div>															
															
		<div class="xtt_one_line_rez js_reserv" data-id="48" data-title="Qiwi RUB-Visa/MasterCard UAH">
			<div class="xtt_one_line_rez_ins">
				<span>Не хватает?</span>
			</div>
		</div>														
				
															<div class="clear"></div>
														</div>	
													</a>
													<!-- end one item -->											
													
										</div>
										<!-- end tab currency -->										
										
										<!-- tab currency -->
										<div class="xtt_line_tab js_line_tab" id="js_tabnaps_5">
													<!-- one item -->
													<a href="http://zanachka-pay.com/exchange_P24UAH_to_SBERRUB/" class="js_exchange_link js_item_right js_item_right_RUB" data-type="RUB" data-naps="95">
														<div class="xtt_one_line_right">
													<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
															<div class="xtt_one_line_ico_right"> 
																<div class="xtt_change_ico" style="background: url(/img/valute/Sberbank.png) no-repeat center center;"></div>
															</div>															
															
															<div class="xtt_one_line_name_right">
																<div class="xtt_one_line_name">
																	Сбербанк RUB
																</div>
															</div>														
															
															<div class="xtt_one_line_curs_right">
																<div class="xtt_one_line_curs">
																	217.54
																</div>	
															</div>															
															
															<div class="xtt_one_line_reserv_right">
																<div class="xtt_one_line_reserv">
																	54 038.1915
																</div>	
															</div>															
															
		<div class="xtt_one_line_rez js_reserv" data-id="95" data-title="Приват24 UAH-Сбербанк RUB">
			<div class="xtt_one_line_rez_ins">
				<span>Не хватает?</span>
			</div>
		</div>														
				
															<div class="clear"></div>
														</div>	
													</a>
													<!-- end one item -->											
													
										</div>
										<!-- end tab currency -->										
										
										<!-- tab currency -->
										<div class="xtt_line_tab js_line_tab" id="js_tabnaps_26">
													<!-- one item -->
													<a href="http://zanachka-pay.com/exchange_USDT_to_P24UAH/" class="js_exchange_link js_item_right js_item_right_UAH" data-type="UAH" data-naps="65">
														<div class="xtt_one_line_right">
													<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
															<div class="xtt_one_line_ico_right"> 
																<div class="xtt_change_ico" style="background: url(/img/valute/Privatbank.png) no-repeat center center;"></div>
															</div>															
															
															<div class="xtt_one_line_name_right">
																<div class="xtt_one_line_name">
																	Приват24 UAH
																</div>
															</div>														
															
															<div class="xtt_one_line_curs_right">
																<div class="xtt_one_line_curs">
																	26.101
																</div>	
															</div>															
															
															<div class="xtt_one_line_reserv_right">
																<div class="xtt_one_line_reserv">
																	350 692.6348
																</div>	
															</div>															
															
		<div class="xtt_one_line_rez js_reserv" data-id="65" data-title="Tether USD-Приват24 UAH">
			<div class="xtt_one_line_rez_ins">
				<span>Не хватает?</span>
			</div>
		</div>														
				
															<div class="clear"></div>
														</div>	
													</a>
													<!-- end one item -->											
													
													<!-- one item -->
													<a href="http://zanachka-pay.com/exchange_USDT_to_QWRUB4/" class="js_exchange_link js_item_right js_item_right_RUB" data-type="RUB" data-naps="101">
														<div class="xtt_one_line_right">
													<div class="xtt_one_line_abs"></div><div class="xtt_one_line_abs2"></div>
															<div class="xtt_one_line_ico_right"> 
																<div class="xtt_change_ico" style="background: url(/img/valute/Sberbank.png) no-repeat center center;"></div>
															</div>															
															
															<div class="xtt_one_line_name_right">
																<div class="xtt_one_line_name">
																	Сбербанк RUB
																</div>
															</div>														
															
															<div class="xtt_one_line_curs_right">
																<div class="xtt_one_line_curs">
																	55
																</div>	
															</div>															
															
															<div class="xtt_one_line_reserv_right">
																<div class="xtt_one_line_reserv">
																	54 038.1915
																</div>	
															</div>															
															
		<div class="xtt_one_line_rez js_reserv" data-id="101" data-title="Tether USD-Сбербанк RUB">
			<div class="xtt_one_line_rez_ins">
				<span>Не хватает?</span>
			</div>
		</div>														
				
															<div class="clear"></div>
														</div>	
													</a>
													<!-- end one item -->											
													
										</div>
										<!-- end tab currency -->										
										
						</div>	
						<div class="clear"></div>
					</div>	
				<div class="clear"></div>
			</div>		
		</div>
	</div></div>


<!-- <div class="home_text_wrap">
	<div class="home_text_ins">
		<div class="home_text_block">
			<div class="home_text_title">Уважаемый клиент, добро пожаловать на сайт обменного пункта Nix-Trade.com!</div>
			<div class="home_text_div">
				<div class="text">
					<p>ТексттексттексттексттекстТексттексттексттексттекстТексттексттексттексттекст<br>
						ТексттексттексттексттекстТексттексттексттексттекстТексттексттексттексттекст<br>
						ТексттексттексттексттекстТексттексттексттексттекстТексттексттексттексттекст<br>
						ТексттексттексттексттекстТексттексттексттексттекстТексттексттексттексттекст<br>
						ТексттексттексттексттекстТексттексттексттексттекстТексттексттексттексттекст<br>
						ТексттексттексттексттекстТексттексттексттексттекстТексттексттексттексттекст<br>
						ТексттексттексттексттекстТексттексттексттексттекстТексттексттексттексттекст<br>
					</p>
					<div class="clear"></div>
				</div>
			</div>
		</div>	
	</div>
</div>	
 -->

	<div class="home_reserv_wrap">
		<div class="home_white_blick"></div>
		
		<div class="home_reserv_block_ins">

			<div class="home_reserv_block">
				<div class="home_reserv_title">Резерв валюты</div>
				
				<div class="home_reserv_many">
					<div class="home_reserv_many_ins">
				
						 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/tether.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									Tether USD								</div>
								<div class="one_home_reserv_sum">
									249.2301								</div>
							</div>
								<div class="clear"></div>
						</div>
													 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/baks.jpg) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									Наличные USD								</div>
								<div class="one_home_reserv_sum">
									0								</div>
							</div>
								<div class="clear"></div>
						</div>
													 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/zcash.jpg) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									Zcash ZEC								</div>
								<div class="one_home_reserv_sum">
									36.499								</div>
							</div>
								<div class="clear"></div>
						</div>
													 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/Visa-MasterCard.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									Visa/MasterCard USD								</div>
								<div class="one_home_reserv_sum">
									0								</div>
							</div>
								<div class="clear"></div>
						</div>
							<div class="clear"></div>						 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/Visa-MasterCard.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									Visa/MasterCard RUB								</div>
								<div class="one_home_reserv_sum">
									0								</div>
							</div>
								<div class="clear"></div>
						</div>
													 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/Tinkoff.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									Тинькофф Банк RUB								</div>
								<div class="one_home_reserv_sum">
									0								</div>
							</div>
								<div class="clear"></div>
						</div>
													 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/Alfabank.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									Альфа-Банк RUB								</div>
								<div class="one_home_reserv_sum">
									0								</div>
							</div>
								<div class="clear"></div>
						</div>
													 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/vtb24.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									ВТБ24 RUB								</div>
								<div class="one_home_reserv_sum">
									0								</div>
							</div>
								<div class="clear"></div>
						</div>
							<div class="clear"></div>						 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/Sberbank.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									Сбербанк RUB								</div>
								<div class="one_home_reserv_sum">
									54 038.1915								</div>
							</div>
								<div class="clear"></div>
						</div>
													 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/Privatbank.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									Приват24 UAH								</div>
								<div class="one_home_reserv_sum">
									100								</div>
							</div>
								<div class="clear"></div>
						</div>
													 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/Visa-MasterCard.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									Visa/MasterCard UAH								</div>
								<div class="one_home_reserv_sum">
									32 667.7976								</div>
							</div>
								<div class="clear"></div>
						</div>
													 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/BTC-e.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									BTC-E USD								</div>
								<div class="one_home_reserv_sum">
									0								</div>
							</div>
								<div class="clear"></div>
						</div>
							<div class="clear"></div>						 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/BTC-e.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									BTC-E RUB								</div>
								<div class="one_home_reserv_sum">
									0								</div>
							</div>
								<div class="clear"></div>
						</div>
													 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/exmo.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									Exmo USD								</div>
								<div class="one_home_reserv_sum">
									- 255								</div>
							</div>
								<div class="clear"></div>
						</div>
													 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/exmo.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									Exmo UAH								</div>
								<div class="one_home_reserv_sum">
									-21 000								</div>
							</div>
								<div class="clear"></div>
						</div>
													 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/Bitcoin.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									Bitcoin BTC								</div>
								<div class="one_home_reserv_sum">
									0.66822								</div>
							</div>
								<div class="clear"></div>
						</div>
							<div class="clear"></div>						 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/Ethereum.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									Ethereum ETH								</div>
								<div class="one_home_reserv_sum">
									2.32213								</div>
							</div>
								<div class="clear"></div>
						</div>
													 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/Litecoin.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									LiteCoin LTC								</div>
								<div class="one_home_reserv_sum">
									8.10851								</div>
							</div>
								<div class="clear"></div>
						</div>
													 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/dash.jpg) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									Dash DASH								</div>
								<div class="one_home_reserv_sum">
									1								</div>
							</div>
								<div class="clear"></div>
						</div>
													 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/Okpay.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									Okpay USD								</div>
								<div class="one_home_reserv_sum">
									0								</div>
							</div>
								<div class="clear"></div>
						</div>
							<div class="clear"></div>						 
						<div class="one_home_reserv"> 
							<div class="one_home_reserv_ico" style="background: url(/img/valute/Qiwi.png) no-repeat center center;"></div>
							<div class="one_home_reserv_block">
								<div class="one_home_reserv_title">
									Qiwi RUB								</div>
								<div class="one_home_reserv_sum">
									28 479.884								</div>
							</div>
								<div class="clear"></div>
						</div>
																	
						<div class="clear"></div>
					</div>	
				</div>
			</div>	
		
		</div>
	</div>
	
<div class="home_reviews_wrap">
	<div class="home_reviews_ins">
		<div class="home_reviews_block">
			<div class="home_reviews_title">ПОСЛЕДНИЕ ОТЗЫВЫ</div>
			
			<div class="home_reviews_div">
				<div class="home_reviews_div_ins">
				
					<!-- <div class="home_reviews_one">
						<div class="home_reviews_abs"></div>
						<div class="home_reviews_date">Владимир, 04.12.2017, 13:55</div>
							<div class="clear"></div>
						<div class="home_reviews_content">Выводил битки на сб. Сработали за 3 часа. Всё ок, спасибо ребята.</div>
					</div>			
				
								
					<div class="home_reviews_one">
						<div class="home_reviews_abs"></div>
						<div class="home_reviews_date">Олег Газманов, 03.12.2017, 20:23</div>
							<div class="clear"></div>
						<div class="home_reviews_content">выводил 1 эфир. заявку выполнили в автоматическом режиме. без обмана.</div>
					</div>			
				
								
					<div class="home_reviews_one">
						<div class="home_reviews_abs"></div>
						<div class="home_reviews_date">Антоха, 02.12.2017, 13:59</div>
							<div class="clear"></div>
						<div class="home_reviews_content">2,8 эфира вывод. Через 10 минут деньги уже на карте сбера. Такой скорости еще не…</div>
					</div>		 -->	
				
							
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- <div class="home_partner_wrap">
	<div class="home_gray_blick"></div>
	<div class="home_partner_wrap_ins">
		<div class="home_partner_block"> -->
			
			<!-- <div class="home_lchange_div">
								
					<div class="home_lchange_title">Последний обмен</div>
					<div class="home_lchange_date">04.12.2017, 11:58</div>
					<div class="home_lchange_body">
					
						<div class="home_lchange_why">
							<div class="home_lchange_ico" style="background: url(http://zanachka-pay.com/wp-content/uploads/Bitcoin.png) no-repeat center center;"></div>
							<div class="home_lchange_txt">
								<div class="home_lchange_sum">0.05</div>
								<div class="home_lchange_name">BTC</div>
							</div>
								<div class="clear"></div>
						</div>
					
						<div class="home_lchange_arr"></div>
					
						<div class="home_lchange_why">
							<div class="home_lchange_ico" style="background: url(http://zanachka-pay.com/wp-content/uploads/Sberbank.png) no-repeat center center;"></div>
							<div class="home_lchange_txt">
								<div class="home_lchange_sum">34296.3656</div>
								<div class="home_lchange_name">RUB</div>
							</div>
						</div>				
							<div class="clear"></div>
					</div>
						
			</div> -->
			
						
			
							<div class="clear"></div>
		</div>	
	</div>
</div>

</div>
		

			</div>
	
	<!-- footer --> 
	<div class="footer_wrap">
		<div class="footer">
		
			<div class="footer_left">
			
				<div class="copyright">
											<p>Nix - Trade — Сервис обмена электронных валют.</p>
									</div>
				
				<div class="footer_menu">
					<ul id="menu-nizhnee-menyu" class="fmenu"><li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page  first_menu_li menu-item-35"><a href=""><span>Карта сайта</span></a></li>
<li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36"><a href=""><span>Предупреждение</span></a></li>
<li id="menu-item-77" class="menu-item menu-item-type-post_type menu-item-object-page  last_menu_li menu-item-77"><a href=""><span>Правила сайта</span></a></li>
</ul>						<div class="clear"></div>
				</div>				
			
			</div>
			<div class="footer_center">
<div class="home_partner_div">
				<div class="home_partner_title"> Наши партнеры</div>
										<div class="home_partner_one">
										<a href="http://kurs.com.ua/webmoney" target="_blank"><img src="/img/partner/kurs.png" alt=""></a>
										</div>
										<div class="home_partner_one"><a href="http://kurses.com.ua/" target="_blank"><img src="/img/partner/benefits.gif" alt=""></a>
										</div>
										<div class="home_partner_one"><a href="https://www.bestchange.ru/" target="_blank"><img src="/img/partner/bestchange.gif" alt=""></a>
										</div>
										<div class="home_partner_one"><a href="https://kurs.expert" target="_blank"><img src="/img/partner/buttonY.png" alt=""></a>
										</div>
										<div class="home_partner_one"><a href="#" target="_blank"><img src="/img/partner/ethereum-bottom.png" alt=""></a>
										</div>
										<div class="home_partner_one"><a href="#" target="_blank"><img src="/img/partner/pm-w-bottom.png" alt=""></a>
										</div>
										<div class="home_partner_one"><a href="http://bestexchangers.ru/" target="_blank"><img src="/img/partner/bestex.gif" alt=""></a>
										</div>
										<div class="home_partner_one"><a href="#" target="_blank"><img src="/img/partner/qiwi-bottom.png" alt=""></a>
										</div>
										<div class="home_partner_one"><a href="#" target="_blank"><img src="/img/partner/p24-bottom.png" alt=""></a>
										</div>
										<div class="home_partner_one"><a href="#" target="_blank"><img src="/img/partner/payeer-bottom.png" alt=""></a>
										</div>
										<div class="clear"></div>
			</div>

				
						
					<div class="clear"></div>
			</div>
			<div class="footer_right">
				<a href="http://vk.com/" class="social_link" target="_blank" rel="nofollow"><img src="/img/vk-ico.png" alt=""></a>
				<a href="https://www.facebook.com/" class="social_link" target="_blank" rel="nofollow"><img src="/img/fb-ico.png" alt=""></a>
				<a href="https://plus.google.com/" class="social_link" target="_blank" rel="nofollow"><img src="/img/gp-ico.png" alt=""></a>
				<a href="http://twitter.com/" class="social_link" target="_blank" rel="nofollow"><img src="/img/tw-ico.png" alt=""></a>
			</div>			
				<div class="clear"></div>
		</div>
	</div>
	<!-- end footer -->

