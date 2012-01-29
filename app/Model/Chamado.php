<?php
class Chamado extends AppModel {
	public $name = 'Chamado';
	public $displayField = 'titulo';
	public $cacheQueries = false;
	
	
	public $titulos = array(
		'Navegador não abre',
		'Internet não funciona',
		'Computador não liga',
		'Teclado não funciona',
		'Mouse não mexe',
		'Acesso a Internet mas não ao programa de Lançamentos',
		'Não passei o cartão de ponto',
		'Troca do computador',
		'A rede caiu em todo o andar',
		'Problema recorrente de falha do monitor',
	);
	
	var $descricao = 'Do your layouts deserve better than Lorem Ipsum? Apply as an art director and team up with the best copywriters at Jung von Matt: www.jvm.com/jobs/lipsum
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum commodo tincidunt risus, et malesuada nunc rhoncus et. Morbi ac justo neque, eu dapibus ante. Duis at libero sapien, ut sollicitudin enim. Nullam sed est tempor urna porta suscipit at non enim. Praesent et lacus at diam interdum scelerisque. Cras semper mollis ligula, quis dapibus diam tempus sit amet. Aliquam erat volutpat. Integer fermentum, neque sagittis molestie euismod, ante justo blandit velit, a fringilla metus mi ut nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque id leo erat, id euismod risus. Fusce volutpat varius sapien, et dignissim lectus sagittis id. Curabitur gravida vulputate eleifend. Nullam nec faucibus felis. Sed ipsum tellus, congue sit amet fringilla vel, gravida a nisl.
Proin porta adipiscing semper. Fusce vitae enim nibh. Nulla ut lacus et quam ultrices dapibus sit amet ut mi. Phasellus quis nulla eget mauris commodo elementum nec at metus. Ut et arcu quis mi adipiscing facilisis. Sed lacinia mollis scelerisque. Nunc eu arcu ligula. Vivamus luctus porttitor dui, et varius est tincidunt sed. Nullam eu diam dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec in diam sem, suscipit euismod erat.
Sed mollis pretium purus, a facilisis nisi tristique a. Mauris egestas consectetur nisl vitae vehicula. Aliquam ligula velit, adipiscing id blandit et, facilisis vitae neque. Quisque dignissim dui non mi semper vitae mollis nisi auctor. Phasellus sit amet sapien sit amet arcu fermentum mattis quis sed nisl. Aliquam vulputate, turpis et bibendum ullamcorper, enim ipsum ultricies nibh, nec pulvinar ante enim nec urna. In vitae erat nibh. Curabitur tempor nunc a mauris dictum cursus. Integer ut tortor a ante posuere rhoncus. Sed eros purus, molestie in interdum at, pellentesque eget lorem. Morbi blandit erat a justo viverra at hendrerit arcu hendrerit. Nulla facilisi. In ipsum sapien, congue vitae fermentum quis, consequat sed urna.
Aliquam porta congue dignissim. Proin aliquam luctus nibh, sit amet ultrices sem consectetur at. Sed accumsan tincidunt orci, vitae aliquet ipsum pulvinar a. Duis mi augue, mattis ut pellentesque ut, sagittis nec turpis. Sed ac nisl erat. Nam ipsum quam, malesuada non rutrum nec, dignissim a velit. Vestibulum velit nisi, vehicula et feugiat vitae, cursus ac lacus. Etiam ullamcorper sollicitudin dignissim. Maecenas hendrerit euismod urna non feugiat. In eu ipsum ut metus feugiat ultricies. Duis vestibulum lectus hendrerit libero elementum dapibus. Cras viverra magna non justo dictum condimentum. Phasellus dapibus tincidunt elit, a volutpat nisl luctus quis. Nam id lacus non nisi convallis laoreet. Morbi pulvinar mollis tincidunt. Nulla facilisi.
Suspendisse id elit mauris, ac eleifend sem. Vivamus consequat aliquam lacus at dictum. Phasellus sit amet nibh non est posuere fermentum. Pellentesque augue erat, sagittis in laoreet ac, faucibus et nunc. Maecenas et leo a sem suscipit ultricies. Ut luctus est sit amet tortor varius ut tristique tellus dignissim. Ut dignissim lobortis quam, euismod aliquet libero lobortis vitae. Nullam massa est, iaculis adipiscing hendrerit at, convallis nec metus. Nam quis ipsum non nisl laoreet vehicula. Phasellus eu consequat velit. Vivamus elit nibh, condimentum non consequat quis, eleifend a tortor. In bibendum quam mi. Nunc aliquam mi nec nulla dapibus viverra. Praesent aliquet feugiat risus, sit amet tempor neque feugiat vel.';
	
	var $belongsTo = array(
		'SetorSolicitante' => array('className' => 'Setor', 'foreignKey' => 'setor_solicitante_id'),
		'SetorResponsavel' => array('className' => 'Setor', 'foreignKey' => 'setor_responsavel_id'),
		'UsuarioSolicitante' => array('className' => 'Usuario', 'foreignKey' => 'usuario_solicitante_id'),
		'UsuarioResponsavel' => array('className' => 'Usuario', 'foreignKey' => 'usuario_responsavel_id'),
		'Prioridade' => array('className' => 'Prioridade', 'foreignKey' => 'prioridade_id')
	);
}