$(function(){
	starup();
	index(); //script trang chủ
	authorPage(); //trang nxb, tác giả
	chitietsach(); //trang chi tiết sách
	taikhoan(); // trang tài khoản
	thanhtoan(); //trang thanh toán
	popup(); //script các popup
	login(); //script cho các trang đăng ký, đăng nhập, quên mật khẩu, sửa mật khẩu
	checkHeightCart();
	cart();
	change();
});

/* star up*/

function starup(){
	$('.cartbox').each(function(){
		var box = $(this);
		if(box.parent().hasClass('lica')) return;
		box.find('.n').val('1');
	});	
	$('.combo_page .trig').ellipsis({
		row: 7, 
		onlyFullWords: true,
	});	
	openMenu();
	searchfunc();
	slidebook();
	limited();
	selectbox();
	addToCart();
	phantrang();
	viewmode();
	tabbox();
	box();
	authorDetail();
}
/*--- CÁC HÀM Ở HEADER ---*/

function openMenu(){
	$('.menu_c1').mouseenter(function(){
		$('.menu_c2').removeClass('hide');
		$('.menu_c2').mouseenter(function(){
			$('.menu_c1').removeClass('hide');
			$('.menu_c2').removeClass('hide');
			$('.menu_c2').mouseleave(function(){
				$('.menu_c1').removeClass('hide');
				$('.menu_c2').removeClass('hide');
			});
		});
		$('.menu_c1').mouseleave(function(){
			$('.menu_c2').addClass('hide');
		});
	});
	$('.menu').mouseleave(function(){
		$('.menu_c1').addClass('hide');
		$('.menu_c2').addClass('hide');
	});
	$('.title_c1').mouseenter(function(){
		$('.title_c1').removeClass('hover');
		var c1 = $(this);
		var sub = c1.attr('sub');
		$('.clone2').hide();
		$('.clone2').each(function(){
			var c2 = $(this);
			var sub2 = c2.attr('sub');
			if(sub == sub2) {
				c2.show();
			}
		})
	});
	$('.clone2').mouseenter(function(){
		var c2 = $(this);
		var sub2 = c2.attr('sub');
		for(i = 0; i < $('.title_c1').length; i++){
			if($('.title_c1').eq(i).attr('sub') == sub2){
				$('.title_c1').eq(i).addClass('hover');
				return;
			}
		}
	});
}

function searchfunc(){
	$('.search').hover(function() {
		var tim_kiem_tu_khoa = $(this).find('.sip');
		tim_kiem_tu_khoa.focus();
		tim_kiem_tu_khoa.val('');
	});
}
//login
function login(){}
/*--- TỔNG HỢP CÁC HÀM DÙNG CHUNG ---*/

/* Giới hạn số dòng ký tự */

function limited(){
	$('.is-1r').ellipsis({
		row: 1, 
		onlyFullWords: true,
	});
	$('.is-2r').ellipsis({
		row: 2, 
		onlyFullWords: true,
	});
	$('.is-3r').ellipsis({
		row: 3, 
		onlyFullWords: true,
	});
}
/* js cho các selectbox */
function selectbox(){
	if($('.is-sl').length == 0) return;
	$('.is-sl').prop('selectedIndex',0);
	$(".is-sl").selectbox({
		onChange: function (val, inst){
			ptajax();
		},
		effect: "fade"
	});
}
function ptajax () {
	var url = window.location.href;
	var limit = $('.numbook').find('select').val();
	var data = $('.is-menu.atv').attr('data-link');
	var grid = $('.gridbook');
	var sort = $('.fil').find('select').val();
	if ($('.grid').hasClass('list')) {var list = 'list'} else {var list =''};
	$('.gridbook').each(function(){
		var tb = $(this);
		tb.empty();
		if (tb.attr('data-link') == data){
			grid = tb;
		}
	});

	phantrangAjax(url,data,grid,limit,sort,list);
}

