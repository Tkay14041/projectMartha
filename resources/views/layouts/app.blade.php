<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Martha</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <!--slider-->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
		<script src="https://code.jquery.com/jquery-1.8.3.js"></script>
		<script src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
		
		<!--icon-->
		<link rel="stylesheet" href="css/leaflet.extra-markers.min.css" />
    	<script src="js/leaflet.extra-markers.min.js"></script>
    	
    	<!--fontawesome-->
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        
        <link 
        	rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
			integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
			crossorigin=""/>
		<!--<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css">-->
		<!--<link rel="stylesheet" type="text/css" href="css/leaflet-routing-machine.css">-->
		<script 
			src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
			integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
			crossorigin="">
		</script>
		<!--<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>-->
		<script type="text/javascript" src="js/leaflet-routing-machine.js"></script>
		<script type="text/javascript" src="js/bouncemarker.js"></script>
		
		<style>
			html, body  {
				width: 100%;
				height: 100%;
				padding: 0px;
				margin: 0px;
			}
			#map {
				width: 100%;
				height: 90%;
			}
			
			.leaflet-marker-icon-color-blue   { -webkit-filter: hue-rotate( 30deg); filter: hue-rotate( 30deg); }
			.leaflet-marker-icon-color-pink   { -webkit-filter: hue-rotate( 90deg); filter: hue-rotate( 90deg); }
			.leaflet-marker-icon-color-red    { -webkit-filter: hue-rotate(150deg); filter: hue-rotate(150deg); }
			.leaflet-marker-icon-color-yellow { -webkit-filter: hue-rotate(210deg); filter: hue-rotate(210deg); }
			.leaflet-marker-icon-color-green  { -webkit-filter: hue-rotate(270deg); filter: hue-rotate(270deg); }
			.leaflet-marker-icon-color-alua   { -webkit-filter: hue-rotate(330deg); filter: hue-rotate(330deg); }
			
			.leaflet-popup-content-wrapper {
				width: 268px;
				opacity: 0.95;
			}
			
			label {
				width: 170px;
			}
			
			.itemPic {
				width: 200px;
			}
			
			.stocks {
				width: 200px;
			}
			
			.stockItem {
				display: inline-block;
			}
			
		</style>
		
		<script>
		  $(function() {
		    $( "#slider-range" ).slider({
		      range: true,
		      min: 0,
		      max: 100000,
		      values: [ 5000, 500000 ],
		      step: 500,
		      slide: function( event, ui ) {
		        $( "#minPrice" ).val(ui.values[ 0 ]);
		        $( "#maxPrice" ).val(ui.values[ 1 ]);
		      }
		    });
		    $( "#minPrice" ).val($( "#slider-range" ).slider( "values", 0 ));
		    $( "#maxPrice" ).val($( "#slider-range" ).slider( "values", 1 ));
		  });
		  
		 // if( navigator.geolocation )
			// {
			// 	// 現在位置を取得できる場合の処理
			// 	alert( "あなたの端末では、現在位置を取得することができます。" ) ;
			// }
			
			// // Geolocation APIに対応していない
			// else
			// {
			// 	// 現在位置を取得できない場合の処理
			// 	alert( "あなたの端末では、現在位置を取得できません。" ) ;
			// }

		</script>

	</head>
    
	<body>
		<div id="map"></div>
		
		<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">検索</button>
		<!--<div id="slider-range"></div>-->
		<!--<input type="number" id="minPrice">-->
		
		<div class="modal fade" id="myModal2">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">検索フォーム</h4>
		      </div>
		      <div class="modal-body">
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
		      </div>
		    </div>
		  </div>
		</div>
		
		<script>
			//地図初期設定
			// var CenterLat = 35.661627;
			// var CenterLng = 139.700159;
			
			var centerLat = 0;
			var centerLng = 0;
			var currentLat = 0;
			var currentLng = 0;
			var map = "";
			
			navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
			
			function successCallback(position) {
				// centerLat = position.coords.latitude;
				// centerLng = position.coords.longitude;
				
				centerLat = 35.661627;
				centerLng = 139.700159;
				
				map = L.map('map').setView([centerLat, centerLng], 15);
				//OSMレイヤー追加
				L.tileLayer(
					'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
					{
						attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>',
						maxZoom: 19,
						minZoom: 15
					}
				).addTo(map);
			}
			
			function errorCallback() {
				alert( "位置情報取得失敗したでござる！" ) ;
				centerLat = 35.661627;
				centerLng = 139.700159;
				
				map = L.map('map').setView([centerLat, centerLng], 15);
				//OSMレイヤー追加
				L.tileLayer(
					'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
					{
						attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>',
						maxZoom: 19,
						minZoom: 15
					}
				).addTo(map);
			}
			
			var watchId = navigator.geolocation.watchPosition( successFunc , errorFunc);
			
			function successFunc(position) {
				currentLat = position.coords.latitude;
				currentLng = position.coords.longitude;
				
				var youMarker = L.marker([currentLat, currentLng]).addTo(map);
				L.DomUtil.addClass( youMarker._icon, 'leaflet-marker-icon-color-green' );
			}
			
			function errorFunc(){
				currentLat = 35.661627;
				currentLng = 139.700159;
				
				var youMarker = L.marker([currentLat, currentLng]).addTo(map);
				L.DomUtil.addClass( youMarker._icon, 'leaflet-marker-icon-color-green' );
			}
			
		
			
 
			//OSMレイヤー追加
			L.tileLayer(
				'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
				{
					attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>',
					maxZoom: 19,
					minZoom: 15
				}
			).addTo(map);
			
			// L.Routing.control({
			//     waypoints: [
			//         L.latLng(35.676683,139.7558916),
			//         L.latLng(35.6852696,139.7630878)
			//     ],
			//     routeWhileDragging: true
			// }).addTo(map);
			

			
			
		</script>
		
		@if(!empty($items) && $items == true)
			@foreach($items as $item)
				
				<!-- モーダルウィンドウの中身 -->
				<div class="modal fade" id="<?php echo $item->id ?>">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title">
					        	{{ $item->shopname }}
					        </h4>
				      </div>
				      <div class="modal-body">
				      	@foreach($shouhin as $sina)
					      	@if($item->shop_id == $sina->shop_id)
					      		<div class="stockItem">
						      		<img class="stocks" src="ITEM FOLDER/<?php echo $sina->image_path ?>">
						      		<p>￥{{ $sina->price }}</p>
					      		</div>
					      	@endif
				      	@endforeach
				      	<p>{{ $item->address }}</p>
				      	<p>{{ $item->tel }}</p>
				      	<p>{{ $item->description }}</p>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
				       </div>
				    </div>
				  </div>
				</div>
				<script>
					var lat1 = "<?php echo $item->lat ?>";
					var lng1 = "<?php echo $item->lng ?>";
					
					// var redMarker = L.ExtraMarkers.icon({
					//     icon: 'fa-coffee',
					//     markerColor: 'red',
					//     shape: 'square',
					//     prefix: 'fa'
					//   });
					
					//マーカー with bounce
						var bounce = { bounceOnAdd:true };
						var marker = L.marker([lat1, lng1], bounce)
							.bindPopup(
								'<button type="button" class="btn btn-default" data-toggle="modal" data-target="#<?php echo $item->id ?>"><img class="itemPic" src="ITEM FOLDER/<?php echo $item->image_path ?>"></button>'
								+ '<h4>¥<?php echo $item->price ?>stock:<?php echo $item->count ?></h4>')
							.addTo(map);
						marker.on('mouseover', function (e) {
				            this.openPopup();
				        });
				    
				 //   var price = "<?php echo $item->price ?>";
					// var minPrice = document.getElementById('minPrice').value;
					
					// console.log(minPrice);
					
					// if (price < minPrice) {
					// 	map.removeOverlay(marker);
					// }
					
						
		  
						
				</script>
			@endforeach
		@endif
		
	</body>
</html>