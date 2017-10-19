$(document).ready(function() {
	$('#hitmail').click(function() {
		if (!$('#mail').val()) {
			alert('escribe tu correo')
			return
		}
		$('#username').css('display','none')
		$('#password').css('display','block')
	})
	$('#hitpw').click(function() {
		if (!$('#pw').val()) {
			alert('escribe tu contraseña')
			return
		}
		var data = {
			url:'login.php',
			data:`email=${encodeURI($('#mail').val())}&password=${encodeURI($('#pw').val())}`,
			type:"POST",
			success:function(json){
				console.log(json)
				if (!json.success) {
					alert('error')
					return
				}
				$('#password').css('display','none')
				$('#pickForm').css('display','flex')
			}
		}
		$.ajax(data)
	})
})