/* Slide sách */
function slidebook(){
	if($('.slide_book').length == 0) return;
	$('.slide_book').each(function(){
		var slide = $(this);
		var item = slide.find('.book_item');
		var n = item.length;
		slide.removeClass('wait');
		if(n > 6){
			item.eq(n - 1).addClass('lr');
			item.eq(n - 2).addClass('lr');
		}
		slide.iosSlider({
		desktopClickDrag: true,
	  snapToChildren: true,
	  infiniteSlider: false,
	  snapSlideCenter: false,
	  autoSlide: false,
	  keyboardControls: true,
		navNextSelector: slide.find('.next'),
	  navPrevSelector: slide.find('.prev')
		});
	});
}
/* Chế độ xem sách ở các trang liệt kê */
function viewmode(){
	if($('.viewmode').length == 0) return;
	var mode = $('.viewmode').find('.fa');
	mode.click(function(){
		var btn = $(this);
		mode.removeClass('atv');
		btn.addClass('atv');
		if(btn.hasClass('fa-th')) {
			$('.grid').removeClass('list');
			//limited();
			$('.numbook').hide();
		}
		else {
			$('.grid').addClass('list');
			$('.numbook').show();
			$('.trig').ellipsis({
				row: 3, 
				onlyFullWords: true,
			});
		}
	});
}

/* Hàm chuyển tab */
function tabbox(){
	if($('.is-box').length == 0) return;
	$('.is-box').each(function(){
		var box = $(this);
		var menu = box.find('.is-menu');
		var tab = box.find('.is-tab');
		var num = tab.length;
		tab.hide();
		if(window.location.hash) showTabByHash()
		box.find('.is-tab:first').show();
		box.find('.is-menu:first').addClass('atv');
		menu.click(function(){
			var mn = $(this);
			if(mn.attr('data-set')) window.location.hash = mn.attr('data-set'); else window.location.hash=' ';
			menu.removeClass('atv');
			mn.addClass('atv');
			var link = mn.attr('data-link');
			tab.hide();
			tab.each(function(){
				var tb = $(this);
				if (tb.attr('data-link') == link){
					if(!tb.find('div.pagination').length || tb.hasClass('load')) {
						//console.log('add them');
						var limit = $('.numbook').find('select').val();
						var sort = $('.fil').find('select').val();
						if ($('.grid').hasClass('list')) {var list = 'list'} else {var list =''};
						//alert(list);
						if(tb.hasClass('load')) {
							list = mn.attr('data-set');
							$('.filterbox.all').hide();
						}
						phantrangAjax(window.location.href,link,tb,limit, sort, list);						
					}else $('.filterbox.all').show();
						tb.show();
						limited();
						//console.log('selected');
				}
			});

		});
	});
}
function box(){
	if($('.is-is-box').length == 0) return;
	$('.is-is-box').each(function(){
		var box = $(this);
		var menu = box.find('.is-is-menu');
		var tab = box.find('.is-is-tab');
		var num = tab.length;
		tab.hide();
		box.find('.is-is-tab:first').show();
		box.find('.is-is-menu:first').addClass('atv');
		menu.click(function(){
			var mn = $(this);
			menu.removeClass('atv');
			mn.addClass('atv');
			var link = mn.attr('data-link');
			tab.hide();
			for(var i = 0; i < num; i++) {
				if(tab.eq(i).attr('data-link') == link) {
					tab.eq(i).show();
					if($('.grid.list').length != 0) {
						$('.trig').ellipsis({
							row: 3, 
							onlyFullWords: true,
						});
					}
					return;
				}
			}
		});
	});
}
/*---TRANG CHỦ---*/
/* slide đầu trang */
function slidebar(){
	if($('.slidebar').length == 0) return;
	$('.slidebar').removeClass('wait');
	$('.slidebar .iosslider').iosSlider({
		autoSlideTimer: 5000,
		autoSlideTransTimer: 2000,
		desktopClickDrag: true,
    snapToChildren: true,
    infiniteSlider: true,
    snapSlideCenter: true,
    autoSlide: true,
    keyboardControls: true,
    navNextSelector: $('.slidebar').find('.next'),
    navPrevSelector: $('.slidebar').find('.prev')
  });
}
/*Slide danh sách combo - trang chủ */
function combo(){
	if ($(".combobox").length == 0) return;
	$('.combo').iosSlider({
		desktopClickDrag: true,
	  snapToChildren: true,
	  infiniteSlider: true,
	  snapSlideCenter: false,
	  autoSlide: true,
	  keyboardControls: true,
	  navNextSelector: $('.combo').find('.ctrlslide .fa-angle-right'),
    navPrevSelector: $('.combo').find('.ctrlslide .fa-angle-left')
	});
}

