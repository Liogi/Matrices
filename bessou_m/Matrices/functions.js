/** Radio perform with Checkbox**/
$(':checkbox').click(function() {
	$(':checkbox:not(:focus)').attr('checked', false);
	var str = this.id.split('_');
	// ajax : ajout du champ consacré selon l'opération choisie
	$('#operand').load(str[1]+'.html', function() {
		alert("Vous avez choisi l'opération "+str[1]);
		// action après click sur valider
		action_performed();
	});
});

function action_performed()
{
	$('#buttonSum').click(function() {
		var bool = true;
		if (bool == true){
			$(':text').each(function () {
				if ($(this).val() == false){
					alert('Tous les champs doivent être renseignés');
					$(':text').val('');
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
					bool = false;
					return bool;
				}
			});
		}
	});
}

function is_int(val)
{
	if((parseFloat(val) === parseInt(val)) && !isNaN(val))
		return true;
	else
		return false;
}