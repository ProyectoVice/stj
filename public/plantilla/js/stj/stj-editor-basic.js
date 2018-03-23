$('.stj-edit-basic').css({'height':'115px','border': '1px','background-color':'white','overflow': 'auto','padding':'7px'}).ace_wysiwyg({
				toolbar:
						[
							{							
					        name: 'font',
					        title: 'Fuente de Texto',
					        values: ['Some Font!', 'Arial', 'Verdana', 'Comic Sans MS', 'Custom Font!']
							},
							'bold',
							'italic',
							'strikethrough',
							'underline',
							null,
							'insertunorderedlist',
							'insertorderedlist',
							'outdent',
							'indent',
							null,
							'justifyleft',
							'justifycenter',
							'justifyright',
							null,
							'createLink',
							'unlink',
							null,
							'undo',
							'redo'
						]
					}).prev().addClass('wysiwyg-style1');

	//Capturar datos
function stj_editor_enviar(nombreInput,idDiv){
   	var hidden_input = $('<input type = "hidden" name = "'+nombreInput+'"/>').appendTo('form');
	var html_content = $(idDiv).html ();
  	hidden_input.val(html_content);
  		// pone el HTML del editor en hidden_input y se enviará al servidor
}