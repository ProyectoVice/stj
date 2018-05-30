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
			{!! Form::open(['route' => 'rsu.pf.e-msj', 'method' => 'POST', 'class'=>'form-horizontal form-label-left']) !!}
			<div class="modal-body" align="center"><br>
			
			{{ csrf_field() }}
				<textarea class="form-control" placeholder="Escribir aquí.." required="true" name="msj"></textarea>
			</div>
			<div class="modal-footer">
				<input type="hidden" name="proyecto" value="{{ $id }}">
				<button class="btn btn-success btn-sm btn-round submit">
								<i class="ace-icon fa fa-send"> Enviar</i>
				</button>
			</div>
			{!!Form::close()!!}
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->