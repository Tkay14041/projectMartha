<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Martha</title>
        
        
		<link rel="stylesheet" href="css/fassion_search.css" />
		
		<!--bootstrap-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <!--slider-->
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
		<script src="https://code.jquery.com/jquery-1.8.3.js"></script>
		<script src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
		
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
				float: left;
			}
			
			#map {
				width: 100%;
				height: 100vh;
				position: absolute;
			}
			
			.tab {
				width: 4%;
				min-width: 40px;
				height: 100%;
				background-color: #333;
				position: relative;
				z-index: 999;
				display: block;
				float: right;
				text-align: center;
				opacity: 0.7;
			}
			
			.sidebar {
				/*min-width: 200px;*/
				height: 100%;
				position: relative;
				z-index: 999;
				display: block;
				float: right;
				padding: 0;
			    background-color:rgba(0,0,0,0.9);
			    overflow: auto;
			}
			
			#sidebar {
				margin-top: 40px;
			}
			

			
			.sidebutton{
				width: 90%;
				min-height: 40px;
				margin-top: 20px;
				margin-bottom: 10px;
			}
			
			.sidebutton:hover {
				opacity: 0.3;
				cursor: pointer;
			}
			
			.sidebutton i{
				width: 100%;
				height: 100%;
				text-align: center;
			}
			
			.sidebutton span {
				color: white;
			}
			
			.glyphicon {
				font-size: 20px;
				color: white;
			}
			
			.sidetable {
				width: 100%;
			}
			
			.modal-header {
				padding-bottom:0px;

			}

			.ui-state-default{
				width:100%;
				height:auto;
			}
			
			.leaflet-marker-icon-color-blue   { -webkit-filter: hue-rotate( 30deg); filter: hue-rotate( 30deg); }
			.leaflet-marker-icon-color-pink   { -webkit-filter: hue-rotate( 90deg); filter: hue-rotate( 90deg); }
			.leaflet-marker-icon-color-red    { -webkit-filter: hue-rotate(150deg); filter: hue-rotate(150deg); }
			.leaflet-marker-icon-color-yellow { -webkit-filter: hue-rotate(210deg); filter: hue-rotate(210deg); }
			.leaflet-marker-icon-color-green  { -webkit-filter: hue-rotate(270deg); filter: hue-rotate(270deg); }
			.leaflet-marker-icon-color-alua   { -webkit-filter: hue-rotate(330deg); filter: hue-rotate(330deg); }
			
			.leaflet-popup-content-wrapper {
				width: 230px;
				text-align:center;
    			background-color:rgba(255,255,255,0.9);
    			font-family: 'Hiragino Kaku Gothic Pro', 'ヒラギノ角ゴ Pro W3', Meiryo, メイリオ, Osaka, 'MS PGothic', arial, helvetica, sans-serif;
			}
			
			label {
				width: 170px;
			}
			
			.leaflet-popup{			
			webkit-transition: 20s ease-in-out;
		    -moz-transition: 20s ease-in-out;
		    -o-transition: 20s ease-in-out;
		    transition: 20s ease-in-out;
		    -webkit-transform: scale(1);
			transform: scale(1);
			}
			
			.leaflet-popup :hover{
			webkit-transform: scale(1.0001);
			transform: scale(1.0001)
			}
			
			.stockItem {
				display: inline-block;
			}
			
			.id2 img {
				width: 100px;
			}
			
			#slider-range {
				width: 94%;
			    margin-left: 5%;
			}
			
			.btn-danger{
				font-size:20px;
				cursor: pointer;	/* マウスカーソルの形（リンクカーソル）を指定する */
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
			
			$(function() {
			    $('#sidebar').sortable({
			    	handle: '.sideImg',
			    	axis: 'y'
			    });
			});
			
			jQuery( function() {
			    jQuery( '.show_hide' ) . click( function() {
			        jQuery( ".sidebar" ) . animate( { width: 'toggle' }, 'fast' );
			        var $show_hide = $(this);
			        if ($show_hide.hasClass('open')) {
			        	$show_hide.find('span').text('>>');
			        	$show_hide.removeClass('open');
			        } else {
			        	$show_hide.find('span').text('<<');
			        	$show_hide.addClass('open');
			        }
			    } );
			} );
			
		</script>

	</head>
    
	<body>
		<div id="map"></div>
		<div class="sidebar col-sm-3 col-xs-6">
			<h4 class="sidetitle">USER LIKES</h4>
			<div id="sidebar">
				@if(!empty($items) && $items == true)
				@foreach($items as $item)
				<table class="sidetable" id="table{{ $item->id }}" >
					<tbody onmouseover="mouseover({{ $item->id }})" onmouseout="mouseout({{ $item->id }})">
						<tr class="trtop">
							<td class="td1"><img src="ITEM FOLDER/{{ $item->image_path }}" class="sideImg"></td>
							<td class="td2">
								{{ $item->shopname }} <br>
								{{ $item->openinghours }} <br>
								￥{{ $item->price }} <br>
							</td>
						</tr>
					</tbody>
				</table>
				@endforeach
				@endif
				
				@if(!empty($restaurants) && $restaurants == true)
				@foreach($restaurants as $restaurant)
				<table class="sidetable" id="table{{ $restaurant->id }}" >
					<tbody onmouseover="mouseover({{ $restaurant->id }})" onmouseout="mouseout({{ $restaurant->id }})">
						<tr class="trtop">
							<td class="td1"><img src="FOODS FOLDER/{{ $restaurant->image_path }}" class="sideImg"></td>
							<td class="td2">
								{{ $restaurant->name }} <br>
								{{ $restaurant->tel }} <br>
								{{ $restaurant->openinghours }} <br>
							</td>
						</tr>
					</tbody>
				</table>
				@endforeach
				@endif
			</div>
		</div>
		<div class="tab">
			<div class="sidebutton" button type="button"><a class="glyphicon glyphicon-arrow-left" href="/map"></a></div>
			@if(Auth::check())
			
			<div class="sidebutton" button type="button"><a class="glyphicon glyphicon-log-out" href="/logout"></a></div>
			@endif
			
			
			
			<div class="sidebutton show_hide"><span>>></span></div>
		</div>
		
		@include('map.setting')
		
		
		@if(!empty($items) && $items == true)
			@foreach($items as $item)
				
				<!-- モーダルウィンドウの中身 -->
				<div class="modal fade" id="<?php echo $item->id ?>">
				  <div class="modal-dialog">
				    <div class="modal-content" id="fassion-modal-content">
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
				      	<p>Tel: {{ $item->tel }}</p>
				      	<p>{{ $item->description }}</p>
				      	</div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				       </div>
				    </div>
				  </div>
				</div>
				<script>
					
				</script>
			@endforeach
		@endif
		
		<!--restaurant-->
		@if(!empty($restaurants) && $restaurants == true)
			@foreach($restaurants as $restaurant)
				
				<!-- モーダルウィンドウの中身 -->
				<div class="modal fade" id="<?php echo $restaurant->id ?>">
				  <div class="modal-dialog">
				    <div class="modal-content" id="items-modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title">
					        	{{ $restaurant->name }}
					        </h4>
				      </div>
				      <div class="modal-body">
				      	@foreach($menus as $menu)
				      		@if($restaurant->id == $menu->restaurant_id)
				      			<p>{{ $menu->meal }}<span>￥{{ $menu->price }}</span></p>
				      		@endif
				      	@endforeach
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				       </div>
				    </div>
				  </div>
				</div>
				<script>
					
				</script>
			@endforeach
		@endif
		
		@if(!empty($items) && $items == true)
		<script>
			var bounce = { bounceOnAdd:true };
			"<?php $jsonItems = json_encode($items); ?>"
			var shopData = JSON.parse(`<?php echo  $jsonItems; ?>`);
			console.log(shopData);
			
			var shopMarkers = {};
			for (var i = 0; i < shopData.length; i++) {
				var shopInfo = shopData[i];
				shopMarkers[shopInfo.id] = L.marker([shopInfo.lat, shopInfo.lng], bounce)
				.bindPopup(
					"<h4>" + shopInfo.shopname + "</h4>"
					+ '<button type="button" class="btn btn-default" data-toggle="modal" data-target="#' + shopInfo.id + '"><img class="itemPic" src="ITEM FOLDER/' + shopInfo.image_path + '"></button>'
					+ "<h4>" + shopInfo.item_name + "</h2>"
					+ "<h4>¥" + shopInfo.price + "</h4>"
					)
				.addTo(map);
				shopMarkers[shopInfo.id].on('mouseover', function (e) {
					this.openPopup();
				});


			}
					
			function mouseover(id) {
				L.DomUtil.addClass( shopMarkers[id]._icon, 'leaflet-marker-icon-color-pink' );
			}
					
			function mouseout(id) {
				L.DomUtil.removeClass( shopMarkers[id]._icon, 'leaflet-marker-icon-color-pink' );
			}
		</script>
		@endif
		
		@if(!empty($restaurants) && $restaurants == true)
		<script>
			var bounce = { bounceOnAdd:true };
			//restaurant
			"<?php $jsonRestaurants = json_encode($restaurants); ?>"
			var restaurantData = JSON.parse(`<?php echo  $jsonRestaurants; ?>`);
			console.log(restaurantData);
			
			var restaurantMarkers = {};
			for (var j = 0; j < restaurantData.length; j++) {
				var restaurantInfo = restaurantData[j];
				restaurantMarkers[restaurantInfo.id] = L.marker([restaurantInfo.lat, restaurantInfo.lng], bounce)
				.bindPopup(
					"<h4>" + restaurantInfo.name + "</h4>"
					+ '<button type="button" class="btn btn-default" data-toggle="modal" data-target="#' + restaurantInfo.id + '"><img class="itemPic" src="FOODS FOLDER/' + restaurantInfo.image_path + '"></button>'
					+ "<p>Tel: " + restaurantInfo.tel + "</p>"
					+ "<p>Opening Hours: " + restaurantInfo.openinghours + "</p>"
					+ "<p>" + restaurantInfo.address + "</p>"
					)
				.addTo(map);
				restaurantMarkers[restaurantInfo.id].on('mouseover', function (e) {
					this.openPopup();
				});

			}
			
			
			function mouseover(id) {
				L.DomUtil.addClass(restaurantMarkers[id]._icon, 'leaflet-marker-icon-color-red');
			}
					
			function mouseout(id) {
				L.DomUtil.removeClass(restaurantMarkers[id]._icon, 'leaflet-marker-icon-color-red');
			}
			
		</script>
		@endif
		
	</body>
</html>