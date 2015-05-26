/*
 * Nome: script.js
 * Desenvolvido por: Rafael Damasio (Phorma Design)
 * Data da Criação: 03-04-2015
 * Copyright (c) 2015 - Q.Malteria?
 */

initializeMaps();
var ua = navigator.userAgent;
//console.log(ua);
var tChrome = /Chrome/g;
var ie = /.NET/g;

$(document).ready(function(){

	var largJan = $(window).width();

	animateMenu = function(height){
		$(".menu ul").animate({
			height: height
		}, 200, function(){
			if(height == 0){
				$(this).css("margin-top", "0");
			}
		});
	}

	$(".bt-menu-toggle").on("click", function(e){
		var $this = $(this);
		e.stopPropagation();
		e.preventDefault();
		verHeight = $(".menu ul").height();
		if(parseInt(verHeight) == 0){
			verHeight = 268;
			$(".menu ul").css("margin-top", "60px");
			animateMenu(verHeight);
		} else {
			verHeight = 0;
			animateMenu(verHeight);
		}
	});

	bodyAltura = function(){
		//alert($(window).height());
		var alturaBody = $(window).height();
		//alert(alturaBody);
		if(parseInt(alturaBody) > 922){
			$(".content-item p").height($(".content-item p").height()+(parseInt(alturaBody)-922));
			$("#contato p").height(parseInt(alturaBody)-922);
		} else if(parseInt(alturaBody) < 922){
			$("body").addClass("hd-screen");

			//alert($("#contato p").height());
			//console.log($(".content-item p").height());
		}
	}

	checaScroll = function(itemScroll, direction){
		itemScroll = itemScroll.split("|");
		//console.log(itemScroll[0]);
		//console.log(itemScroll[1]);

		var idThis = itemScroll[0];
		var indexThis = itemScroll[1];	
		var novoIndex = (direction == "down") ? parseInt(indexThis)+1 : parseInt(indexThis)-1;

		var novoId = $(".menu ul li").eq(novoIndex).find("a").attr("href");

		//console.log(novoIndex);

		$(".bt-scroll").removeClass("active");

		//topPage = parseInt($(novoId).offset().top)-310;

		topPage = ($("body").hasClass("hd-screen")) ? parseInt($(novoId).offset().top)-325 : parseInt($(novoId).offset().top)-350;

		$("html, body").animate({
			scrollTop: topPage
		}, 500, function(){
			$(".menu ul li").eq(novoIndex).find("a").addClass("active");
		});
	}

	if(parseInt(largJan) >= 1024){
		if(window.addEventListener){
			//window.addEventListener('onmousewheel',wheel,false);
			window.addEventListener('DOMMouseScroll',wheel,false);
		}
	}

	function wheel(event){
		if(parseInt(largJan) >= 1360){
			//event.preventDefault();
			//event.returnValue=true;
		}
    	//console.log(event);
		itemScroll = function(){
	    	var returnThis;
		    $(".menu ul li a").each(function(){
		    	var $this = $(this);
		    	var idItemScroll = $this.attr("href");
		    	var idItemIndex = $this.parent().index();
		    	
		    	if($this.hasClass("active")){
		    		returnThis = idItemScroll+"|"+idItemIndex;
		    	}
		    });
		    return returnThis;
		}

		if(tChrome.test(ua) || ie.test(ua)){
			//console.log(itemScroll().split("|")[1]);
			if(event.wheelDelta > 0 && parseInt(itemScroll().split("|")[1]) > 0){
				if(parseInt(largJan) >= 1360){
		    		//checaScroll(itemScroll(), "up");
		    	}
		    } else if(event.wheelDelta < 0 && parseInt(itemScroll().split("|")[1]) < 8) {
		    	if(parseInt(largJan) >= 1360){
		    		//checaScroll(itemScroll(), "down");
		    	}
		    }
		} else {
			if(event.detail > 0 && parseInt(itemScroll().split("|")[1]) < 8){
				if(parseInt(largJan) >= 1360){
		    		//checaScroll(itemScroll(), "down");
		    	}
		    } else if(event.detail < 0 && parseInt(itemScroll().split("|")[1]) > 0) {
		    	if(parseInt(largJan) >= 1360){
		    		//checaScroll(itemScroll(), "up");
		    	}
		    }
		}
	}

	window.onmousewheel=document.onmousewheel=wheel;

	scrollMenu = function(scrollTop){
		if(scrollTop > 114){
			$(".header-alternative").addClass("header-visible");
		} else {
			$(".header-alternative").removeClass("header-visible");
		}
	}

	$(window).scroll(function(){
		var $this = $(this),
		scrollTop = $this.scrollTop();
		scrollMenu(scrollTop);
	});

	scrollButtom = function(){
		$(".bt-scroll-disable").on("click", function(e){
			e.preventDefault();
			e.stopPropagation();
		});

		if(parseInt(largJan) >= 1024){
			$(".bt-scroll").on("click", function(e){
				e.preventDefault();
				e.stopPropagation();
				var $this = $(this),
				thisTop = $this.attr("href");
				topPage = ($("body").hasClass("hd-screen")) ? parseInt($(thisTop).offset().top)-325 : parseInt($(thisTop).offset().top)-350;
				$(".bt-scroll").removeClass("active");
				$this.addClass("active");
				$("html, body").animate({
					scrollTop: topPage
				}, 1000);
			});
		} else {
			$(".bt-scroll").on("click", function(e){
				e.preventDefault();
				e.stopPropagation();
				var $this = $(this),
				thisTop = $this.attr("href");
				topPage = parseInt($(thisTop).offset().top);
				topPage = parseInt(topPage)-parseInt($(".header-alternative").height());
				/*if(thisTop != "#sobre"){
					topPage = parseInt(topPage)-parseInt($(".header-alternative").height());
				}*/
				$("html, body").animate({
					scrollTop: topPage
				}, 1000);
			});
		}
	}
	
	$("#overflow-loading").height($(window).height());
	
	fechaLoading = function(){
		$("#overflow-loading").fadeOut();
		$("#loading").fadeOut();
	}
	
	carregaLoading = function(){
		$("#overflow-loading").height($(window).height());
		$("#overflow-loading").fadeIn(100);
		$("#loading").fadeIn(100);
	}

	if(tChrome.test(ua)){
		fechaLoading();
		window.setTimeout(function(){
			$("html, body").animate({
				scrollTop: 0
			}, 500, function(){
				bodyAltura();
				scrollButtom();
			});
		}, 3000);
	} else if(ie.test(ua)){
		window.setTimeout(function(){
			$("html, body").animate({
				scrollTop: 0
			}, 500, function(){
				bodyAltura();
				fechaLoading();
				scrollButtom();
			});
		}, 3000);
	} else {
		$("html").animate({
			scrollTop: 0
		}, 500);

		$("body").animate({
			scrollTop: 0
		}, 500, function(){
			bodyAltura();
			fechaLoading();
			scrollButtom();
		});
	}

	$(".link-whatsapp").on("click", function(e){
		e.stopPropagation();
		e.preventDefault();
	});

	//RAFAEL DAMASIO
});