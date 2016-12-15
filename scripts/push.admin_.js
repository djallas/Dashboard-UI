$(document).ready(function(){
	var w = $(document).width();
	var h = $(document).height();
	var n = $(".grabnavi").width();	

	var navi = parseInt($('.grabcontent').height()+60);
	
	$(".grabnavi").css('height', (navi < $(window).height()?$(window).height():navi))
	
	var b = w - n;
	$(".grabbody").css({'width': ""+b+"px"});
	var hb = $(".grabbody").width();
	$(".grabcontent").css({'width': ""+(hb - $(".grabinfo").width() - 250)+"px"});
	jQuery(window).resize(function() {
		var w = $(window).width();
		var n = $(".grabnavi").width();	
		var b = w - n;
		$(".grabbody").css({'width': ""+b+"px"});
		$(".grabcontent").css({'width': ""+(w - n - $(".grabinfo").width() - 55)+"px"});
	});
	/* switch */
	var switched = localStorage.getItem('switch');
	if(switched == null){
		localStorage.setItem('switch',false);
		var sval = false;
		$(".grabnavi").addClass("switched");
	}else{
		switched = localStorage.getItem('switch');
		if(switched === 'false'){			
			var sval = false;
			$(".grabnavi").addClass("switched");
			$(".grabbody").css({'width': ""+(w - 60)+"px"});
			$(".grabcontent").css({'width': ""+(w - $(".grabinfo").width() - 110)+"px"});
		}else{
			$(".grabnavi").removeClass("switched");
			$(".grabbody").css({'width': ""+(w - 230)+"px"});
			$(".grabcontent").css({'width': ""+(w - $(".grabinfo").width() - 280)+"px"});
			var sval = true;
		}
	}
	/* option button, prompt more option */
	$(".txtbtn .option").click(function(){	
		if($(this).parent('div').find('ul').css('display') == 'block'){
			$(".txtbtn ul").hide();
			$(this).parent('div').find('ul').css({'margin-right':'50px'}).hide();
		}else{
			$(".txtbtn ul").hide();
			$(this).parent('div').find('ul').show().animate({'margin-right':'25px'},200);
		}

	});
	$(".switch").click(function(){
		$('.hasdrop .dropmenu').hide();				
		switched = localStorage.getItem('switch');
		if(switched === 'false'){			
			var sval = true;
			localStorage.setItem('switch',true);			
			//$(".grabnavi").animate({'width':'120px'});
			$(".grabnavi").removeClass("switched");
			$(".grabbody").css({'width': ""+(w - 230)+"px"});
			$(".grabcontent").css({'width': ""+(w - $(".grabinfo").width() - 280)+"px"});
		}else{			
			var sval = false;
			localStorage.setItem('switch',false);
			$(".grabnavi").addClass("switched");
			$(".grabbody").css({'width': ""+(w - 60)+"px"});
			$(".grabcontent").css({'width': ""+(w - $(".grabinfo").width() - 110)+"px"});
		}
	});
	/* switch end */
	/* Profile */
	$(".graprofile span").click(function(){
		if($(".profile").css('display') == 'block'){			
			$(".profile").animate({'top':'75px','opacity':0},400).hide();	
		}else{
			$(".profile").show().animate({'top':'35px','opacity':1},400);
		}
	});

	/* if click navi on droplist */
	$("li.hasdrop").click(function(e){
		e.preventDefault();
		if($(this).find(".dropmenu").css('display') == 'block'){
			$('.hasdrop .dropmenu').hide();
			//$(this).find(".dropmenu").hide();
		}else{
			$('.hasdrop .dropmenu').hide();
			$(this).find(".dropmenu").show();
		}	
		/* if menu is minimized */
		switched_with_drop = localStorage.getItem('switch');
		if(switched_with_drop == false){
			e.preventDefault(true);
		}	
	});
	/* enable top-level click if no droplist on navi */
	$(".grabnavi li.hasdrop .dropmenu a").click(function(e){
		e.stopPropagation();		
	});
	/* enable top-level click if no droplist on navi */
	$(".grabnavi li").click(function(){
		//$(this).siblings().css({'background':'none'});	
		//$(this).css({'background':'url(images/onclick.gif) no-repeat 0 0'});		
	});

	/* treat logo width and height */
	$.each($(".artlogo"), function(){
		var imgwid = $(this).find('img').width();
		var imghgt = $(this).find('img').height();
		var contlogow = $(".artlogo").width();
		var contlogoh = $(".artlogo").width();
		//alert(contlogoh+" "+imgwid +" "+ imghgt);
		if(imgwid > imghgt){
			//alert(imgwid > imghgt);
			//$(".artlogo img").css({'width':contlogow,'height':'auto'});
		}else{
			//alert(imgwid < imghgt);
			//$(".artlogo img").css({'width':contlogow+'!important'});
		}
	});
	//alert(navi+" "+$(".grabnavi").height());
	$('.tipper').hover(function(){
					// Hover over code
					var title = $(this).attr('title');
					$(this).data('tipText', title).removeAttr('title');
					$('<p class="tooltip"></p>')
					.text(title)
					.appendTo('body')
					.fadeIn('slow');
			}, function() {
				// Hover out code
				$(this).attr('title', $(this).data('tipText'));
				$('.tooltip').remove();
			}).mousemove(function(e) {
					var mousex = e.pageX + 20; //Get X coordinates
					var mousey = e.pageY + 10; //Get Y coordinates
					$('.tooltip')
					.css({ top: mousey, left: mousex })
			});
});