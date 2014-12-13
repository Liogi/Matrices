/** Radio perform with Checkbox**/
$(':checkbox').click(function() {
	$(':checkbox:not(:focus)').attr('checked', false);
	// Activation du bouton de validation quand une case est cochée
	$('#send_operand').attr('disabled', false);
});
