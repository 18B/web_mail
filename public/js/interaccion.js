
	<script>

		function cambiaEstilo(){
			document.getElementById('anio').style.color = '#000';
			document.getElementById('anio').style.fontSize = '2em';
			
		}

		function restablecer(){
			document.getElementById('anio').style.color = '#fff';
                
			document.getElementById('anio').style.fontSize = '22px';
		}

		function inicializarAnio(){
			var anio = new Date().getFullYear();
			document.getElementById('anio').value = anio;

			document.getElementById('anio').addEventListener('click', cambiaEstilo);

			document.getElementById('anio').addEventListener('blur', restablecer);
		}

		document.addEventListener('DOMContentLoaded', inicializarAnio);


	</script>
