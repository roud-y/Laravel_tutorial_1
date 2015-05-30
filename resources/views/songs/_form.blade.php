<div class="form-group">
			{!! Form::label('nom') !!}
			{!! Form::text('nom', null, ['class' => 'form-control'])!!}

			{!! $errors->first('nom','<span class="help-block">:message</span>') !!}
	</div>
	<div class="form-group">
			{!! Form::label('calories') !!}
			{!! Form::textarea('calories', null, ['class' => 'form-control'])!!}
	</div>
	<div class="form-group">
			{!! Form::label('slug') !!}
			{!! Form::text('slug', null, ['class' => 'form-control'])!!}
			{!! $errors->first('slug','<span class="help-block">:message</span>') !!}
	</div>
	<div class="form-group">
			{!! Form::submit('Envoyer',['class' => 'btn btn-primary'])!!}
	</div>