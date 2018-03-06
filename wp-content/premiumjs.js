	
jQuery(function($){
 	$('.ajax_post_form').ajaxForm({
		dataType:  'json',
		beforeSubmit: function(a,f,o) {
			f.addClass('thisactive');
			$('.thisactive input[type=submit], .thisactive input[type=button]').attr('disabled',true);
			$('.thisactive').find('.ajax_submit_ind').show();
		},
		error: function(res, res2, res3) {
					console.log('Текст ошибки, text1: ' + res2 + ',text2:' + res3);
		for (key in res) {
			console.log(key + ' = ' + res[key]);
		}
		$('#the_shadow, .reserv_box').hide();
		},
		success: function(res) {
					
			if(res['status'] == 'error'){
				if(res['status_text']){
					$('.thisactive .resultgo').html('<div class="resultfalse"><div class="resultclose"></div>'+res['status_text']+'</div>');
				}
			}
			if(res['status'] == 'error_clear'){
				if(res['status_text']){
					$('.thisactive .resultgo').html('<div class="resultfalse"><div class="resultclose"></div>'+res['status_text']+'</div>');
				}
				$('.thisactive input[type=text]:not(.notclear), .thisactive input[type=password]:not(.notclear), .thisactive textarea:not(.notclear)').val('');
			}			
			if(res['status'] == 'success'){
				if(res['status_text']){
					$('.thisactive .resultgo').html('<div class="resulttrue"><div class="resultclose"></div>'+res['status_text']+'</div>');
				}
			}
			if(res['status'] == 'success_clear'){
				if(res['status_text']){
					$('.thisactive .resultgo').html('<div class="resulttrue"><div class="resultclose"></div>'+res['status_text']+'</div>');
				}
				$('.thisactive input[type=text]:not(.notclear), .thisactive input[type=password]:not(.notclear), .thisactive textarea:not(.notclear)').val('');
			}			
					
			if(res['url']){
				window.location.href = res['url']; 
			}
						
				if(res['ncapt1']){
		$('.captcha1').attr('src',res['ncapt1']);
	}
	if(res['ncapt2']){
		$('.captcha2').attr('src',res['ncapt2']);
	}
					
			$('.thisactive input[type=submit], .thisactive input[type=button]').attr('disabled',false);
			$('.thisactive').find('.ajax_submit_ind').hide();
			$('.thisactive').removeClass('thisactive');
						
		}
	});	
});		
	
