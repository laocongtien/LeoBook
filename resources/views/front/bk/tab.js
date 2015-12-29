//hàm chuyển tab sẽ thay đổi hash
if(window.location.hash) showTabByHash()
		box.find('.is-tab:first').show();
		box.find('.is-menu:first').addClass('atv');
		menu.unbind('click').click(function(){
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
						var limit = $('.numbook').find('select').val();
						var sort = $('.fil').find('select').val();
						if ($('.grid').hasClass('list')) {var list = 'list'} else {var list =''};
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