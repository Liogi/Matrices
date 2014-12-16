/** Radio perform with Checkbox**/
$(':checkbox').click(function() {
	$(':checkbox:not(:focus)').attr('checked', false);
	var str = this.id.split('_');
	// ajax : ajout du champ consacré selon l'opération choisie
	$('#operand').load(str[1]+'.html', function() {
		alert("Vous avez choisi l'opération "+str[1]);
		// action après click sur valider
		error_performed(str[1]);
	});
});

function error_performed(str)
{
	$('#buttonSum').click(function() {
		var bool = true;
		if (bool == true){
			$(':text').each(function () {
				if ($(this).val() == false){
					alert('Tous les champs doivent être renseignés');
					$(':text').val('');
					$('#formAddition').empty();
					bool = false;
					return bool;
				}
			});
		}
		if (bool == true){
			$(':text').each(function() {
				var nb = $(this).val();
				if (is_int(nb) == false){
					alert('Les champs doivent être des nombres entiers');
					$(':text').val('');
					$('#formAddition').empty();
					bool = false;
					return bool;
				}
			});
		}
		if (bool == true){
			error_operand(str);
			bool = false;
			return bool;
		}
	});
}

function error_operand(str)
{
	if (str == 'somme'){
		if (($('#ligneA').val() != $('#ligneB').val()) || ($('#colA').val() != $('#colB').val())){
			$(':text').val('');
			$('#formAddition').empty();
			alert('Somme A + B non calculable. Les matrices A et B doivent être de même taille');
		}
		else{
			$(function(){
				var ligneA = $('#ligneA').val();
				var colA = $('#colA').val();
				var ligneB = $('#ligneB').val();
				var colB = $('#colB').val();
				$('#formAddition').load('formAddition.php', {
					LigneA: ligneA, 
					ColA: colA, 
					LigneB: ligneB, 
					ColB: colB	
				}, function() {
					$("#envoimatrice").click(function() {
						$('#formAddition :text').each(function() {
							alert($(this).val());
						});
					});
				});

			});
		}
	}
}

function is_int(val)
{
	if((parseFloat(val) === parseInt(val)) && !isNaN(val))
		return true;
	else
		return false;
}