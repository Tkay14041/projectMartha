{!! Form::open(['route' => 'restaurants.search', 'method' => 'post']) !!}
	<div class="form-group Genrediv">
		<p id="Genre">Genre</p>
		<div id="restaurantalign">
          	<input type="radio" id="Japanese" name="genre[]" value="和食" /><label for="Japanese" class="Genre">Japanese</label>
			<input type="radio" id="Sushi" name="genre[]" value="寿司" /><label for="Sushi" class="Genre">Sushi</label>
			<input type="radio" id="Yakiniku" name="genre[]" value="焼肉" /><label for="Yakiniku" class="Genre">Yakiniku</label>
			<input type="radio" id="Ramen" name="genre[]" value="ラーメン" /><label for="Ramen" class="Genre">Ramen</label><br>
			<input type="radio" id="American" name="genre[]" value="アメリカン" /><label for="American" class="Genre">American</label>
			<input type="radio" id="French" name="genre[]" value="フレンチ" /><label for="French" class="Genre">French</label>
			<input type="radio" id="Italian" name="genre[]" value="イタリアン" /><label for="Italian" class="Genre">Italian</label>
			<input type="radio" id="Ethnic" name="genre[]" value="エスニック" /><label for="Ethnic" class="Genre">Ethnic</label><br>
			<input type="radio" id="Cafe" name="genre[]" value="カフェ" /><label for="Cafe" class="Genre">Cafe</label>
			<input type="radio" id="Fastfood" name="genre[]" value="ファストフード" /><label for="Fastfood" class="Genre">Fastfood</label>
			<input type="radio" id="Izakaya" name="genre[]" value="居酒屋" /><label for="Izakaya" class="Genre">Izakaya</label>
			<input type="radio" id="Bar" name="genre[]" value="バー" /><label for="Bar" class="Genre">Bar</label>
		</div>	
	</div>
	{!! Form::submit('search', ['class' => 'btn btn-primary btn-block']) !!}
{!! Form::close() !!}