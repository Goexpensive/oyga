jQuery(function($) {
	"use strict";
	// Author Code Here

	var owlPricing;
	var ratio = 2;

	// Window Load
	$(window).load(function() {
		// Preloader
		$('.intro-tables, .parallax, header').css('opacity', '0');
		$('.preloader').addClass('animated fadeOut').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
			$('.preloader').hide();
			$('.parallax, header').addClass('animated fadeIn').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
				$('.intro-tables').addClass('animated fadeInUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend');
			});
		});

		// Header Init
		
		if ($(window).height() > $(window).width()) {
			var ratio = $('.parallax').width() / $('.parallax').height();
			$('.parallax img').css('height', ($(window).height()) + 'px');
			$('.parallax img').css('width', $('.parallax').height() * ratio + 'px');
		}
		
		$('section .cut').each(function() {
			if ($(this).hasClass('cut-top'))
				$(this).css('border-right-width', $(this).parent().width() + "px");
			else if ($(this).hasClass('cut-bottom'))
				$(this).css('border-left-width', $(this).parent().width() + "px");
		});



		// Navbar Init
		$('nav').addClass('original').clone().insertAfter('nav').addClass('navbar-fixed-top').css('position', 'fixed').css('top', '0').css('margin-top', '0').removeClass('original');
		$('.mobile-nav ul').html($('nav .navbar-nav').html());
		$('nav.navbar-fixed-top .navbar-brand img').attr('src', $('nav.navbar-fixed-top .navbar-brand img').data("active-url"));
		$('nav.navbar-fixed-top .btn').addClass('btn-orange-fill').removeClass('btn-white-fill');
		// Typing Intro Init
		$(".typed").typewriter({
			speed: 60
		});


		// Onepage Nav
		$('.navbar.navbar-fixed-top .navbar-nav').onePageNav({
			currentClass: 'active',
			changeHash: false,
			scrollSpeed: 400,
		});
		//Buttons Navigation
		$(".add-intro-item").click(function(e){
		    e.preventDefault();

		    var href = $(this).attr('href');
		    var offset = $(href).offset().top - 65;

		    $("html, body").animate({
		        scrollTop: offset
		    }, 400);

		});

		$(".btn-pink-border").click(function(e){
		    e.preventDefault();

		    var href = $(this).attr('href');
		    var offset = $(href).offset().top - 65;

		    $("html, body").animate({
		        scrollTop: offset
		    }, 400);

		});
	});


	// Window Scroll
	function onScroll() {
		if ($(window).scrollTop() > 50) {
			$('nav.original').css('opacity', '0');
			$('nav.navbar-fixed-top').css('opacity', '1');
		} else {
			$('nav.original').css('opacity', '1');
			$('nav.navbar-fixed-top').css('opacity', '0');
		}
	}

	window.addEventListener('scroll', onScroll, false);

	// Window Resize
	$(window).resize(function() {
		$('header').height($(window).height());
	});

	// Mobile Nav
	$('body').on('click', 'nav .navbar-toggle', function() {
		event.stopPropagation();
		$('.mobile-nav').addClass('active');
	});

	$('body').on('click', '.mobile-nav a', function(event) {
		$('.mobile-nav').removeClass('active');
		if(!this.hash) return;
		event.preventDefault();
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			event.stopPropagation();
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});

	$('body').on('click', '.mobile-nav a.close-link', function(event) {
		$('.mobile-nav').removeClass('active');
		event.preventDefault();
	});

	$('body').on('click', 'nav.original .navbar-nav a:not([data-toggle])', function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			event.stopPropagation();
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});


	//Video Header
	//jQuery is required to run this code
		$( document ).ready(function() {

		    scaleVideoContainer();

		    initBannerVideoSize('.video-container .poster img');
		    initBannerVideoSize('.video-container .filter');
		    initBannerVideoSize('.video-container video');

		    $(window).on('resize', function() {
		        scaleVideoContainer();
		        scaleBannerVideoSize('.video-container .poster img');
		        scaleBannerVideoSize('.video-container .filter');
		        scaleBannerVideoSize('.video-container video');
		    });

		});

		function scaleVideoContainer() {

		    var height = $(window).height() + 5;
		    var unitHeight = parseInt(height) + 'px';
		    $('.homepage-hero-module').css('height',unitHeight);

		}

		function initBannerVideoSize(element){

		    $(element).each(function(){
		        $(this).data('height', $(this).height());
		        $(this).data('width', $(this).width());
		    });

		    scaleBannerVideoSize(element);

		}

		function scaleBannerVideoSize(element){

		    var windowWidth = $(window).width(),
		    windowHeight = $(window).height() + 5,
		    videoWidth,
		    videoHeight;

		    $(element).each(function(){
		        var videoAspectRatio = $(this).data('height')/$(this).data('width');

		        $(this).width(windowWidth);
		        console.log("Width: " + windowWidth);

		        
		        if(windowWidth < 1000){

		            videoHeight = windowHeight;
		            videoWidth = videoHeight / videoAspectRatio;
		            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

		            $(this).width(videoWidth).height(videoHeight);
		        }else {
		        	videoHeight = windowHeight;
		            videoWidth = videoHeight / videoAspectRatio;
		            $(this).css({'margin-top' : '', 'margin-left' : ''});

		            $(this).width('').height('');

		        }
				
		        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

		    });
		}

		$(window).load(function() {
			var video = $('.video');
			var sources = [templateUrl + "/video/For_Wes.mp4", templateUrl + "/video/For_Wes.webm"];
			video.append('<source src="' + sources[0] + '"+type="video/mp4" />');
			video.append('<source src="' + sources[1] + '"+type="video/webm" />');
			$('.poster').addClass('hidden');

			

		})

		//Validacion de Formulario
		var formName = $('#name');
		var formEmail = $('#email');
 

		var isInputValid = function ( regex, text ) {
			var isValid = false;
			console.log(regex.test(text));
			if(  regex.test(text) ){
				isValid = true;
			}

			return isValid;
		
		}
		var validateForm = function ( regex , element, message ) {
			var helpMessage = '<span class="help-block"></span>';

			if(!isInputValid( regex, element.val() )){
		
				element.parent().addClass('has-error');
				element.parent().children('span').remove();
				element.parent().append(helpMessage);
				element.parent().children('span').text(message);
			} else {
				console.log('Else');
				element.parent().removeClass('has-error');
				element.parent().children('span').remove();	
			}	

		}

		formName.change(function(){
			validateForm( /^[A-Za-z\s]+$/, formName, 'Ups! El nombre es olbigatorio y solo puede tener letras' );
		}).keydown(function(){
			validateForm( /^[A-Za-z\s]+$/, formName, 'Ups! El nombre es olbigatorio y solo puede tener letras' );
		});
		formEmail.change(function(){
			validateForm( /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/, formEmail, 'Ups! El mail es olbigatorio y tiene que ser valido' );
		}).keydown(function(){
			validateForm( /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/, formEmail, 'Ups! El mail es olbigatorio y tiene que ser valido' );
		});



		var appendNotification = function ( message, notificationClass ) {
			var $notifications = $('.notifications');
			var notificaton = '<div> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> </div>';
	    		
			$notifications.empty();
			$notifications.append(notificaton);
			$notifications.children().addClass(notificationClass);
			$notifications.children().append(message);

		}

		//Ajax Form
		$('.form-contact').submit( function( e ) {
			e.preventDefault();

			var data = {
				action: "wpo_oyga_contacts",
				postdata: $(this).serialize()
			}

			$.ajax({
				url: ajaxurl,
				method: 'post',
				data,
				success:function(data) {
					var $notifications = $('.notifications');
					var offset = $notifications.offset().top - 65;

					if(data == true){
						var message = '<strong>¡Excelente!</strong> Enseguida te contactamos.';
						appendNotification(message, 'alert alert-success');

					}else{
						var message = '<strong>¡Ups!</strong> Parece que falto completar algo.';
						appendNotification(message, 'alert alert-danger');
					};

					$("html, body").animate({
						scrollTop: offset
					}, 400);
				},
				error: function(errorThrown){
					console.log(errorThrown);
				}
			})
		});


		//BLog Header
		var pathname = window.location.pathname;
		if(/blog/.test(pathname)){
			$('.navbar').addClass('oyga-bg');
			$('.navbar-header img').attr('src',templateUrl + '/img/logo-white.png');
			$('.navbar li').removeClass('active');
			$('.navbar li').addClass('blog-li');
			$('.navbar li:nth-child(4)').addClass('blog-li-active');



		}else{console.log('false')};

		
        		

});