jQuery(function($){
	
	function checknumbr(mixed_var) {
		return ( mixed_var == '' ) ? false : !isNaN( mixed_var );
	}		
	$(document).on('click', 'input', function(){
		$(this).parents('.js_wrap_error').removeClass('error');
	});		 
	
	function goed_peremen(sum, dej){
		var id = $('.js_napr_id:first').val();
		
		var check1 = 0;
		if($('input[name=check_purse1]').length > 0){
			if($('input[name=check_purse1]').prop('checked')){
				var check1 = 1;
			}
		}
		var check2 = 0;
		if($('input[name=check_purse2]').length > 0){
			if($('input[name=check_purse2]').prop('checked')){
				var check2 = 1;
			}
		}	
		
		var dataString = 'id='+id+'&sum='+sum+'&dej='+dej+'&check1='+check1+'&check2='+check2;
		
		$('.exch_ajax_wrap_abs, .hexch_ajax_wrap_abs, .js_loader').show();
		
        $.ajax({
            type: "POST",
            // url: "http://zanachka-pay.com/ajax-exchange_changes.html?meth=post&yid=1d13d413d4e6",
            data: dataString,
	        dataType: 'json',
 			error: function(res, res2, res3){
						console.log('Текст ошибки, text1: ' + res2 + ',text2:' + res3);
		for (key in res) {
			console.log(key + ' = ' + res[key]);
		}
		$('#the_shadow, .reserv_box').hide();
			},           
			success: function(res){ 
				
				if(dej !== 1){
					$('.js_summ1').val(res['summ1']);
				}
				if(dej !== 2){
					$('.js_summ2').val(res['summ2']);
				}
				if(dej !== 3){
					$('.js_summ1c').val(res['summ1c']);
				}
				if(dej !== 4){
					$('.js_summ2c').val(res['summ2c']);
				}
				
				$('.js_comis_text1').html(res['comis_text1']);
				$('.js_comis_text2').html(res['comis_text2']);
				
				if(res['summ1_error'] == 1){
					$('.js_summ1').parents('.js_wrap_error').addClass('error');
					$('.js_summ1_error').html(res['summ1_error_text']);
				} else {
					$('.js_summ1').parents('.js_wrap_error').removeClass('error');					
				}
				if(res['summ2_error'] == 1){
					$('.js_summ2').parents('.js_wrap_error').addClass('error');
					$('.js_summ2_error').html(res['summ2_error_text']);
				} else {
					$('.js_summ2').parents('.js_wrap_error').removeClass('error');
				}
				if(res['summ1c_error'] == 1){
					$('.js_summ1c').parents('.js_wrap_error').addClass('error');
					$('.js_summ1c_error').html(res['summ1c_error_text']);
				} else {
					$('.js_summ1c').parents('.js_wrap_error').removeClass('error');
				}
				if(res['summ2c_error'] == 1){
					$('.js_summ2c').parents('.js_wrap_error').addClass('error');
					$('.js_summ2c_error').html(res['summ2c_error_text']);
				} else {
					$('.js_summ2c').parents('.js_wrap_error').removeClass('error');
				}
				
				if(res['curs_html']){
					$('.js_curs_html').html(res['curs_html']);
				}
				if(res['reserv_html']){
					$('.js_reserv_html').html(res['reserv_html']);
				}				
				
				$('.exch_ajax_wrap_abs, .hexch_ajax_wrap_abs, .js_loader').hide();
				
            }
		});					    
	}
	
		var gp = 0;
		var go_int = 0;
		var field_id = '';
		var old_field_id = '';
		var now_sum = 0;
		var old_sum = 0;
		var up_form = 0;
		var start_ex_timer = 1;
		
		function clear_ind(){
			gp=0;
		}

		function start_exchange_timer(){
			if(start_ex_timer == 1){
				start_ex_timer = 0;
				
				setInterval(function(){
					if(go_int == 1 && gp == 0){
						go_int = 0;
						if(now_sum !== old_sum || field_id != old_field_id || up_form == 1){ 
							old_sum = now_sum;
							old_field_id = field_id;
							goed_peremen(now_sum, field_id);
						}
					}		
				}, 500);
			}
		}

		function go_calc(obj, f_id, req){
			
			var vale = obj.val().replace(/,/g,'.');
			if (checknumbr(vale)) {
				
				obj.parents('.js_wrap_error').removeClass('error');
				
				if(f_id == 1){
					$('.js_summ1:not(:focus)').val(vale);
				} else if(f_id == 2){
					$('.js_summ2:not(:focus)').val(vale);
				} else if(f_id == 3){
					$('.js_summ1c:not(:focus)').val(vale);
				} else if(f_id == 4){
					$('.js_summ2c:not(:focus)').val(vale);
				}
				
				now_sum = vale;
				up_form = req;
				go_int = 1;
				field_id = f_id;
				gp = 1;
				setTimeout(clear_ind, 1000);
				
			} else {
				obj.parents('.js_wrap_error').addClass('error');
			}	

			start_exchange_timer();
			
		}

		$(document).on('keyup', '.js_summ1', function(){
			var thet = $(this);
			go_calc(thet,1,0);
		});
		$(document).on('change', '.js_summ1', function(){
			var thet = $(this);
			go_calc(thet,1,0);
		});

		$(document).on('keyup', '.js_summ2', function(){
			var thet = $(this);
			go_calc(thet,2,0);
		});
		$(document).on('change', '.js_summ2', function(){
			var thet = $(this);
			go_calc(thet,2,0);
		});

		$(document).on('keyup', '.js_summ1c', function(){
			var thet = $(this);
			go_calc(thet,3,0);
		});
		$(document).on('change', '.js_summ1c', function(){
			var thet = $(this);
			go_calc(thet,3,0);
		});

		$(document).on('keyup', '.js_summ2c', function(){
			var thet = $(this);
			go_calc(thet,4,0);
		});
		$(document).on('change', '.js_summ2c', function(){
			var thet = $(this);
			go_calc(thet,4,0);
		});	

		$(document).on('click','.js_check_purse',function(){
			var thet = $('.js_summ1');
			go_calc(thet,1,1);
		});			
	
});
	