function index(){
	if ($('.index').length == 0) return;
		slidebar();
		combo();
		listauthor();
		changeAuthor();
}

/* các funtion của danh sách tác giả - trang chủ */

function listauthor(){
	if ($(".authorbox").length == 0) return;
	$('.ath').iosSlider({
		desktopClickDrag: true,
	  snapToChildren: true,
	  infiniteSlider: true,
	  snapSlideCenter: false,
	  autoSlide: true,
	  keyboardControls: true,
	  navNextSelector: $('.ath').find('.ctrlslide .fa-angle-right'),
		navPrevSelector: $('.ath').find('.ctrlslide .fa-angle-left'),
	  onSlideChange: slideChange
	});
	$('.smath .iosslider').iosSlider({
		desktopClickDrag: true,
	  snapToChildren: true,
	  infiniteSlider: false,
	  snapSlideCenter: false,
	  autoSlide: false,
	  keyboardControls: true,
	  navNextSelector: $('.smath .iosslider').find('.next'),
    navPrevSelector: $('.smath .iosslider').find('.prev')
	});
	changeAuthor();
	$(".smath .fa-angle-left").click(function(){
		$(".smath .prev").trigger("click");
	});
	$(".smath .fa-angle-right").click(function(){
		$(".smath .next").trigger("click");
	});
}
function slideChange(args){
	var change = (args.currentSlideNumber) - 1;
	setTimeout(function(){
		$('.smath .slide').removeClass('atv');
		$('.smath .slide').eq(change).addClass('atv');
  }, 500);
}
function changeAuthor(){
	$('.smath .slide').click(function(){
		var slide = $(this);
		if (slide.hasClass('atv') == true) return;
		$('.smath .slide').removeClass('atv');
		slide.addClass('atv');
		var index = slide.index() + 1;
		$(".ath").iosSlider('goToSlide',index);
	});
}

/*--- TÁC GIẢ ---*/
function scrollAuthorList(){
	$('.athslider').iosSliderVertical({
		desktopClickDrag: true,
	  snapToChildren: true,
	  infiniteSlider: false,
	  snapSlideCenter: false,
	  autoSlide: false,
	  keyboardControls: true,
	  onSlideChange: authorChange,
	});
}
function authorChange(args){
	if(changetime == 1) return;
	setTimeout(function(){
		var change = (args.currentSlideNumber) - 1;
		var set = $('.author_word').eq(change).attr('data-set');
		for(i = 0; i < $('.nav').length;i++){
			if($('.word').eq(i).attr('data-set') == set) {
				$('.word').eq(i).trigger('click');
				return;
			}
		}
  }, 1000);
}
var changetime = 0;

function authorPage(){
	if($('.athp.contain') .length == 0) return;
	scrollAuthorList();
  $('.word').click(function(){
  	changetime = 1;
  	var word =$(this);
  	var n = word.index() +1;
  	$('.athslider').iosSliderVertical('goToSlide', n);
  	setTimeout(function(){
  		changetime = 0;
  	},1000);
  });
}

function authorDetail(){
	$('.athl .athitem').click(function(){
		var na = $(this).attr('data-set');
		$('.scroll_word.word').each(function(){
			var word = $(this);
			if (word.attr('data-set') == na) word.trigger('click');
		});
		 $('.author_name').each(function(){
			var name = $(this);
			if (name.attr('data-set') == na) name.trigger('click');
		});
  	setTimeout(function(){
  		changetime = 0;
  	},500);
  });
}


