$(function(){
	selectbox();
	tabbox();
	listpage();
	index();
	cate();
	book();
	combo();
});
function listpage(){
	if($('table').length == 0) return;
	tblSort();
	check();
	phantrang();
	filter();
	delRow();
}
function selectbox(){
	if($('.is-sl').length == 0) return;
	$('.is-sl').selectbox({
		effect: 'fade'
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

//Xóa dòng table
function delRow(){
	var n;
		$('.fa-trash').click(function(){
			n = $(this).attr('data-link');
			$('.popup').addClass('show');
		});
		$('.update').click(function(){
			$('.table').each(function(){
				var tbl = $(this);
				var tr = tbl.find('tr');
				$(tr).each(function(){
					var r = $(this);
					if(r.attr('data-link') == n){
						if((r.hasClass('lv1')) && (tbl.find('.lv2').length != 0)){
							alert("Còn danh mục con, không thể xóa danh mục cấp 1");
							$('.popup').removeClass('show');
							return;
						}
						else{
							r.remove();
							alert("Xóa thành công");
							$('.popup').removeClass('show');
							checkLv2();
							return;
						}
					}
				})
			});
		});
		$('.cancel').click(function(){
			$('.popup').remove();
		});
		$('.bg_pop').click(function(){
			$('.cancel').trigger('click');
		});
		$('.fa-close').click(function(){
			$('.cancel').trigger('click');
		})
}

function swap(a,b){
	var c = a.html();
	a.html(b.html());
	b.html(c);
}
function swapAttr(a, b){
	var c = a.attr('data-link');
	a.attr('data-link',b.attr('data-link'));
	b.attr('data-link',c);
}
/*---------CÁC HÀM CỦA TRANG DANH MỤC---------------*/
function cate(){
	if($('.cate').length == 0) return;
	disableUpDown();
	checkLv2();
	showCateLv2();
	swapRow();
}
// disable up down
function disableUpDown(){
	$('.is-up').removeClass('disable');
	$('.is-down').removeClass('disable');
	$('.is-tbl-clone:first tr.lv1 .is-up').addClass('disable');
	$('.is-tbl-clone:last tr.lv1 .is-down').addClass('disable');
	$('.is-tbl-clone').each(function(){
		var tbl = $(this);
		tbl.find('tr.lv2:first .is-up').addClass('disable');
		tbl.find('tr.lv2:last .is-down').addClass('disable');
	});
}
//Thay đổi vị trí danh mục
function swapRow(){
	$('.is-up').unbind('click').click(function(){
		var link = $(this).attr('data-link');
		for(i = 0; i < $('.is-tbl-clone tr').length; i++){
			if($('.is-tbl-clone tr').eq(i).attr('data-link') == link) {
				if ($('.is-tbl-clone tr').eq(i).hasClass('lv1')) {
					for (j = 0; j < $('tr.lv1').length; j++) {
						if($('.is-tbl-clone tr.lv1').eq(j).attr('data-link') == link) {
							swap($('.is-tbl-clone').eq(j),$('.is-tbl-clone').eq(j-1));
							swapAttr($('.is-tbl-clone').eq(j),$('.is-tbl-clone').eq(j-1));
							cate();
							listpage();
							$('.is-tbl-clone').eq(j).find('tr').addClass('ck');
							$('.is-tbl-clone').eq(j-1).find('tr').addClass('ck');
							setTimeout(function(){
								$('.is-tbl-clone').eq(j).find('tr').removeClass('ck');
								$('.is-tbl-clone').eq(j-1).find('tr').removeClass('ck');
							},1000)
							return;
						}
					}
				}
				else if($('.is-tbl-clone tr').eq(i).hasClass('lv2')){
					$('.is-tbl-clone').each(function(){
						var tbl = $(this);
						var lv2 = tbl.find('tr.lv2');
						for (j = 0; j < lv2.length; j++) {
							if(lv2.eq(j).attr('data-link') == link) {
								swap(lv2.eq(j),lv2.eq(j-1));
								swapAttr(lv2.eq(j), lv2.eq(j-1));
								cate();
								listpage();
								lv2.eq(j).addClass('ck');
								lv2.eq(j-1).addClass('ck');
								setTimeout(function(){
									lv2.eq(j).removeClass('ck');
									lv2.eq(j-1).removeClass('ck');
								},1000)
								return;
							}
						}
					});
				}
				return;
			}
		}
	});
	$('.is-down').unbind('click').click(function(){
		var link = $(this).attr('data-link');
		for(i = 0; i < $('.is-tbl-clone tr').length; i++){
			if($('.is-tbl-clone tr').eq(i).attr('data-link') == link) {
				if ($('.is-tbl-clone tr').eq(i).hasClass('lv1')) {
					for (j = 0; j < $('tr.lv1').length; j++) {
						if($('.is-tbl-clone tr.lv1').eq(j).attr('data-link') == link) {
							swap($('.is-tbl-clone').eq(j),$('.is-tbl-clone').eq(j+1));
							swapAttr($('.is-tbl-clone').eq(j),$('.is-tbl-clone').eq(j+1));
							cate();
							listpage();
							$('.is-tbl-clone').eq(j).find('tr').addClass('ck');
							$('.is-tbl-clone').eq(j+1).find('tr').addClass('ck');
							console.log($('.is-tbl-clone').eq(j+1).find('tr .cl2').html());
							setTimeout(function(){
								$('.is-tbl-clone').eq(j).find('tr').removeClass('ck');
								$('.is-tbl-clone').eq(j+1).find('tr').removeClass('ck');
							},1000)
							return;
						}
					}
				}
				else if($('.is-tbl-clone tr').eq(i).hasClass('lv2')){
					$('.is-tbl-clone').each(function(){
						var tbl = $(this);
						var lv2 = tbl.find('tr.lv2');
						for (j = 0; j < lv2.length; j++) {
							if(lv2.eq(j).attr('data-link') == link) {
								swap(lv2.eq(j),lv2.eq(j+1));
								swapAttr(lv2.eq(j), lv2.eq(j+1));
								cate();
								listpage();
								lv2.eq(j).addClass('ck');
								lv2.eq(j+1).addClass('ck');
								setTimeout(function(){
									lv2.eq(j).removeClass('ck');
									lv2.eq(j+1).removeClass('ck');
								},1000)
								return;
							}
						}
					});
				}
				return;
			}
		}
	});
}
//show danh mục
function showCateLv2(){
	$('.cate_table').each(function(){
		var tbl = $(this);
		var btn = tbl.find('.is-show');
		btn.unbind('click').click(function(){
			var sh = $(this);
			if (sh.hasClass('fa-angle-double-down')){
				sh.addClass('fa-angle-double-right').removeClass('fa-angle-double-down');
				tbl.find('.lv2').hide();
				if($('.is-show.fa-angle-double-right').length == $('tr.lv1').length) {
					$('.is-show-all').addClass('fa-angle-double-right').removeClass('fa-angle-double-down');
				}
			}
			else {
				sh.removeClass('fa-angle-double-right').addClass('fa-angle-double-down');
				tbl.find('.lv2').show();
				if($('.is-show.fa-angle-double-right').length != $('tr.lv1').length) {
					$('.is-show-all').addClass('fa-angle-double-down').removeClass('fa-angle-double-right');
				}
			}
		});
	});
	$('.is-show-all').unbind('click').click(function(){
		var all = $(this);
		if(all.hasClass('fa-angle-double-down')) {
			$('.is-show-all').addClass('fa-angle-double-right').removeClass('fa-angle-double-down');
			$('.is-show').addClass('fa-angle-double-right').removeClass('fa-angle-double-down');
			$('.lv2').hide();
		}
		else{
			$('.is-show-all').removeClass('fa-angle-double-right').addClass('fa-angle-double-down');
			$('.is-show').removeClass('fa-angle-double-right').addClass('fa-angle-double-down');
			$('.lv2').show();	
		}
	});
}
//Ẩn show lv2 nếu lv1 không có lv2
function checkLv2(){
	$('.is-tbl-clone').each(function(){
		var tbl = $(this);
		if(tbl.find('.lv2').length == 0) tbl.find('.is-show').addClass('hid');
	})
}

/*------QUẢN LÝ SÁCH---------*/
function book(){
	if($('.book').length == 0) return;
	if($('.book').hasClass('edit') == false) $('input').val('');
}
//Nhập tác giả
function ipath(){
	var ath = $('.is-add-ath').val();
	$('.is-add-ath').remove();
	$('.ipb').append(function(){
		return '<div class="b">' + ath + '<div class="fa fa-close"></div></div>'
	});
	$('.ipb').append('<input list="auth" class="aip is-add-ath" placeholder="Nhập tác giả" onchange="ipath()" />');
	removeAth();
}
//Xóa tác giả
function removeAth(){
	$('.ipb .fa-close').click(function(){
		$(this).parent().remove();
	});
}
//phân trang

/*-------Combo--------------*/
function combo(){
	if($('.combo').length == 0) return;
	if($('.combo').hasClass('edit') == false) $('input').val('');
	additemcombo();
}

	var n = 0;
function additemcombo(){
	$('.is-combo-add').find('.bta').click(function(){
		var bt = $(this);
		n++;
		$('.is-combo-add').remove();
		if(bt.hasClass('is-combo-abook')) {
			$('.is-addto-combo').append(function(){
				return '\
				<div class="item"><!--Thêm sách-->\
			        <div class="ttl">\
			            #item' + n +
			        '</div>\
			        <div class="fgr">\
			            <div class="l">\
			                Thêm Sách\
			            </div>\
			            <input type="text" class="ip" placeholder="Nhập link sách" onchange="addcombo()">\
			        </div>\
			    </div>\
			    <div class="fgr is-combo-add">\
			        <div class="lb">\
			            <span class="fa fa-plus-circle"></span>\
			            <div class="bta is-combo-abook">Thêm sách</div>\
			            <div class="bta is-combo-aother">Thêm khác</div>\
			        </div>\
			    </div>\
			'});
			additemcombo();
		}
		else {
			$('.is-addto-combo').append(function(){
				return '\
				<div class="item"><!--Thêm khác-->\
			        <div class="ttl">\
			            #item' + n +
			        '</div>\
			        <div class="fgr">\
			            <div class="l">\
			                Thêm khác\
			            </div>\
			            <input type="text" class="ip" placeholder="Nhập tên sản phẩm">\
			        </div>\
			        <div class="fgr">\
			            <div class="l">\
			                Ảnh sản phẩm\
			            </div>\
			            <input type="text" class="ip" value="Thay cái này = box nhập ảnh">\
			        </div>\
			        <div class="fgr">\
			            <div class="l">\
			                Thông tin sản phẩm\
			            </div>\
			            <textarea name="" id="" cols="30" rows="10" class="itr"></textarea>\
			        </div>\
			    </div>\
			    <div class="fgr is-combo-add">\
			        <div class="lb">\
			            <span class="fa fa-plus-circle"></span>\
			            <div class="bta is-combo-abook">Thêm sách</div>\
			            <div class="bta is-combo-aother">Thêm khác</div>\
			        </div>\
			    </div>\
			'});
			additemcombo();
		}
	});
}

/*---------------------*/
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

///popup

function popup(){
}