/* exchange action */
jQuery(function($){
	
	function cache_exchange_data(thet){
		var ind = 0;
		if(thet.hasClass('check_cache')){
			if($('#check_data').length > 0){
				if($('#check_data').prop('checked')){
					ind = 1;
				}
			}	
		} else {
			ind = 1;
		}
		if(ind == 1){
			var id = thet.attr('cash-id');
			var v = thet.val();
			Cookies.set("cache_"+id, v, { expires: 7, path: '/' });			
		}
	}
	
	$(document).on('change', '.cache_data', function(){
		cache_exchange_data($(this));
	});
	$(document).on('keyup', '.cache_data', function(){
		cache_exchange_data($(this));
	});	
	
	$(document).on('change', '#check_data', function(){
		if($(this).prop('checked')){
			Cookies.set("check_data", 1, { expires: 7, path: '/' });
			$('.check_cache').each(function(){
				var id = $(this).attr('name');
				var v = $(this).val();
				Cookies.set("cache_"+id, v, { expires: 7, path: '/' });	
			});
		} else {
			Cookies.set("check_data", 0, { expires: 7, path: '/' });
			$('.check_cache').each(function(){
				var id = $(this).attr('cash-id');
				Cookies.remove("cache_"+id);	
			});			
		}
	});
	
	function add_cf_error(id, text){
		$('.js_cf'+id).parents('.js_wrap_error').addClass('error');
		if(text.length > 0){
			$('.js_cf'+ id +'_error').html(text);
		}
	}
	
	function add_cfc_error(id, text){
		$('.js_cfc'+id).parents('.js_wrap_error').addClass('error');
		if(text.length > 0){
			$('.js_cfc'+ id +'_error').html(text);
		}
	}	
	
    $('.ajax_post_bids').ajaxForm({
        dataType:  'json',
		beforeSubmit: function(a,f,o) {
			f.addClass('thisactive');
			$('.thisactive input[type=submit], .thisactive input[type=button]').attr('disabled',true);
			$('.ajax_post_bids_res').html('<div class="resulttrue">Идет обработка. Пожалуйста подождите</div>');
        },
		error: function(res, res2, res3) {
					console.log('Текст ошибки, text1: ' + res2 + ',text2:' + res3);
		for (key in res) {
			console.log(key + ' = ' + res[key]);
		}
		$('#the_shadow, .reserv_box').hide();
		},		
        success: function(res) { 
		
				if(res['summ1_error'] == 1){
					$('.js_summ1').parents('.js_wrap_error').addClass('error');
					$('.js_summ1_error').html(res['summ1_error_text']);
				} 
				if(res['summ2_error'] == 1){
					$('.js_summ2').parents('.js_wrap_error').addClass('error');
					$('.js_summ2_error').html(res['summ2_error_text']);
				} 
				if(res['summ1c_error'] == 1){
					$('.js_summ1c').parents('.js_wrap_error').addClass('error');
					$('.js_summ1c_error').html(res['summ1c_error_text']);
				} 
				if(res['summ2c_error'] == 1){
					$('.js_summ2c').parents('.js_wrap_error').addClass('error');
					$('.js_summ2c_error').html(res['summ2c_error_text']);
				} 
				if(res['account1_error'] == 1){
					$('.js_account1').parents('.js_wrap_error').addClass('error');
					$('.js_account1_error').html(res['account1_error_text']);
				} 				
				if(res['account2_error'] == 1){
					$('.js_account2').parents('.js_wrap_error').addClass('error');
					$('.js_account2_error').html(res['account2_error_text']);
				} 
				
				if(res['cf']){
					var cf = res['cf'];
					var cf_er = res['cf_er'];
					for (var i = 0; i < cf.length; i++) {
						var cfid = cf[i];
						var cftext = cf_er[i];
						add_cf_error(cfid, cftext);
					}
				}

				if(res['cfc']){
					var cfc = res['cfc'];
					var cfc_er = res['cfc_er'];
					for (var i = 0; i < cfc.length; i++) {
						var cfid = cfc[i];
						var cftext = cfc_er[i];
						add_cfc_error(cfid, cftext);
					}	
				}

			if(res['status'] == 'error'){
				$('.ajax_post_bids_res').html('<div class="resultfalse"><div class="resultclose"></div>'+res['status_text']+'</div>');
				if($('.js_wrap_error.error').length > 0){
					var ftop = $('.js_wrap_error.error:first').offset().top - 100;
					$('body,html').animate({scrollTop: ftop},500);
				}
			}
			if(res['status'] == 'success'){
				$('.ajax_post_bids_res').html('<div class="resulttrue"><div class="resultclose"></div>'+res['status_text']+'</div>');
			}				
		
			if(res['url']){
				window.location.href = res['url']; 
			}
			
				if(res['ncapt1']){
		$('.captcha1').attr('src',res['ncapt1']);
	}
	if(res['ncapt2']){
		$('.captcha2').attr('src',res['ncapt2']);
	}
		
		    $('.thisactive input[type=submit], .thisactive input[type=button]').attr('disabled',false);
			$('.thisactive').removeClass('thisactive');
			
        }
    });	
	
});
/* end exchange action */	
	
