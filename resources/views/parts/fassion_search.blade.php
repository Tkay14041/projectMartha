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
                      <div class="form-group Genderdiv">
                      	<form>
                      	<p id="Gender">Gender</p>
                      	<input type="radio" id="womens" name="sex[]" value="W" /><label for="womens" class="Gender">womens</label>
						<input type="radio" id="mens" name="sex[]" value="M" /><label for="mens" class="Gender">mens</label>
						<input type="radio" id="unisex" name="sex[]" value="W/M" /><label for="unisex" class="Gender">unisex</label>
					  </div>

					  <div class="form-group Genrediv">
					  	<p id="Genre">Genre</p>
                      	<input type="radio" id="Outer" name="genre[]" value="O" /><label for="Outer" class="Gender">Outer</label>
						<input type="radio" id="Bag" name="genre[]" value="G" /><label for="Bag" class="Gender">Bag</label>
						<input type="radio" id="Tops" name="genre[]" value="T" /><label for="Tops" class="Gender">Tops</label><br>
                      	<input type="radio" id="Bottoms" name="genre[]" value="B" /><label for="Bottoms" class="Gender">Bottoms</label>
						<input type="radio" id="Dress" name="genre[]" value="D" /><label for="Dress" class="Gender">Dress</label>
						<input type="radio" id="Accessory" name="genre[]" value="A" /><label for="Accessory" class="Gender">Accessory</label>						

					  </div>
					  <div class="form-group Colordiv">
					  	<p id="Color">Color</p>
					  	<span id="reddiv">
					  	<input type="radio" id="red" name="color[]" value="赤" /><label for="red" id="red" class="Color">red</label>
					  	</span>
					  	<span id="blackdiv">
						<input type="radio" id="black" name="color[]" value="黒" /><label for="black" id="black" class="Color">black</label>
						</span>
						<span id="whitediv">
						<input type="radio" id="white" name="color[]" value="白" /><label for="white" id="white" class="Color">white</label>
						</span>
						
						<br>
						<span id="beigediv">
					  	<input type="radio" id="beige" name="color[]" value="ベージュ" /><label for="beige" id="beige" class="Color">beige</label>
					  	</span>
					  	<span id="navydiv">
						<input type="radio" id="navy" name="color[]" value="ネイビー" /><label for="navy" id="navy" class="Color">navy</label>
						</span>
						<span id="greendiv">
						<input type="radio" id="green" name="color[]" value="緑" /><label for="green" id="green" class="Color">green</label>
						</span>
						
						<br>
						<span id="bluediv">
					  	<input type="radio" id="blue" name="color[]" value="ブルー" /><label for="blue" id="blue" class="Color">blue</label>
					  	</span>
					  	<span id="yellowdiv">
						<input type="radio" id="yellow" name="color[]" value="イエロー" /><label for="yellow" id="yellow" class="Color">yellow</label>
						</span>
						<span id="pinkdiv">
						<input type="radio" id="pink" name="color[]" value="ピンク" /><label for="pink" id="pink" class="Color">pink</label>
						</span>
						
						<br>
						<span id="silverdiv">
					  	<input type="radio" id="silver" name="color[]" value="シルバー" /><label for="silver" id="silver" class="Color">silver</label>
					  	</span>
						<span id="golddiv">
						<input type="radio" id="gold" name="color[]" value="ゴールド" /><label for="gold" id="gold" class="Color">gold</label>
						</span>
						<span id="browndiv">
						<input type="radio" id="brown" name="color[]" value="ブラウン" /><label for="brown" id="brown" class="Color">brown</label>
						</span>
						
						<br>
						<span id="graydiv">
						<input type="radio" id="gray" name="color[]" value="グレー" /><label for="gray" id="gray" class="Color">gray</label>
						</span>
						<span id="garadiv">
						<input type="radio" id="gara" name="color[]" value="柄物" /><label for="gara" id="gara" class="Color">gara</label>
						</span>
					  </div>
					  <div class="form-group Scenediv">
					  	<p id="Scene">Scene</p>
                      		<input type="radio" id="formal" name="scene[]" value="フォーマル" /><label for="formal" class="Scene">formal</label>	
                      		<input type="radio" id="business casual" name="scene[]" value="ビジカジ" /><label for="business casual" class="Scene">biz-casual</label>
                      		<input type="radio" id="casual" name="scene[]" value="カジュアル" /><label for="casual" class="Scene">casual</label>
                      		<br>
                      		<input type="radio" id="date" name="scene[]" value="デート" /><label for="date" class="Scene">date</label></label>	
                      		<input type="radio" id="sports" name="scene[]" value="スポーツ" /><label for="sports" class="Scene">sports</label></label>	
                      		<input type="radio" id="beach" name="scene[]" value="ビーチ" /><label for="beach" class="Scene">beach</label></label>	
					  </div>
							{!! Form::submit('search', ['class' => 'btn btn-primary btn-block']) !!}
                      </div>
                      
                {!! Form::close() !!}