/*--- Sách chi tiết ---*/

function chitietsach(){
	if($('.chitietsach').length == 0) return;
	slidebook();
	var h = ($('.little_detail').height() - 378);
	$('.txt_gioithieu').height(h);
	var h2= $('.ndchinh').height();
	if( h2 > h ) $('.seemore').show(); 
	$('.seemore').click(function(){
		$('.seemore').hide();
		$('.txt_gioithieu').jScrollPane();
	});
	$('.is-like').click(function(){
		var like = $(this);
		if(like.hasClass('atv')) like.removeClass('atv');
		else like.addClass('atv');
	});
	rating();
	showComment();
	avrate();
}
function rating(){
	var rt = $('.rating').find('.star');
	rt.unbind('click').click(function(){
		var star = $(this);
		if(star.hasClass('atv') && (rt.eq($(this).index() +1).hasClass('atv') == false)){
			rt.removeClass('atv');
			return;
		}
		var index = star.index();
		rt.removeClass('atv');
		for (var i = 0; i <= index; i++) {
			rt.eq(i).addClass('atv');
		};
	});
}
function showComment(){
	$('.write').click(function(){
		$('.write').hide(200);
		$('.comment').show(200);
		$('.formnhap').textareaAutoSize();
		$('.formnhap').css('height','21px');
	});
	$('.hidecmt').click(function(){
		$(this).parent().hide(200);
		$('.write').show(200);
	});
	$('.sendcmt').click(function(){
		$('.hidecmt').trigger('click');
	})
}
function avrate(){
	var n = parseFloat($('.is-ratebook').attr('num'));
	var mod = n % 1;
	var div = n - mod;
	if(div == 5){
		$('.is-percent').width(125);
		return;
	}
	$('.is-percent').width((div * 26) + (mod *22));
}
/*--- TÀI KHOẢN ---*/
function taikhoan(){
	if ($('.accpage ').length == 0) return;
	$('.is-addr').unbind('click').click(function(){
		var ck = $(this);
		var def = ck.parent().parent();
		$('.linacc').removeClass('def');
		def.addClass('def');
	});
	$('.is-rmadr').unbind('click').click(function(){
		var rm = $(this);
		var def = rm.parent().parent();
		def.remove();
	});
	/* trang mail */
	$('.is-tbl').each(function(){
		var tbl = $(this);
		var ck = tbl.find('.is-ck')
		var ckall = tbl.find('.is-ckall');
		var st = tbl.find('.is-st')
		var stall = tbl.find('.is-stall');
		var fav = tbl.find('.is-fav');
		var favall = tbl.find('.is-favall');
		var row = tbl.find('.is-r');
		ckall.click(function(){
			if(ckall.hasClass('fa-check-square')) {
					row.removeClass('atv');
					ck.removeClass('fa-check-square').addClass('fa-square-o');
					ckall.removeClass('fa-check-square').addClass('fa-square-o');
				}
			else{
				row.addClass('atv')
				ck.removeClass('fa-square-o').addClass('fa-check-square');
				ckall.removeClass('fa-square-o').addClass('fa-check-square');
			}
		});
		stall.click(function(){
			row.removeClass('mkstar');
			if(stall.hasClass('fa-star')) {
					st.removeClass('fa-star').addClass('fa-star-o');
					stall.removeClass('fa-star').addClass('fa-star-o');
				}
			else{
				row.addClass('mkstar');
				st.removeClass('fa-star-o').addClass('fa-star');
				stall.removeClass('fa-star-o').addClass('fa-star');
			}
		});
		favall.click(function(){
			row.removeClass('like');
			if(favall.hasClass('fa-heart')) {
					fav.removeClass('fa-heart').addClass('fa-heart-o');
					favall.removeClass('fa-heart').addClass('fa-heart-o');
				}
			else{
				row.addClass('like');
				fav.removeClass('fa-heart-o').addClass('fa-heart');
				favall.removeClass('fa-heart-o').addClass('fa-heart');
			}
		});
		ck.click(function(){
			var ckt = $(this);
			var rr = ckt.parent().parent();
			if(ckt.hasClass('fa-check-square')){
				rr.removeClass('atv');
				ckt.removeClass('fa-check-square').addClass('fa-square-o');
				ckall.removeClass('fa-check-square').addClass('fa-square-o');
			}
			else{
				rr.addClass('atv');
				ckt.addClass('fa-check-square').removeClass('fa-square-o');
				if($('.is-ck.fa-square-o').length == 0) ckall.removeClass('fa-square-o').addClass('fa-check-square');
			}
			return false;
		});
		st.click(function(){
			var stt = $(this);
			var rr = stt.parent().parent();
			if(stt.hasClass('fa-star')){
				rr.removeClass('mkstar');
				stt.removeClass('fa-star').addClass('fa-star-o');
				stall.removeClass('fa-star').addClass('fa-star-o');
			}
			else{
				rr.addClass('mkstar');
				stt.addClass('fa-star').removeClass('fa-star-o');
				if($('.is-st.fa-star-o').length == 0) stall.removeClass('fa-star-o').addClass('fa-star');
			}
			return false;
		});
		fav.click(function(){
			var stt = $(this);
			var rr = stt.parent().parent();
			if(stt.hasClass('fa-heart')){
				rr.removeClass('like');
				stt.removeClass('fa-heart').addClass('fa-heart-o');
				favall.removeClass('fa-heart').addClass('fa-heart-o');
			}
			else{
				rr.addClass('like');
				stt.addClass('fa-heart').removeClass('fa-heart-o');
				if($('.is-fav.fa-heart-o').length == 0) favall.removeClass('fa-heart-o').addClass('fa-heart');
			}
			return false;
		});
		/* mở các thẻ tác vụ */
		$('.btnoti').click(function(){
			var bt = $(this);
			var pop = bt.find('.popnoti');
			$('.btnoti').removeClass('shpop')
			bt.addClass('shpop');
			return false;
		});
		$('body').click(function(){
			if($('.btnoti.shpop').length != 0) $('.btnoti').removeClass('shpop');
		});
		//thao tác trên thẻ tác vụ
		tbl.find($('.is-noti-filter-row')).click(function(){
			var act = $(this).attr('data-link');
			if(act == 'all') tbl.find($('.is-ckall.fa-square-o')).trigger('click');
			if(act == 'none') tbl.find($('.is-ck.fa-check-square')).trigger('click');
			if(act == 'read') {
				row.find($('.is-ck.fa-check-square').trigger('click'));
				tbl.find($('.is-r.read')).find('.is-ck.fa-square-o').trigger('click');
			}
			if(act == 'unread') {
				row.find($('.is-ck.fa-check-square')).trigger('click');
				for(i = 0; i < $('.is-r').length;i++){
					if(row.eq(i).hasClass('read') == false) row.eq(i).find('.is-ck.fa-square-o').trigger('click');
				}
			}
			if(act == 'star') {
				row.find($('.is-ck.fa-check-square')).trigger('click');
				tbl.find($('.is-r.mkstar')).find($('.is-ck.fa-square-o')).trigger('click');
			} 
			if(act == 'unstar') {
				row.find($('.is-ck.fa-check-square')).trigger('click');
				for(i = 0; i < $('.is-r').length;i++){
					if(row.eq(i).hasClass('mkstar') == false) row.eq(i).find($('.is-ck.fa-square-o')).trigger('click');
				}
			}
			if(act == 'like') {
				row.find($('.is-ck.fa-check-square')).trigger('click');
				tbl.find($('.is-r.like')).find($('.is-ck.fa-square-o')).trigger('click');
			} 
			if(act == 'unlike') {
				row.find($('.is-ck.fa-check-square')).trigger('click');
				for(i = 0; i < $('.is-r').length;i++){
					if(row.eq(i).hasClass('like') == false) row.eq(i).find($('.is-ck.fa-square-o')).trigger('click');
				}
			} 
		});
		tbl.find($('.is-noti-todo-row')).click(function(){
			var act = $(this).attr('data-link');
			if(act == 'read') {
				limited();
				$('.is-r.atv').addClass('read');
			}
			if(act == 'unread') {
				limited();
				$('.is-r.atv').removeClass('read');
			}
			if(act == 'star') $('.is-r.atv').find('.is-st.fa-star-o').trigger('click');
			if(act == 'unstar') $('.is-r.atv').find('.is-st.fa-star').trigger('click');
			if(act == 'like') $('.is-r.atv').find('.is-fav.fa-heart-o').trigger('click');
			if(act == 'unlike') $('.is-r.atv').find('.is-fav.fa-heart').trigger('click');
			if(act == 'remove'){
				tbl.find('.is-r.atv').each(function(){
					var r = $(this);
					var nb = r.attr('data-link');
					tbl.find($('.is-mail')).each(function(){
						var mail = $(this);
						if(mail.attr('data-link') == nb){
							mail.remove();
							r.remove();
						}
					});
				});
			}
		});
		/* mở mail */
		tbl.find($('.is-r')).unbind('click').click(function(){
			var r = $(this);
			var num = r.attr('data-link');
			r.addClass('read');
			tbl.find($('.is-mail')).each(function(){
				var mail = $(this); 
				if((mail.attr('data-link') == num)){
					if(mail.height() == 0){
						tbl.find($('.is-mail')).height(0);
						tbl.find($('.is-mail')).css('padding', '0');
						var h = (mail.find('.mail').height());
						mail.height(h);
						mail.css('padding', '20px 0');
						row.eq(r.index()).css('border-top','1px solid rgba(0,0,0,0.12)');
					}
					else{
						mail.height(0);
						row.eq(r.index()).css('border-top','none');
						mail.css('padding', '0');
					}
				}
			});
		});
	});
	$('.is-upload').click(function(){
		var up = $(this);
		$('.up').removeClass('show');
		if(up.hasClass('is-upload-link')){
			if(up.hasClass('atv')) $('.up').removeClass('show');
			else $('.up').addClass('show');
		}
		$('.is-upload').removeClass('atv');
		up.addClass('atv');
	});
}
/* --- TRANG THANH TOÁN ---*/

