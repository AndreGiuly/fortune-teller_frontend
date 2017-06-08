

  function maxLengthCheck(object) {
    if (object.value.length > object.max.length)
      object.value = object.value.slice(0, object.max.length)
  }
    
  function isNumeric (evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode (key);
    var regex = /[0-9]|\./;
    if ( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }

$(document).ready(function(){

	$(".botao").click(function(){


		var x = $('#tlm').val();
		var y = $('#operator').val();
		var z = $("input[type='checkbox']").val();



		if ((x == null || x == "")) {
			$(".form").effect( "shake", {times:3}, 800 );

			$("#tlm").css({"box-shadow":"0px 0px 15px red", "border":"2px solid red"});
			$("#operator").css('box-shadow','none');
			$("#termos").css('box-shadow','none');

			$('.error-desktop.mobile').css('display','block');
			$('.error-desktop.operadora').css('display','none');	
			$('.error-desktop.termos').css('display','none');

			return false;

		} else if((x != null || x != "") && (y == 0)){
			$("form").effect( "shake", {times:3}, 800 );

			$("#operator").css({"box-shadow":"0px 0px 15px red", "border":"2px solid red"});
			$("#tlm").css({'box-shadow':'0px 0px 15px rgb(108,176,62)','border':'2px solid rgb(108,177,61)'});

			$('.error-desktop.operadora').css('display','block');
			$('.error-desktop.mobile').css('display','none');
			return false;

		} else {
			if ($('#termos').is(":checked")){
				
               $(".card1").css({
		        'transform': 'scale(3.0)',
			    '-webkit-transform': 'scale(3.0)',
			    'opacity':'0',
			    'z-index':'-9'
			    
			    });
          
          
    			$(".card2").css({
		          '-moz-transform':'rotate(0deg)',
		          '-webkit-transform':'rotate(0deg)',
		          '-o-transform':'rotate(0deg)',
		          '-ms-transform':'rotate(0deg)',
		          'transform': 'rotate(0deg)'
			    });
				return false;
			} else {
		
				$("form").effect( "shake", {times:3}, 800 );
				

				$("#tlm").css({'box-shadow':'0px 0px 15px rgb(108,176,62)','border':'2px solid rgb(108,177,61)'});
				$("#operator").css({'box-shadow':'0px 0px 15px rgb(108,176,62)','border':'2px solid rgb(108,177,61)'});	
				$("#termos").css({"box-shadow":"0px 0px 15px red", "border":"2px solid red"});

				$('.error-desktop.termos').css('display','block');						
				$('.error-desktop.mobile').css('display','none');
				$('.error-desktop.operadora').css('display','none');				
				return false;
			}
		}

	})
		$("#volver").click(function(){
			$(".card1").css({
		        'transform': 'scale(1.0)',
			    '-webkit-transform': 'scale(1.0)',
			    'opacity':'1',
			    'z-index':'2'
			    });
			$(".card2").css({
		          '-moz-transform':'rotate(-5deg)',
		          '-webkit-transform':'rotate(-5deg)',
		          '-o-transform':'rotate(-5deg)',
		          '-ms-transform':'rotate(-5deg)',
		          'transform': 'rotate(-5deg)'
			    });
		});

		$(".seguiente").click(function(){

				var pin = $('.code').val();
		
			if(pin == null || pin == ""){
				$("form").effect( "shake", {times:3}, 800 );				
				$('.error-desktop.codigo').css("display","block");
				$(".code").css({"box-shadow":"0px 0px 15px red", "border":"2px solid red"});
				return false;
			} else {
					
				$(".card2").css({
		        'transform': 'scale(3.0)',
			    '-webkit-transform': 'scale(3.0)',
			    'opacity':'0',
			    'z-index':'-9'
			    
			    });
				$(".success").css('display','block');
	
			}

		})

	

	});


