$(document).on("ready",function(){

	//localstorage para los popups
	if(localStorage.getItem('popup')){
		
	}else{
		$('#lanzador-primerfancy').fancybox().trigger('click');
		localStorage.setItem('popup','true');
	}

	//position fixed en click 2 call
	$(".btn_llamanos.fancybox-form3").css({"position":"fixed"});
	//formulario para llamadas
	$("form button").on("click",function(e){
		e.preventDefault();
		var el = $(this).parent().children('.check').children("input[type='checkbox']").is(":checked") ;
		window.el =el
		if(el ){
			var phone = $(this).parent().children('input[type="text"]').val();
			if( !isNaN(phone)  && phone.length === 9){
				$.ajax({
					url :'http://c2s.dilootu.com/directv/WS_pro.php',
					type:'POST',
					data:{
						dst:200,
						src:phone
					}
				});	
				//seteando un valor en la caja de texto
				$(this).parent().children('input[type="text"]').val('Te estamos llamando.');
				//validando si el formulario esta o  no dentro de un popup
				if($(this).parent().hasClass('llamanos-gratis')){
					$(this).parent().addClass('gracias');
				}			
			}else{
				alert('Tu número debe tener 9 dígitos.');
			}			
		}else{
			alert("Debes aceptar los terminos y condiciones");
		}


	});
	$(".no").on('click',function(e){
		$.fancybox.close();
		/*e.preventDefault();
		$(this).parent().html("<img src='static/img/nono.png' alt='si ya eres cliente'></img>")*/
	});
	$(".check").css({'display':'table'}).children('*').css({'display':'table-cell','color':'white'});
	$("#fancybox3 .check").css({'margin-top':'-5px','margin-bottom':'-10px'}).children('*').css({'margin-left':'5px','vertical-align':'top','font-size':'.8rem'});

	$("#fancybox3 input[type='checkbox']").css({'height':'20px','width':'20px'});
	$(".check a").css({'text-decoration':'underline'})
	//zopim chat

	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
	$.src="//v2.zopim.com/?2XEknNQKEy8sG0rZOyTprzTINxbxIXNV";z.t=+new Date;$.
	type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");

	//agregando cambios
	$("body>footer").before('<div style="background-repeat: repeat-x;background-color: #0B3459;background-image: linear-gradient(to bottom, #1F7FBB, #0B3459);"><p style="text-align:center;padding:10px">'+
		'<a href="#" style="color:white;" class="activaPOP">VER CONDICIONES DE PROMOCION</a></p></div>')

	$("body").delegate(".activaPOP","click",function(e){
		e.preventDefault();
		var target = "";
		var width = $("body").innerWidth();
		if(width < 769){
			target = "static/img/popups/movil/"+window.base+".png";
		}else if(width < 1025){
			target = "static/img/popups/tablet/"+window.base+".png";
		}else{
			target = "static/img/popups/web/"+window.base+".png";
		}
		$(this).attr('href',target);
		$(this).fancybox({
			     'titlePosition'    : 'inside',
            	'transitionIn'		: 'none',
            	'transitionOut'		: 'none',
              	'centerOnScroll'    : true
		})
	});
  $(window).on('resize',function(){
	var target = "";
	var width = $("body").innerWidth();
	if(width < 769){
		target = "static/img/popups/movil/"+window.base+".png";
	}else if(width < 1025){
		target = "static/img/popups/tablet/"+window.base+".png";
	}else{
		target = "static/img/popups/web/"+window.base+".png";
	}  	
    $('.activaPOP').attr('href',target)
    if(width > 1000){
    	$("ul.ancho.menus").attr('style','')
    }
  });	
$("input[type='checkbox']").attr('checked',true);


$("header .nav-list ul li a").css({'padding':'0px 20px'});
//$("header .nav-list ul .submenu5").css({'top':'164px'});
});