/* exchange table */
jQuery(function($){

function go_visible_icon_start(){

	$('.js_icon_left').hide();
	$('.js_icon_left:first').show();
	
	$('.js_item_left').each(function(){
		var vtype = $(this).attr('data-type');
		$('.js_icon_left_' + vtype).show();
	});

	$('.js_icon_right').hide();
	$('.js_icon_right:first').show();
	
	$('.js_line_tab.active .js_item_right').each(function(){
		var vtype = $(this).attr('data-type');
		$('.js_icon_right_' + vtype).show();
	});	
	
	if($('.js_icon_right.active:visible').length == 0){
		$('.js_item_right').show();
		$('.js_icon_right').removeClass('active');
		$('.js_icon_right:first').addClass('active');
	}
	
}

function go_active_left_col(){
	
	if($('.js_item_left:visible.active').length == 0){
		$('.js_item_left').removeClass('active');
		$('.js_item_left:visible:first').addClass('active');
	} 	
	
	var valid = $('.js_item_left.active').attr('data-id');
	$('.js_line_tab').removeClass('active');
	$('#js_tabnaps_'+valid).addClass('active');
	go_visible_icon_start();
	
}

	go_active_left_col();
 
    $(document).on('click',".js_item_left",function () {
        if(!$(this).hasClass('active')){
			
			$(".js_item_left").removeClass('active');
			$(this).addClass('active');

			go_active_left_col();
        }
        return false;
    });	
	
    $(document).on('click',".js_icon_left",function () {
        if(!$(this).hasClass('active')){
		    
			var vtype = $(this).attr('data-type');
			$(".js_icon_left").removeClass('active');
			$(this).addClass('active');
	
			if(vtype == 0){
				$('.js_item_left').show();
			} else {
				$('.js_item_left').hide();
				$('.js_item_left_'+vtype).show();
			}
			
			go_active_left_col();
			
        }
        return false;
    });
	
    $(document).on('click',".js_icon_right",function () {
        if(!$(this).hasClass('active')){
		    
			var vtype = $(this).attr('data-type');
			$(".js_icon_right").removeClass('active');
			$(this).addClass('active');
	
			if(vtype == 0){
				$('.js_item_right').show();
			} else {
				$('.js_item_right').hide();
				$('.js_item_right_'+vtype).show();
			}
			
        }
        return false;
    });

});		
/* end exchange table */	
	
