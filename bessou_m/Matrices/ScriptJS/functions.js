/** Radio perform with Checkbox**/
$(':checkbox').click(function() {
	$(':checkbox:not(:focus)').attr('checked', false);
	$("#form").empty();
	var str = this.id.split('_');
	// ajax : ajout du champ consacré selon l'opération choisie
	$('#operand').load(str[1] + '.html', function() {
		// action après click sur valider
		error_performed(str[1]);
	});
});

function error_performed(str) {
	var form = "#form" + str;
	var button = "#button" + str;
	$(button).click(function() {
		var bool = true;
		if (bool == true) {
			$(':text').each(function() {
				if ($(this).val() === false) {
					alert('Tous les champs doivent être renseignés');
					$(':text').val('');
					$(form).empty();
					bool = false;
					return bool;
				}
			});
		}
		if (bool == true) {
			$(':text').each(function() {
				var nb = $(this).val();
				if (is_int(nb) == false) {
					alert('Les champs doivent être des nombres entiers');
					$(':text').val('');
					$(form).empty();
					bool = false;
					return bool;
				}
			});
		}
		if (bool == true) {
			error_operand(str);
			bool = false;
			return bool;
		}
	});
}

function transposee(str) {
	$(function() {
		var ligneA = $('#ligneA').val();
		var colA = $('#colA').val();
		$("#form").load('../CodePHP/formTransposee.php', {
			LigneA: ligneA,
			ColA: colA,
		}, function() {
			$("#envoimatrice").click(function() {
				var bool = true;
				if (bool == true) {
					$('#form :text').each(function() {
						if ($(this).val() === false) {
							alert('Tous les champs doivent être renseignés');
							$("#formTransposee :text").val('');
							bool = false;
							return bool;
						}
					});
				}
				if (bool == true) {
					$(':text').each(function() {
						var nb = $(this).val();
						if (is_numeric(nb) == false) {
							alert('Les champs doivent être des nombres entiers');
							$('#form :text').val('');
							bool = false;
							return bool;
						}
					});
				}
				if (bool == true) {
					var matriceA = new Array();
					var i = 0;
					var j = 0;
					for (var i = 0; i < ligneA; ++i) {
						matriceA[i] = new Array();
						for (var j = 0; j < colA; ++j) {
							matriceA[i][j] = $("#" + i + "A" + j).val();
						}
					}
					$('#resultSomme').load('../CodePHP/transposee.php', {
						MatA: matriceA,
					});
				}
			});
		});
	});
}

function trace(str) {
	$(function() {
		var ordreA = $('#ligneA').val();
		$("#form").load('../CodePHP/formTrace.php', {
			OrdreA: ordreA
		}, function() {
			$("#envoimatrice").click(function() {
				var bool = true;
				if (bool == true) {
					$('#form :text').each(function() {
						if ($(this).val() === false) {
							alert('Tous les champs doivent être renseignés');
							$("#formTrace :text").val('');
							bool = false;
							return bool;
						}
					});
				}
				if (bool == true) {
					$(':text').each(function() {
						var nb = $(this).val();
						if (is_numeric(nb) == false) {
							alert('Les champs doivent être des nombres entiers');
							$('#form :text').val('');
							bool = false;
							return bool;
						}
					});
				}
				if (bool == true) {
					var matriceA = new Array();
					var i = 0;
					var j = 0;
					for (var i = 0; i < ordreA; ++i) {
						matriceA[i] = new Array();
						for (var j = 0; j < ordreA; ++j) {
							matriceA[i][j] = $("#" + i + "A" + j).val();
						}
					}
					$('#resultSomme').load('../CodePHP/trace.php', {
						MatA: matriceA,
					});
				}
			});
		});
	});
}

function produit(str) {
	if (($('#colA').val() != $('#ligneB').val())) {
		$(':text').val('');
		$('#form').empty();
		alert('Produit A * B non calculable. Le nombre de colonnes de la matrice A doit être identique au nombre de lignes de la Matrice B.');
	} else {
		$(function() {
			var ligneA = $('#ligneA').val();
			var colA = $('#colA').val();
			var ligneB = $('#ligneB').val();
			var colB = $('#colB').val();
			$("#form").load('../CodePHP/formAddition.php', {
				LigneA: ligneA,
				ColA: colA,
				LigneB: ligneB,
				ColB: colB
			}, function() {
				$("#envoimatrice").click(function() {
					var bool = true;
					if (bool == true) {
						$('#form :text').each(function() {
							if ($(this).val() === false) {
								alert('Tous les champs doivent être renseignés');
								$("#formAddition :text").val('');
								bool = false;
								return bool;
							}
						});
					}
					if (bool == true) {
						$(':text').each(function() {
							var nb = $(this).val();
							if (is_numeric(nb) == false) {
								alert('Les champs doivent être des nombres entiers');
								$('#form :text').val('');
								bool = false;
								return bool;
							}
						});
					}
					if (bool == true) {
						var matriceA = new Array();
						var matriceB = new Array();
						var i = 0;
						var j = 0;
						for (var i = 0; i < ligneA; ++i) {
							matriceA[i] = new Array();
							for (var j = 0; j < colA; ++j) {
								matriceA[i][j] = $("#" + i + "A" + j).val();
							}
						}
						for (var i = 0; i < ligneB; ++i) {
							matriceB[i] = new Array();
							for (var j = 0; j < colB; ++j) {
								matriceB[i][j] = $('#' + i + "B" + j).val();
							}
						}
						$('#resultSomme').load('../CodePHP/produit.php', {
							MatA: matriceA,
							MatB: matriceB
						});
					}
				});
			});
		});
	}
}

