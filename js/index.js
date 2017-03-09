//requirejs.config({
//	shim:{
//		'jquery.lightbox': ['jquery']
//	}
//});
require(['jquery','lightbox'],function($,lb){
	//导航栏
	var $nav = $('#nav'),
	$navIcon = $('.nav-icon',$nav),
	$navCloseIcon = $('.nav-close-icon',$nav),
	$navMenuBox = $('.nav-menu-box',$nav);
	$navIcon.on('click',function(){
		$navMenuBox.animate({top:0 +'em'});
	});
	$navCloseIcon.on('click',function(){
		$navMenuBox.animate({top:-12 +'em'});
	});
	//portfolio

	$('#portfolio li').hover(function(){
		$(this).children('img').stop().animate({
			width:305,
			height:193,
			marginLeft:-10,
			marginTop:-7
		});
		$(this).children('.mask').stop().show().animate({
			opacity:0.84
		});
	},function(){
		$(this).children('img').stop().animate({
			width:285,
			height:180,
			marginLeft:0,
			marginTop:0
		});
		$(this).children('.mask').stop().animate({
			opacity:0
		},function(){
			$(this).hide();

		});
	}).on('click',function(){
		console.log($(this).data('src'));
	});
	lb.open();

});