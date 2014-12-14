/** Radio perform with Checkbox**/
$(':checkbox').click(function() {
	$(':checkbox:not(:focus)').attr('checked', false);
	var str = this.id.split('_');
	$('#operand').load(str[1]+'.html', function() {
		alert("Vous avez choisi l'opération "+str[1]);
	})
});