function gauss(str) {
	if (parseInt($('#colA').val()) < 2 || parseInt($('#colA').val()) > 4) {
		$(':text').val('');
		$('#form').empty();
		alert('Le nombre de systèmes à résoudre doit être compris entre 2 et 4');
	} else {
		$(function() {
			var ordreA = $('#ligneA').val();
			$("#form").load('../CodePHP/formGauss.php', {
				OrdreA: ordreA
			}, function() {
				$("#envoimatrice").click(function() {
					var bool = true;
					if (bool == true) {
						$('#form :text').each(function() {
							if ($(this).val() === false) {
								alert('Tous les champs doivent être renseignés');
								$("#formGauss :text").val('');
								bool = false;
								return bool;
							}
						});
					}
					if (bool == true) {
						$(':text').each(function() {
							var nb = $(this).val();
							if (is_numeric(nb) == false) {
								alert('Les champs doivent être des nombres entiers');
								$('#form :text').val('');
								bool = false;
								return bool;
							}
						});
					}
					if (bool == true) {
						var matriceA = new Array();
						var matriceB = new Array();
						var i = 0;
						var j = 0;
						for (var i = 0; i < ordreA; ++i) {
							matriceA[i] = new Array();
							for (var j = 0; j < ordreA; ++j) {
								matriceA[i][j] = $("#" + i + "A" + j).val();
							}
						}
						for (var i = 0; i < ordreA; ++i) {
							matriceB[i] = new Array();
							matriceB[i][0] = $('#' + i + "B" + 0).val();
						}
						$('#resultgauss').load('../CodePHP/gauss.php', {
							MatA: matriceA,
							MatB: matriceB
						});
					}
				});
			});
		});
	}
}

function error_operand(str) {
	if (str == 'produit') {
		produit(str);
	}
	if (str == 'trace') {
		trace(str);
	}
	if (str == 'transposee') {
		transposee(str);
	}
	if (str == 'gauss') {
		gauss(str);
	}
	if (str == 'somme') {
		if (($('#ligneA').val() != $('#ligneB').val()) || ($('#colA').val() != $('#colB').val())) {
			$(':text').val('');
			$("#form").empty();
			alert('Somme A + B non calculable. Les matrices A et B doivent être de même taille');
		} else {
			$(function() {
				var ligneA = $('#ligneA').val();
				var colA = $('#colA').val();
				var ligneB = $('#ligneB').val();
				var colB = $('#colB').val();
				$("#form").load('../CodePHP/formAddition.php', {
					LigneA: ligneA,
					ColA: colA,
					LigneB: ligneB,
					ColB: colB
				}, function() {
					$("#envoimatrice").click(function() {
						var bool = true;
						if (bool == true) {
							$('#form :text').each(function() {
								if ($(this).val() === false) {
									alert('Tous les champs doivent être renseignés');
									$("#formAddition :text").val('');
									bool = false;
									return bool;
								}
							});
						}
						if (bool == true) {
							$(':text').each(function() {
								var nb = $(this).val();
								if (is_numeric(nb) == false) {
									alert('Les champs doivent être des nombres entiers');
									$('#form :text').val('');
									bool = false;
									return bool;
								}
							});
						}
						if (bool == true) {
							var matriceA = new Array();
							var matriceB = new Array();
							var i = 0;
							var j = 0;
							for (var i = 0; i < ligneA; ++i) {
								matriceA[i] = new Array();
								matriceB[i] = new Array();
								for (var j = 0; j < colA; ++j) {
									matriceA[i][j] = $("#" + i + "A" + j).val();
									matriceB[i][j] = $('#' + i + "B" + j).val();
								}
							}
							$('#resultSomme').load('../CodePHP/somme.php', {
								MatA: matriceA,
								MatB: matriceB
							});
						}
					});
				});

			});
		}
	}
}

function is_int(val) {
	if ((parseFloat(val) === parseInt(val)) && !isNaN(val))
		return true;
	else
		return false;
}

function is_numeric(nb) {
	return !isNaN(parseFloat(nb)) && isFinite(nb);
}