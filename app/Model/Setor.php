<?php
class Setor extends AppModel {
	var $name = 'Setor';
	var $displayField = 'nome';
	var $dados = array(
		1 => 'HelpDesk', 
		2 => 'Infraestrutura', 
		3 => 'Desenvolvimento', 
		4 => 'Recursos Humanos', 
		5 => 'Administração', 
		6 => 'Obras', 
		7 => 'Judiciario'
	);
}