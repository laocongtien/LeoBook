$(function(){
	selectbox();
	tblSort();
	check();
	phantrang();
	filter();
	tabbox();
	index();
	show();
});
function selectbox(){
	if($('.is-sl').length == 0) return;
	$(".is-sl").selectbox({
		effect: "fade"
	});
}
//Sắp xếp trong mỗi bảng
function tblSort(){
	$('.is-sort').click(function(){
		var cl = $(this);
		var s = cl.find('.ics');
		if (cl.hasClass('atv')){
			if(s.hasClass('down')) s.removeClass('down'); else s.addClass('down');
		}
		else{
			$('.is-sort').removeClass('atv');
			cl.addClass('atv');
		}
	});
}
//Hàm chọn đối tượng
function check(){
	n = $('.is-ck').length;
	$('.is-ck').click(function(){
		var sq = $(this);
		var r = sq.parent().parent();
		if (sq.hasClass('fa-square-o')) {
			sq.removeClass('fa-square-o').addClass('fa-check-square');
			r.addClass('ck');
			if($('.is-ck.fa-check-square').length > 1) $('th.sb').addClass('all');
			if($('.is-ck.fa-check-square').length == n) {
				$('.is-ck-all').addClass('fa-check-square').removeClass('fa-square-o');
			}
		}
		else {
			$('.is-ck-all').removeClass('fa-check-square').addClass('fa-square-o');
			sq.removeClass('fa-check-square').addClass('fa-square-o');
			if($('.is-ck.fa-check-square').length == 1) $('th.sb').removeClass('all');
			r.removeClass('ck');
		}
	});
	$('.is-ck-all').click(function(){
		var all = $(this);
		if(all.hasClass('fa-square-o')) {
			all.removeClass('fa-square-o').addClass('fa-check-square');
			$('th.sb').addClass('all');
			$('.is-ck').removeClass('fa-square-o').addClass('fa-check-square');
			$('tbody tr').addClass('ck');
		}
		else {
			all.removeClass('fa-check-square').addClass('fa-square-o');
			$('th.sb').removeClass('all');
			$('.is-ck').removeClass('fa-check-square').addClass('fa-square-o');
			$('tbody tr').removeClass('ck');
		}
	});
}
//show danh mục
function show(){
	$('.is-show').click(function(){
		var link = $(this).attr('data-link');
		for(i = 0; i < $('.is-tbl-clone').length; i++){
			if($('.is-tbl-clone').eq(i).attr('data-link') == link) {
				swap($('.is-tbl-clone').eq(i), $('.is-tbl-clone').eq(i + 1));
				return;
			}
		}
	});
}
function swap(a,b){
	var c = a.html();
	a.html(b.html());
	b.html(c);
}
//phân trang
function phantrang(){
	if($('.numpage').length == 0) return;
	$('.page_number').each(function(){
		var bar=$(this);
		var n = bar.find('.numpage').length;
		var numpage = bar.find('.numpage');
		var numprev = bar.find('.numprev')
		var numnext = bar.find('.numnext')
		numpage.unbind('click').click(function(){
			var num = $(this);
			numprev.removeClass('hide');
			numnext.removeClass('hide');
			numpage.removeClass('atv');
			num.addClass('atv');
			if (parseInt(num.html()) == 1) numprev.addClass('hide');
			if(num.html() == numpage.eq(n - 1).html()) numnext.addClass('hide');
		});
		numprev.unbind('click').click(function(){
			var num;
			for (var i = 0; i <= n; i++) {
				if(numpage.eq(i).hasClass('atv')) 
					{
						num = parseInt(numpage.eq(i).html());
						numpage.eq(i - 1).trigger('click');
						return;
					}
			}
		});
		numnext.unbind('click').click(function(){
			var num;
			for (var i = 0; i <= n; i++) {
				if(numpage.eq(i).hasClass('atv')) 
				{
					num = parseInt(numpage.eq(i).html());
					numpage.eq(i + 1).trigger('click');
					return;
				}
			}
		});
	});
}
//click flilter
function filter(){
	$('.fil').click(function(){
		var f = $(this);
		$('.fil').removeClass('atv');
		f.addClass('atv')
	})
}
//tabbox
function tabbox(){
	if($('.is-box').length == 0) return;
	$('.is-box').each(function(){
		var box = $(this);
		var menu = box.find('.is-menu');
		var tab = box.find('.is-tab');
		var num = tab.length;
		tab.hide();
		box.find('.is-tab:first').show();
		box.find('.is-menu:first').addClass('atv');
		menu.click(function(){
			var mn = $(this);
			menu.removeClass('atv');
			mn.addClass('atv');
			var link = mn.attr('data-link');
			tab.hide();
			tab.each(function(){
				var tb = $(this);
				if (tb.attr('data-link') == link){
					tb.show();
					limited();
				}
			});
		});
	});
}
function index(){
	$('.js-sc').jScrollPane();
}