/* partners */
jQuery(function($){ 
    $(".promo_menu li a").on('click',function () {
        if(!$(this).hasClass('act')){
		    $(".pbcontainer, .promo_menu li").removeClass('act');
		    $(".pbcontainer").filter(this.hash).addClass('act');
		    $(this).parents('li').addClass('act');
        }
        return false;
    });
	
    $(".bannerboxlink a").on('click',function() {
        var text = $(this).text();
		var st = $(this).attr('show-title');
		var ht = $(this).attr('hide-title');
		
        if(text == st){
            $(this).html(ht);
        } else {
            $(this).html(st);
        }
        $(this).parents(".bannerboxone").find(".bannerboxtextarea").toggle();
	    $(this).toggleClass('act');

        return false;
    });
});	
/* end partners */	
jQuery(function($){ 
	$(document).on('click', '.captcha_reload', function(){
		
		var thet = $(this);
		thet.addClass('act');
		
		var dataString='have=reload';
		$.ajax({
		type: "POST",
		// url: "http://zanachka-pay.com/ajax-sc_reload.html?meth=post&yid=1d13d413d4e6",
		dataType: 'json',
		data: dataString,
		error: function(res,res2,res3){
					console.log('Текст ошибки, text1: ' + res2 + ',text2:' + res3);
		for (key in res) {
			console.log(key + ' = ' + res[key]);
		}
		$('#the_shadow, .reserv_box').hide();
		},		
		success: function(res)
		{
			if(res['ncapt1']){
				$('.captcha1').attr('src',res['ncapt1']);
			}
			if(res['ncapt2']){
				$('.captcha2').attr('src',res['ncapt2']);
			}	
			
			thet.removeClass('act');
		}
		});
		
		return false;
	});
});	
	
/* tarifs */
jQuery(function($){ 

	$('.javahref').on('click', function(){
	    var the_link = $(this).attr('name');
	    window.location = the_link;
	});

});		
/* end tarifs */
jQuery(function($){ 
	
    $(document).on('click', function(event) {
        if ($(event.target).closest(".js_purse_link").length) return;
        $('.js_purse_ul').hide();		
		
        event.stopPropagation();
    });	
	
	$(document).on('click', '.js_purse_link', function(){
		$(this).parents('.js_window_wrap').find('.js_purse_ul').show();
		
		return false;
	});
	
	$(document).on('click', '.js_purse_line', function(){
		var account = $(this).attr('data-purse');
		$(this).parents('.js_window_wrap').find('input').val(account).trigger( "change" );
		$('.js_purse_ul').hide();
		
		return false;
	});	
	
});	
	
/* request reserve */
jQuery(function($){ 
	$(document).on('click', '.js_reserv', function(){
		var title = $(this).attr('data-title');
        var id = $(this).attr('data-id');		
		$('#reserv_box_title').html(title);	
		$('#reserv_box_id').attr('value',id);
		
		$('#the_shadow, .reserv_box').show();
		$('.reserv_box .resultgo').html(' ');	
			
	    var hei = Math.ceil(($(window).height() - $('.reserv_box_ins').height()) / 2);
	    $('.reserv_box').css({'top':hei});			
			
	    return false;
	});	
	
    $(document).on('click','.reserv_box_close', function(){
		$('#the_shadow, .reserv_box').hide();
    });	
});
/* end request reserve */	
	
