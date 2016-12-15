$(document).ready(function(){
	/* Height of Content, set Min*/
	var h = $(document).height();
	$('.content').css({'min-height':(h-70)+'px'});
	/* Collapse Content in .box */
	$(".collapse").click(function(event){
		event.preventDefault()
		if($(this).closest('.box').find('.collapsible').css('display') == 'none'){
			$(this).closest('.box').find('.collapsible').show();
			$(this).css({'background':'url(images/collapse.svg) no-repeat 8px -17px','background-size':'12px 60px'});
		}else{
			$(this).closest('.box').find('.collapsible').hide();
			$(this).css({'background':'url(images/collapse.svg) no-repeat 8px 0px','background-size':'12px 60px'});
		}
	});
	/* Profile */
	$(".graprofile span").click(function(){
		if($(".profile").css('display') == 'block'){			
			$(".profile").animate({'top':'75px','opacity':0},400).hide();	
		}else{
			$(".profile").show().animate({'top':'35px','opacity':1},400);
		};
	});
	/* if click navi on droplist */
	$(".opendrop").click(function(e){
		//e.preventDefault();
		if($(this).parent('li').find(".dropmenu").css('display') == 'block'){
			$('.hasdrop .dropmenu').hide();
			//$(this).find(".dropmenu").hide();
		}else{
			$('.hasdrop .dropmenu').hide();
			$(this).parent('li').find(".dropmenu").show();
		}	
	});
	/* Pop up */
	$(".open-pop").click(function(e){
		e.preventDefault();
		$(".grabpopup").show();
		$(".popup").animate({'top':'80px'},200);
	});
	$(".close-pop,.inline-close-pop").click(function(e){
		e.preventDefault();
		$(".popup").animate({'top':'-60px'},100);
		setTimeout(function(){
			$(".grabpopup").hide();
		},200);
		
	});
	/* Add Close Button to Alerts */
	$(".alerts .alert").append('<div onclick="closealert()"  class="close-alert">Close</div>');
});
/* Close Alert Message */
//function closealert(){	
	//$(this).css({'background':'red'});
//}