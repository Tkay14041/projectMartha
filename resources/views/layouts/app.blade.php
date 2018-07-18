<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Martha</title>
		
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
				width: 75%;
				height: 90%;
				float: left;
			}
			
			#sidebar {
				width: 25%;
				height: 90%;
				display: inline-block;
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
			
			.id2 img {
				width: 100px;
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
			
			$(function() {
			    $('#sidebar').sortable();
			});
			
			

		</script>

	</head>
    
	<body>
		<div id="map"></div>
		<div id="sidebar"></div>
		
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
		      	
		      	@include('parts.search_form')
		      	
		      </div>
		    </div>
		  </div>
		</div>
		
		@include('map.setting')
		
		
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
				      	<button onclick="addElement('<?php echo $item->shopname ?>', '<?php echo $item->image_path ?>', '<?php echo $item->id ?>', '<?php echo $item->openinghours ?>', '<?php echo $item->price ?>')">Like</button>
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
					
					var er = 6378.137; // 地球の赤道半径（km）、極半径は6356.752(km)
					var latDiff = Math.abs(lat1 - currentLat);
					var lngDiff = Math.abs(lng1 - currentLng);
					 
					// 緯度1度辺りの距離（km）
					var lat1d = (er * 2 * Math.PI) / 360;
					// 緯度の2地点間の距離（km）
					var a2 = latDiff * lat1d;
					 
					// 現在位置の緯度を基準とした半径（km）
					var latr = Math.cos(Math.abs(lng1) / 180 * Math.PI) * er;
					// 経度1度辺りの距離（km）
					var lng1d = (latr * 2 * Math.PI) / 360;
					// 経度の2地点間の距離（km）
					var b2 = lngDiff * lng1d;
					 
					// 直角二等辺三角形の斜辺として距離（km）を算出
					var distance = Math.round(Math.sqrt(Math.pow(a2, 2) + Math.pow(b2, 2)) * 1000);
					
					// var redMarker = L.ExtraMarkers.icon({
					//     icon: 'fa-coffee',
					//     markerColor: 'red',
					//     shape: 'square',
					//     prefix: 'fa'
					//   });
					
					//マーカー with bounce
					// var id = "marker" + "<?php echo $item->id ?>";
					// var bounce = { bounceOnAdd:true };
					// var marker = L.marker([lat1, lng1], bounce)
					// 	.bindPopup(
					// 		"<h4><?php echo $item->shop_name ?></h4>"
					// 		+ '<button type="button" class="btn btn-default" data-toggle="modal" data-target="#<?php echo $item->id ?>"><img class="itemPic" src="ITEM FOLDER/<?php echo $item->image_path ?>"></button>'
					// 		+ "<h4><?php echo $item->item_name ?></h2>"
					// 		+ "<h4>¥<?php echo $item->price ?></h4>"
					// 		+ '<h5>hit items:<?php echo $item->count ?></h5>'
					// 		+ '<span>distance from your location: </span>'
					// 		+ distance
					// 		+ '<span>m</span>')
					// 	.addTo(map);
					// marker.on('mouseover', function (e) {
				 //       this.openPopup();
				 //   });
				    
				    // change the color of markers
				    // L.DomUtil.addClass( marker._icon, 'leaflet-marker-icon-color-green' );
				    // L.DomUtil.addClass( marker._icon, id );
				    
				    

					function addElement(shopname, image, id, openinghours, price) {
						
						 var objBody = document.getElementById("sidebar");
						 
						 var table = document.createElement('TABLE');
						 table.id = 'table' + id;
						 table.setAttribute('onmouseover', 'mouseover()');
						 table.setAttribute('onmouseout', 'mouseout()');
						 
						 var tbody = document.createElement('TBODY');
						 table.appendChild(tbody);
						 
						 var tr = document.createElement('TR');
						 
						 var td1 = document.createElement('TD');
						 var DOM_img = document.createElement('img');
						 DOM_img.src = 'ITEM FOLDER/' + image;
						 td1.appendChild(DOM_img);
						 
						 var td2 = document.createElement('TD');
						 td2.appendChild(document.createTextNode(shopname));
						 td2.appendChild(document.createElement('br'));
						 td2.appendChild(document.createTextNode(openinghours));
						 td2.appendChild(document.createElement('br'));
						 td2.appendChild(document.createTextNode(price));
						 
						 var td3 = document.createElement('TD');
						 var button = document.createElement('button');
						 button.innerHTML = '×';
						 
						 button.setAttribute('onclick', "document.getElementById('sidebar').removeChild(table" + id +")");
						 td3.appendChild(button);
						 
						 var form = document.createElement('input');
						 form.type = "hidden";
						 form.name = "favorite[]";
						 form.value = id;
						 
						 tr.appendChild(td1);
						 tr.appendChild(td2);
						 tr.appendChild(td3);
						 tbody.appendChild(tr);
						 tbody.appendChild(form);
						 
						 objBody.appendChild(table);	 
					}
					
					function mouseover() {
					 	L.DomUtil.addClass( marker._icon, 'leaflet-marker-icon-color-green' );
					}
					
					function mouseout() {
						L.DomUtil.removeClass( marker._icon, 'leaflet-marker-icon-color-green' );
					}
					
				</script>
			@endforeach
		@endif
		
		@include('parts.graph')
		
		<script>
			var bounce = { bounceOnAdd:true };
			"<?php $jsonItems = json_encode($items); ?>"
			var data = JSON.parse(`<?php echo  $jsonItems; ?>`);
			// console.log(data);
			
			var markers = {};
			for (var i = 0; i < data.length; i++) {
				var information = data[i];
				markers[information.id] = L.marker([information.lat, information.lng], bounce)
				.bindPopup(
					"<h4>" + information.shopname + "</h4>"
					+ '<button type="button" class="btn btn-default" data-toggle="modal" data-target="#' + information.id + '"><img class="itemPic" src="ITEM FOLDER/' + information.image_path + '"></button>'
					+ "<h4>" + information.item_name + "</h2>"
					+ "<h4>¥" + information.price + "</h4>"
					+ '<h5>hit items:' + information.count + '</h5>'
					+ '<span>distance from your location: </span>'
					+ distance
					+ '<span>m</span>')
				.addTo(map);
				
			}
			markers[85].on('mouseover', function (e) {
					this.openPopup();
				});
			
			
			
		</script>
		
	</body>
</html>