jQuery(function($){ 

 	function get_exchange_step1(id){
		
		var id1 = $('#select_give').val();
		var id2 = $('#select_get').val();
		
		$('.exch_ajax_wrap_abs').show();
			
		var dataString='id='+id+'&id1=' + id1 + '&id2=' + id2;
		$.ajax({
			type: "POST",
			// url: "http://zanachka-pay.com/ajax-exchange_step1.html?meth=post&yid=1d13d413d4e6",
			dataType: 'json',
			data: dataString,
			error: function(res, res2, res3){
						console.log('Текст ошибки, text1: ' + res2 + ',text2:' + res3);
		for (key in res) {
			console.log(key + ' = ' + res[key]);
		}
		$('#the_shadow, .reserv_box').hide();
			},			
			success: function(res)
			{
					
				$('.exch_ajax_wrap_abs').hide();
				
				if(res['status'] == 'success'){
					$('#exch_html').html(res['html']);	

					if($('#the_title_page').length > 0){
						$('#the_title_page').html(res['titlepage']);
					}	
					
					$('title').html(res['title']);
					
					if($('meta[name=keywords]').length > 0){
						$('meta[name=keywords]').attr('content', res['keywords']);
					}
					if($('meta[name=description]').length > 0){
						$('meta[name=description]').attr('content', res['description']);
					}
					
					var thelink = res['thelink'];
					if(thelink){
						window.history.replaceState(null, null, thelink);
					}				
					
						$(document).Jselect();
					} else {
							if(res['status_text']){
			alert(res['status_text']);
		}
					}
					
			}
		});		
		
	}
	$(document).on('change', '#select_give', function(){
		get_exchange_step1(1);
	});
	
	$(document).on('change', '#select_get', function(){
		get_exchange_step1(2);
	});	
	
});	
jQuery(function($){ 
	
	$('#check_rule_step').on('change',function(){
		if($(this).prop('checked')){
			$('#check_rule_step_input').prop('disabled',false);
		} else {
			$('#check_rule_step_input').prop('disabled',true);
		}
	});

	$('#check_rule_step_input').on('click',function(){
		$(this).parents('.ajax_post_form').find('.resultgo').html('<div class="resulttrue">Идет обработка. Пожалуйста подождите</div>');
	});
	
	$('.iam_pay_bids').on('click',function(){
		if (!confirm("Вы уверены, что уже оплатили заявку?")) {
			return false;
		}
	});		
			
});		
jQuery(function($){
	
	if($('.check_payment_hash').length > 0){
		var nowdata = 0;
		var redir = 0;	
		var second = parseInt($('.check_payment_hash').attr('data-time'));

		function check_payment_now(){	
			nowdata = parseInt(nowdata) + 1;
			if(nowdata < second){
				$('.block_check_payment_abs').html(nowdata);
				var wid = $('.block_check_payment').width();
				if(wid > 1){
					var onepr = wid / second;
					var nwid = onepr * nowdata;
					$('.block_check_payment_ins').animate({'width': nwid},500);
				}				
			} else {
				if(redir == 0){
					var durl = $('.check_payment_hash').attr('data-hash');
					redir = 1;
					if(durl.length > 0){
						$('.exchange_status_abs').show();
						
						var dataString='hashed='+durl+'&auto_check=1';
						$.ajax({
							type: "POST",
							// url: "http://zanachka-pay.com/ajax-refresh_status_bids.html?meth=post&yid=1d13d413d4e6",
							dataType: 'json',
							data: dataString,
							error: function(res, res2, res3){
										console.log('Текст ошибки, text1: ' + res2 + ',text2:' + res3);
		for (key in res) {
			console.log(key + ' = ' + res[key]);
		}
		$('#the_shadow, .reserv_box').hide();
							},			
							success: function(res)
							{
								$('.exchange_status_abs').hide();
								if(res['html']){
									$('#exchange_status_html').html(res['html']);
										$(document).Jselect();
										redir = 0;
									nowdata = 0;
								} 
							}
						});	
					}					
				}
			}
		}
		setInterval(check_payment_now,1000);	
	}
	
});		