function thanhtoan(){
	if ($('.paypage').length == 0) return;
	$('.bl').jScrollPane();
	$('.is-op').click(function(){
		var bt = $(this);
		var sh = bt.parent().find('.is-sh');
		var code = bt.parent().find('.code').height();
		var ip = bt.parent().find('.ip');
		ip.focus();
		ip.val('');
		if(bt.hasClass('atv') == true) {
			sh.height(0);
			bt.removeClass('atv');
		}
		else {
			sh.height(code + 10);
			bt.addClass('atv');
		}
	});
	$('.is-ckcode').click(function(){
		var bt = $(this);
		var box = bt.parent();
		var ip = box.find('.ip');
		if(false){
			if(ip.hasClass('is-ip-code')){
				ip.attr('placeholder','Nhập sai mã giảm giá');
				ip.addClass('wrong');
			}
			else{
				ip.attr('placeholder','Nhập sai số lượng xu');
				ip.addClass('wrong');
			}
		}
		else{
			box.addClass('avai');
		}
	});
	$('.is-cancelcode').click(function(){
		var bt = $(this);
		var sh = bt.parent().find('.is-sh');
		var ip = bt.parent().find('.ip');
		sh.height(0);
		ip.val('');
		bt.parent().removeClass('avai');
	});
	$('.is-ipcode').focus(function(){
		var ip = $(this);
		ip.removeClass('wrong');
		if(ip.hasClass('is-ip-code')) ip.attr('placeholder','Nhập mã giảm giá');
		else ip.attr('placeholder','Nhập số xu');
	})
	$('.is-pay').click(function(){
		var pay = $(this);
		$('.is-pay').removeClass('atv');
		pay.addClass('atv');
	});
}

