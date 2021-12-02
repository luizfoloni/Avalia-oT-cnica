<script>
function funcao(data) {

	jQuery(document).ready(function () {
		jQuery('input').on('keyup', function () {
			if (jQuery(this).attr('name') === 'result') {
				return false;
			}
			var dtChegada = document.getElementById('seg_inicio').value;;
			var dtPartida = document.getElementById('seg_fim').value;;
			var dtDescanso = document.getElementById('seg_descanso').value;;
			var dtMinutos = ':00';;
			var joined = dtDescanso + dtMinutos;;

			var ms = moment(dtPartida, "HH:mm").diff(moment(dtChegada, "HH:mm"));
			var d = moment.duration(ms);
			var s = Math.floor(d.asHours()) + "h" + moment.utc(ms).format(" mm") + "m";


			var ms = moment(s, "HH:mm").diff(moment(joined, "HH:mm"));
			var w = moment.duration(ms);
			var result = Math.floor(w.asHours()) + "h" + moment.utc(ms).format(" mm") + "m";
			var test = Math.floor(w.asHours());


			jQuery('#result').val(result);


			if (jQuery(this).attr('name') === 'result2') {
				return false;
			}
			var dtChegada = document.getElementById('ter_inicio').value;;
			var dtPartida = document.getElementById('ter_fim').value;;
			var dtDescanso = document.getElementById('ter_descanso').value;;
			var dtMinutos = ':00';;
			var joined = dtDescanso + dtMinutos;;

			var ms = moment(dtPartida, "HH:mm").diff(moment(dtChegada, "HH:mm"));
			var d = moment.duration(ms);
			var s = Math.floor(d.asHours()) + "h" + moment.utc(ms).format(" mm") + "m";


			var ms = moment(s, "HH:mm").diff(moment(joined, "HH:mm"));
			var w2 = moment.duration(ms);
			var result2 = Math.floor(w2.asHours()) + "h" + moment.utc(ms).format(" mm") + "m";
			var test2 = Math.floor(w2.asHours());


			jQuery('#result2').val(result2);


			if (jQuery(this).attr('name') === 'result3') {
				return false;
			}
			var dtChegada = document.getElementById('qua_inicio').value;;
			var dtPartida = document.getElementById('qua_fim').value;;
			var dtDescanso = document.getElementById('qua_descanso').value;;
			var dtMinutos = ':00';;
			var joined = dtDescanso + dtMinutos;;

			var ms = moment(dtPartida, "HH:mm").diff(moment(dtChegada, "HH:mm"));
			var d = moment.duration(ms);
			var s = Math.floor(d.asHours()) + "h" + moment.utc(ms).format(" mm") + "m";


			var ms = moment(s, "HH:mm").diff(moment(joined, "HH:mm"));
			var w3 = moment.duration(ms);
			var result3 = Math.floor(w3.asHours()) + "h" + moment.utc(ms).format(" mm") + "m";
			var test3 = Math.floor(w3.asHours());

			jQuery('#result3').val(result3);


			if (jQuery(this).attr('name') === 'result4') {
				return false;
			}
			var dtChegada = document.getElementById('qui_inicio').value;;
			var dtPartida = document.getElementById('qui_fim').value;;
			var dtDescanso = document.getElementById('qui_descanso').value;;
			var dtMinutos = ':00';;
			var joined = dtDescanso + dtMinutos;;

			var ms = moment(dtPartida, "HH:mm").diff(moment(dtChegada, "HH:mm"));
			var d = moment.duration(ms);
			var s = Math.floor(d.asHours()) + "h" + moment.utc(ms).format(" mm") + "m";


			var ms = moment(s, "HH:mm").diff(moment(joined, "HH:mm"));
			var w4 = moment.duration(ms);
			var result4 = Math.floor(w4.asHours()) + "h" + moment.utc(ms).format(" mm") + "m";
			var test4 = Math.floor(w4.asHours());


			jQuery('#result4').val(result4);


			if (jQuery(this).attr('name') === 'result5') {
				return false;
			}
			var dtChegada = document.getElementById('sex_inicio').value;;
			var dtPartida = document.getElementById('sex_fim').value;;
			var dtDescanso = document.getElementById('sex_descanso').value;;
			var dtMinutos = ':00';;
			var joined = dtDescanso + dtMinutos;;

			// Diferença de quantidades de horas trabalhadas no dia 
			var ms = moment(dtPartida, "HH:mm").diff(moment(dtChegada, "HH:mm"));
			var d = moment.duration(ms);
			var s = Math.floor(d.asHours()) + "h" + moment.utc(ms).format(" mm") + "m";

			// Difetença de quantidades de horas trabalhadas no dia  - Descanso
			var ms = moment(s, "HH:mm").diff(moment(joined, "HH:mm"));
			var w5 = moment.duration(ms);
			var result5 = Math.floor(w5.asHours()) + "h" + moment.utc(ms).format(" mm") + "m";
			var test5 = Math.floor(w5.asHours());


			jQuery('#result5').val(result5);
            
			if (jQuery(this).attr('name') === 'result6') {
				return false;
			}
			var result6 = test + test2 + test3 + test4 + +test5;
			if (result6 > '40') {
				window.alert("Carga horaria superior ao permitido");
			}
			if (result6 < '20') {
				window.alert("Carga horaria inferior ao permitido");
			}


			jQuery('#result6').val(result6);

		});
	});
}
				</script>