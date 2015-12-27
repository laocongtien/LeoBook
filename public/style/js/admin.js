$(function(){
	selectbox();
	tblSort();
	check();
	phantrang();
	filter();
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
			if($('.is-ck.fa-check-square').length == n) {
				$('.is-ck-all').addClass('fa-check-square').removeClass('fa-square-o');
				$('.table').addClass('all');
			}
		}
		else {
			$('.is-ck-all').removeClass('fa-check-square').addClass('fa-square-o');
			$('table').removeClass('all');
			sq.removeClass('fa-check-square').addClass('fa-square-o');
			r.removeClass('ck');
		}
	});
	$('.is-ck-all').click(function(){
		var all = $(this);
		if(all.hasClass('fa-square-o')) {
			all.removeClass('fa-square-o').addClass('fa-check-square');
			$('.table').addClass('all');
			$('.is-ck').removeClass('fa-square-o').addClass('fa-check-square');
			$('tbody tr').addClass('ck');
		}
		else {
			all.removeClass('fa-check-square').addClass('fa-square-o');
			$('.table').removeClass('all');
			$('.is-ck').removeClass('fa-check-square').addClass('fa-square-o');
			$('tbody tr').removeClass('ck');
		}
	});
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