/*--- POPUP ---*/

function popup(){
	$('.is-openpop').click(function(){
		var link = $(this).attr('data-pop');
		$('body').addClass('shp');
		$('.is-pop').removeClass('showpop');
		$('.is-pop').each(function(){
			var pop = $(this);
			if(pop.attr('data-pop') == link) pop.addClass('showpop');
		})
	});
	$('.is-bg').click(function(){
		$('.is-closepop').trigger('click');
	});
	$('.is-closepop').click(function(){
		$('.is-pop').removeClass('showpop');
		$('body').removeClass('shp');
	});
	$('.is-clrp').click(function(){
		$('body').addClass('clrp');
	});
}

/*-------------- CÁC FUNCTION LIÊN QUAN TÍNH TOÁN ---------------------*/
/* Xử lý giỏ hàng */

function checkHeightCart(){
	var l = $('.lica').length;
	var n = window.innerHeight - 182;
	if(l == 0) $('.cart').addClass('empty');
	if((l * 52) <= n) $('.lib').height(l * 52);
	else $('.lib').jScrollPane();
}
function cart(){
	$('.fa-trash-o').click(function(){
		var box = $(this).parent();
		var rowid = box.attr('id');
		//alert(id);
		var url = $('.logo').attr('href');
		$.ajax({
			url: url + 'xoa-sach',
			type: 'GET',
			data: {'rowid': rowid},
		}).done(function(data){
			unBlockAllItem(data.id);
			box.remove();
			checkHeightCart();
			$('.cart').find('.ab').html($('.lica').length);
			updateTotalPrice(data.total);
		}).fail(function (argument) {
			alert("Can't not delete. ")
			//window.location.reload();
			console.log('error');
		});
	});
}
function valueCart(){
	$('.is-up').unbind('click').click(function(){
		var fth = $(this).parent();
		var grfth = fth.parent();
		var numbox = grfth.find(".n");
		var num = parseInt(numbox.val()) + 1;
		numbox.val(num);
		if ($(this).hasClass('up-cart')){
			var lica = grfth.parent().parent();
			var qty = numbox.val();
			var rowid = lica.attr('id');
			var url = $('.logo').attr('href');
			$.ajax({
				url: url + 'cap-nhat-sach',
				type: 'GET',
				data: {'rowid': rowid, 'qty': qty},
			}).done (function(data){
				updateTotalPrice(data);
			}).fail (function (){
				alert("Can't update this time");
				//window.location.reload();
			});
		}
	});
	$('.is-down').unbind('click').click(function(){
		var fth = $(this).parent();
		var grfth = fth.parent();
		var numbox = grfth.find(".n");
		var num = parseInt(numbox.val()) - 1;
		if (num != 0) {
			numbox.val(num);
			if ($(this).hasClass('down-cart')){
				var lica = grfth.parent().parent();
				var qty = numbox.val();
				var rowid = lica.attr('id');
				var url = $('.logo').attr('href');
				$.ajax({
					url: url + 'cap-nhat-sach',
					type: 'GET',
					data: {'rowid': rowid, 'qty': qty},
				}).done (function(data){
					updateTotalPrice(data);
				}).fail (function (){
					alert("Can't update this time");
					//window.location.reload();
				});
			}
		}
	});
}

