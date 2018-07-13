{!! Form::open(['route' => 'items.search', 'method' => 'post']) !!}
		      		 <div class="form-group">
		      		 	<p>
						  <label for="amount">Price:</label>
						</p>
						<p>
							{!! Form::label('price[]', 'minPrice') !!}
							￥{!! Form::number('minPrice', '0', ['id' => 'minPrice', 'style' => 'border: 0; color: #f6931f; font-weight: bold']) !!}
						</p>
						<p>
							{!! Form::label('price[]', 'maxPrice') !!}
							￥{!! Form::number('maxPrice', '0', ['id' => 'maxPrice', 'style' => 'border: 0; color: #f6931f; font-weight: bold']) !!}
						</p>
						<canvas id="myChart"></canvas>
						<div id="slider-range"></div>
					  </div>
                      <div class="form-group">
                      	<p>Sex</p>
                      		{!! Form::radio('sex[]','W') !!}
							{!! Form::label('sex[]','womens') !!}
							{!! Form::radio('sex[]','M') !!}
							{!! Form::label('sex[]','mens') !!}
							{!! Form::radio('sex[]','W/M') !!}
							{!! Form::label('sex[]','unisex') !!}
					  </div>
					  <div class="form-group">
					  	<p>Genre</p>
					  		{!! Form::radio('genre[]','O') !!}
					  		{!! Form::label('genre[]','Outer') !!}
					  		{!! Form::radio('genre[]','G') !!}
					  		{!! Form::label('genre[]','Bag') !!}
					  		{!! Form::radio('genre[]','T') !!}
					  		{!! Form::label('genre[]','Tops') !!}
					  		{!! Form::radio('genre[]','B') !!}
					  		{!! Form::label('genre[]','Bottoms') !!}
					  		{!! Form::radio('genre[]','D') !!}
					  		{!! Form::label('genre[]','Dress') !!}
					  		{!! Form::radio('genre[]','A') !!}
					  		{!! Form::label('genre[]','Accessory') !!}
					  </div>
					  <div class="form-group">
					  	<p>Color</p>
					  		{!! Form::radio('color[]','赤') !!}
					  		{!! Form::label('color[]','red') !!}
					  		{!! Form::radio('color[]','黒') !!}
					  		{!! Form::label('color[]','black') !!}
					  		{!! Form::radio('color[]','白') !!}
					  		{!! Form::label('color[]','white') !!}
					  		{!! Form::radio('color[]','ベージュ') !!}
					  		{!! Form::label('color[]','beige') !!}
					  		{!! Form::radio('color[]','ネイビー') !!}
					  		{!! Form::label('color[]','navy') !!}
					  		{!! Form::radio('color[]','緑・カーキ') !!}
					  		{!! Form::label('color[]','green') !!}
					  		{!! Form::radio('color[]','ブルー') !!}
					  		{!! Form::label('color[]','blue') !!}
					  		{!! Form::radio('color[]','イエロー') !!}
					  		{!! Form::label('color[]','yellow') !!}
					  		{!! Form::radio('color[]','ピンク') !!}
					  		{!! Form::label('color[]','pink') !!}
					  		{!! Form::radio('color[]','シルバー') !!}
					  		{!! Form::label('color[]','silver') !!}
					  		{!! Form::radio('color[]','ゴールド') !!}
					  		{!! Form::label('color[]','gold') !!}
					  		{!! Form::radio('color[]','ブラウン') !!}
					  		{!! Form::label('color[]','braun') !!}
					  		{!! Form::radio('color[]','柄物') !!}
					  		{!! Form::label('color[]','gara') !!}
					  		{!! Form::radio('color[]','グレー') !!}
					  		{!! Form::label('color[]','gray') !!}
					  </div>
					  <div class="form-group">
					  	<p>Scene</p>
					  		{!! Form::radio('scene[]','フォーマル') !!}
					  		{!! Form::label('scene[]','formal') !!}
							{!! Form::radio('scene[]','ビジカジ') !!}
							{!! Form::label('scene[]','business casual') !!}
							{!! Form::radio('scene[]','カジュアル') !!}
							{!! Form::label('scene[]','casual') !!}
							{!! Form::radio('scene[]','デート') !!}
					  		{!! Form::label('scene[]','date') !!}
					  		{!! Form::radio('scene[]','結婚式') !!}
					  		{!! Form::label('scene[]','wedding') !!}
					  		{!! Form::radio('scene[]','ビーチ') !!}
					  		{!! Form::label('scene[]','beach') !!}
					  </div>
							{!! Form::submit('search', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                {!! Form::close() !!}