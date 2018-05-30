<style type="text/css">
	#comentarios_data{
		margin: 20px;
	}
	.comentarios{
		font-size: 15px;
	}
	.fecha{
		font-size: 10px;
	}
</style>
<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="smaller lighter blue no-margin">Comentarios</h3>
			</div>
			<div id="comentarios_data" >
				
					@foreach ($comentarios as $c)
						<?php $usuario=App\User::find($c->user_id); ?>
						<div class="coment">
							<p class="usuarios"><u><b>{{ $usuario->nombres.', '.$usuario->apellido_paterno }}:</b></u></p>
							<p class="comentarios"><i>{{ $c->comentario }}</i></p>
							<p class="fecha">{{ $c->created_at }}</p>
						</div><hr><br>
					@endforeach
				
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->