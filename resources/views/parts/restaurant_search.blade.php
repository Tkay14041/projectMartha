{!! Form::open(['route' => 'restaurants.search', 'method' => 'post']) !!}
	<div class="form-group">
		<p>Genre</p>
		{!! Form::radio('genre[]','和食') !!}
		{!! Form::label('genre[]','Japanese') !!}
		{!! Form::radio('genre[]','寿司') !!}
		{!! Form::label('genre[]','Sushi') !!}
		{!! Form::radio('genre[]','焼肉') !!}
		{!! Form::label('genre[]','Yakiniku') !!}
		{!! Form::radio('genre[]','ラーメン') !!}
		{!! Form::label('genre[]','Ramen') !!}
		{!! Form::radio('genre[]','アメリカン') !!}
		{!! Form::label('genre[]','American') !!}
		{!! Form::radio('genre[]','フレンチ') !!}
		{!! Form::label('genre[]','French') !!}
		{!! Form::radio('genre[]','イタリアン') !!}
		{!! Form::label('genre[]','Italian') !!}
		{!! Form::radio('genre[]','エスニック') !!}
		{!! Form::label('genre[]','Ethnic') !!}
		{!! Form::radio('genre[]','カフェ') !!}
		{!! Form::label('genre[]','Cafe') !!}
		{!! Form::radio('genre[]','ファストフード') !!}
		{!! Form::label('genre[]','Fastfood') !!}
		{!! Form::radio('genre[]','居酒屋') !!}
		{!! Form::label('genre[]','Izakaya') !!}
		{!! Form::radio('genre[]','バー') !!}
		{!! Form::label('genre[]','Bar') !!}
	</div>
	{!! Form::submit('search', ['class' => 'btn btn-primary btn-block']) !!}
{!! Form::close() !!}