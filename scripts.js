jQuery(document).ready(function($) {

	$('.modu-item .modu-content').matchHeight();
	$.preloadCssImages();

	$('.navbar-toggle').click(function() {
        $('.menu-movil').fadeToggle(500);
    });

	$('form button').on('click',function(e){
		e.preventDefault();
		var el = $(this).parent().find("input[type='checkbox']").is(":checked") ;
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
					},
					complete:function(xhr,status){
						console.log(status);
						window.location.href="llamando.html";
					}
				});
				$(this).parent().children('input[type="text"]').val('Te estamos llamando...');
			//	window.location.href="llamando.html";
				// if($(this).parent().hasClass('llamanos-gratis')){
				// 	$(this).parent().addClass('gracias');
				// }
			}else{
				alert('Tu número debe tener 9 dígitos.');
			}
		}else{
			alert("Debes aceptar los terminos y condiciones");
		}
	});

	$('.popup-intro .intro-content .pregunta .si').click(function(event) {
		$('.popup-intro .intro-content .pregunta').hide();
		$('.popup-intro .intro-content h2.cuentas').hide();
		$('.popup-intro .intro-content .ya').fadeIn(300);
		$('.popup-intro .intro-content .esq-izq').fadeIn(300);
		$('.popup-intro .intro-content h2.comuniquese').fadeIn(300);
	});

});

function centerModals($element) {
	var $modals;
	if ($element.length) {
		$modals = $element;
	} else {
		$modals = $('.modal-vcenter:visible');
	}
	$modals.each( function(i) {
		var $clone = $(this).clone().css('display', 'block').appendTo('body');
		var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
		top = top > 0 ? top : 0;
		$clone.remove();
		$(this).find('.modal-content').css("margin-top", top);
	});
}
$('.modal-vcenter').on('show.bs.modal', function(e) {
	centerModals($(this));
});

$(window).on('resize', centerModals);

//zopim chat

window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?2XEknNQKEy8sG0rZOyTprzTINxbxIXNV";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");

//

idleTimer = null;
idleState = false;
idleWait  = 45000;
var veces     = 0;

(function ($) {

    $(document).ready(function () {
        $('*').bind('mousemove keydown scroll', function () {
            clearTimeout(idleTimer);
            if (idleState == true) {
                // Reactivated event
                // $("body").append("<p>Welcome Back.</p>");
            }

            idleState = false;
            idleTimer = setTimeout(function () {
                // Idle Event
                veces++;
            	if(veces == 1 || veces == 4){
                	if(!$('.modal').hasClass('in')){
                		$('.llamamos-gratis a').trigger('click');
                	}
            	}
                idleState = true; }, idleWait);
        });

        $("body").trigger("mousemove");

    });
}) (jQuery)