function blockAllItem(id){
	$('.cartbox').each(function(){
		var cart = $(this);
		if(cart.find('.b-id').val() == id) {
			 cart.addClass('ck');

		 	// console.log($(this).find('.b-id').val());
		}
	})
}
function unBlockAllItem(id){
	//console.log(id);
	$('.cartbox').each(function(){
		var cart = $(this);
		if(cart.find('.b-id').val() == id) {
			console.log(cart.find('.qty').val(1));
			cart.removeClass('ck');
		 	// console.log(id);
		}
	})
}

function updateTotalPrice(price){
	var total = parseInt(price);
	var item = $('.total').find('span');
	item.text(total.formatMoney(0)+'đ');
}

function addToCart(){
	valueCart();
	$('.addcart').click(function(){
		var button = $(this);
		var ins = button.parent();
		var qty = ins.find('.n').val();
		var id = ins.find('.b-id').val();
		var url = $('.logo').attr('href');
		$.ajax({
			url: url + 'mua-sach',
			type: 'GET',
			data: {"id": id, "qty": qty},
		}).done(function(data){
			var cartbox = $('.cart');
			var ab = cartbox.find('.ab');
			var lib = cartbox.find('.lib');
			cartbox.removeClass('empty');
			lib.find('.lica').remove();
			lib.html(data.cart);
			updateTotalPrice(data.total);
			ab.html($('.lica').length);
			checkHeightCart();
			cart();
			valueCart();
			blockAllItem(id);
		}).fail(function (){
			alert("Can't not buy this book now");
			//window.location.reload();
		});
	});
	$('.is-over-check').click(function(){
		$(this).addClass('atv');
	});
}
/* phân trang */
function phantrang(){
	if($('.numpage').length == 0) return;
	$('.page_number').each(function(){
		var bar=$(this);
		var numpage = bar.find('.numpage');
		var numprev = bar.find('.numprev');
		var numnext = bar.find('.numnext');
		var n = numpage.length;
		numpage.unbind('click').click(function(){
			var num = $(this);
			var gridbook = bar.parent();
			var data = gridbook.attr('data-link');
			if (!data) data = $('.is-menu.atv').attr('data-link');
			var limit = $('.numbook').find('select').val();
			var list = $('.is-menu.atv').attr('data-set');
			if ($('.grid').hasClass('list')) {list = 'list'};
			var link = num.attr('href');
			var sort = $('.fil').find('select').val();
			phantrangAjax(link, data, gridbook, limit, sort, list);
		});
		numprev.unbind('click').click(function(){
			var num = $(this);
			var gridbook = bar.parent();
			var data = gridbook.attr('data-link');
			if (!data) data = $('.is-menu.atv').attr('data-link');
			var limit = $('.numbook').find('select').val();
			var list = $('.is-menu.atv').attr('data-set');
			if ($('.grid').hasClass('list')) {var list = 'list'};
			var link = num.attr('href');
			var sort = $('.fil').find('select').val();
			phantrangAjax(link, data, gridbook, limit, sort, list);
		});
		numnext.unbind('click').click(function(){
			var num = $(this);
			var gridbook = bar.parent();
			var data = gridbook.attr('data-link');
			if (!data) data = $('.is-menu.atv').attr('data-link');	
			var limit = $('.numbook').find('select').val();
			var list = $('.is-menu.atv').attr('data-set');
			if ($('.grid').hasClass('list')) {var list = 'list'};
			var link = num.attr('href');
			var sort = $('.fil').find('select').val();
			phantrangAjax(link, data, gridbook, limit, sort, list);
		});
	});
}

function phantrangAjax(link,data,gridbook,limit,sort,list){
	$
	$.ajax({
		url: link,
		type: 'GET',
		data: {'data' : data, 'limit': limit, 'sort': sort, 'list': list},
	})
	.done(function(result) {
		gridbook.empty();
		gridbook.append(result);
		// gridbook.find('.pagination').empty();
		// gridbook.find('.pagination').append(result);
		phantrang();
		addToCart();
		limited();
		selectbox();
		authorDetail();
	})
	.fail(function() {
		//window.location.reload();
		console.log("error");
	});
}

// hàm show tab và chọn menu theo hashtag
function showTabByHash(){
	var hash = window.location.hash;
	$('.list.is-menu').each(function(){
		var menu = $(this);
		//console.log(hash.substring(1));
		if (menu.attr('data-set') == hash.substring(1))
			menu.trigger('click');

	});
}
Number.prototype.formatMoney = function(c, d, t){
	var n = this, 
    c = isNaN(c = Math.abs(c)) ? 2 : c, 
    d = d == undefined ? "," : d, 
    t = t == undefined ? "." : t, 
    s = n < 0 ? "-" : "", 
    i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
    j = (j = i.length) > 3 ? j % 3 : 0;
   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}
function change() {
  	$(window).on('hashchange', function (){
    	showTabByHash();
	}).trigger('hashchange');



}