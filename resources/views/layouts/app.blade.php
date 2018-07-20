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
				width: 100%;
				height: 100vh;
				float: left;
			}
			
			#sidebar {
				width: 100%;
				display: inline-block;
				overflow: scroll;
			}
			
			.sidetable {
				width: 100%;
			}
			
			.sideImg {
				height: 160px;
			}
			
			.td1 {
				width: 160px;
				text-align: center;
			}
			
			.td2 {
				width: 180px;
			}
			
			.td3 {
				width: 24px;
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
			
			#slider-range {
				width: 94%;
			    margin-left: 5%;
			}
			
			/*
			Copyright (c)  created year unknown, Robert Abba @robabba
			Released under the MIT license
			http://opensource.org/licenses/mit-license.php
			*/
			
			body{
				  min-height: 100vh;
				  margin: 0 auto;
				  background-color:#ffffff;
				  z-index:500;
				  overflow-x: hidden;
				  overflow-y: hidden;
				}
				
				.side-bar[data-position="left"]{
				  position: absolute;
				  top: 50%;
				  left: 0;
				  -webkit-transform: translateY(-50%);
				  -ms-transform: translateY(-50%);
				  transform: translateY(-50%);
				  min-height: 100%;
				  width: 64px;
				  background-color: #43a;
				  border-top-right-radius: 6px;
				  border-bottom-right-radius: 6px;
				  z-index:500;
				}
				
				.side-bar[data-position="right"]{
				  position: absolute;
				  right: 400px;
				  top: 50%;
				  -webkit-transform: translateY(-50%);
				  -ms-transform: translateY(-50%);
				  transform: translateY(-50%);
				  min-height: 100%;
				  width: 64px;
				  background-color: #333;
				}
				
				div.item {
				  color: white;
				  height: 64px;
				  width: 64px;
				  background-color: #444;
				  line-height: 64px;
				  text-align: center;
				  font-size: 20px;
				}
				
				div.item.bottom {
				  position: absolute;
				  bottom: 10%;
				}
				
				div.heading {
				  font-size: 16px;
				  font-family: 'Lato', sans-serif;
				  color: white;
				  height: 44px;
				  line-height: 44px;
				  font-weight: 700;
				  padding: 10px;
				  background-color: #333;
				}
				
				div.item:hover {
				  background-color: #6761A8 ;
				  cursor: pointer;
				}
				
				div.side-panel {
				  z-index: 999;
				  right: -400px;
				  position: absolute;
				  min-width: 400px;
				  min-height: 100%;
				  background-color: #fff;
				  display: inline-block;
				  width: 0;
				}
				
				div.side-panel.open{
				  animation-name: sidebar-open;
				  animation-duration: .25s;
				  right: 0;
				}
				
				div.side-panel.close{
				  animation-name: sidebar-close;
				  animation-duration: .25s;
				  right: -400px;
				}
				
				.close {
					opacity: 0.6;
				}
				
				/* Keyframes */
				@keyframes sidebar-open {
				  0% {
				    right: -400px;
				  }
				  
				  100% {
				    right: 0;
				  }
				}
				
				@keyframes sidebar-close {
				  0% {
				    right: 0;
				  }
				  
				  100% {
				    right: -400px;
				  }
				}
				
				/*img {*/
				/*    width: 100%;*/
				/*    position: absolute;*/
				/*}*/
				
				.side-panel {
				    z-index: 9999;
				    position: relative;
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
			    $('#sidebar').sortable({
			    	handle: '.sideImg',
			    	axis: 'y'
			    });
			});
			
			//ここから、ポップサイドバーのジャバスクリプト
	        let EventHandler = {
			  ShowHideSideBar: function(){
			    if (document.getElementById("side-panel").className.indexOf("open") !== -1){
			      document.getElementById("side-panel").className = "side-panel"
			      document.getElementById("side-panel").className += " close"
			      document.getElementById('show_hide').childNodes[0].className = "fa fa-angle-double-left"
			      return
			    }
			    
			    document.getElementById("side-panel").className = "side-panel"
			    document.getElementById("side-panel").className += " open"
			    document.getElementById('show_hide').childNodes[0].className = "fa fa-angle-double-right"
			  }
			}
			
			window.onload = () => {
			  document.getElementById('show_hide').onclick = EventHandler.ShowHideSideBar
			}
			//pop side bar java scriptおわり
			
			jQuery(function($) {
				var boxHeight = $('#map').height();
				$('#sidebar').css('height', boxHeight + 'px');
			});
			
		</script>

	</head>
    
	<body>
		<div id="map"></div>
		
		
		
		<!--
		Copyright (c) created year unknown, Robert Abba @robabba
		Released under the MIT license
		http://opensource.org/licenses/mit-license.php
		-->	

		 <div class="side-panel" id="side-panel">
		 	<div id="sidepanel-heading" class="heading">
		    	<!--<link rel="stylesheet" href="index.css">-->
		        <span id="content-heading">USER LIKES</span>
		    </div>
		            
		  <!--<iframe id="content-frame" style="height: 90%; border:none; display: block; width: 400px; position: absolute;"> </iframe>-->
		  
		  <div id="sidebar">
					<!--<div class=search>-->
					<!--<button type="button" class="btn btn-default glyphicon glyphicon-search" data-toggle="modal" data-target="#myModal2"></button></div>-->
		  
		  <div data-position="right" class="side-bar">
		    <div class="item" button type="button"><i class="glyphicon glyphicon-search" data-toggle="modal" data-target="#myModal2">F</i></div>
		    <div class="item" button type="button"><i class="glyphicon glyphicon-search" data-toggle="modal" data-target="#myModal3">R</i></div>
		    <div class="item"><i class="fa fa-user"></i></div>
		    <div class="item"><i class="fa fa-users"></i></div>
		    <div class="item"><i class="fa fa-folder-o"></i></div>
		    <div class="item"><i class="fa fa-file-code-o"></i></div>
		
		    <div class="item bottom" id="show_hide"><i class="fa fa-angle-double-left"></i></div>
		  </div>
		  <!--<script src="index.js"></script>-->
		  
		</div>
		</div>
		            
		
		<!--<ここからポップアップサイドバーおわり>-->
		
		
		
		
		
		
		
		<!--<div id="sidebar"></div>-->
		
		<!--<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">Fassion</button>-->
		<!--<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal3">Restaurant</button>-->
		
		<div class="modal fade" id="myModal2">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Fassion</h4>
		      </div>
		      <div class="modal-body">
		      	
		      	@include('parts.fassion_search')
		      	
		      </div>
		    </div>
		  </div>
		</div>
		
		<div class="modal fade" id="myModal3">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title">Restaurant</h4>
		      </div>
		      <div class="modal-body">
		      	
		      	@include('parts.restaurant_search')
		      	
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
				      	<p>Tel: {{ $item->tel }}</p>
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
					
				</script>
			@endforeach
		@endif
		
		<!--restaurant-->
		@if(!empty($restaurants) && $restaurants == true)
			@foreach($restaurants as $restaurant)
				
				<!-- モーダルウィンドウの中身 -->
				<div class="modal fade" id="<?php echo $restaurant->id ?>">
				  <div class="modal-dialog">
				    <div class="modal-content">
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
				      	<button onclick="addElement('<?php echo $restaurant->name ?>', '<?php echo $restaurant->image_path ?>', '<?php echo $restaurant->id ?>', '<?php echo $restaurant->openinghours ?>', '<?php echo $restaurant->tel ?>')">Like</button>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
				       </div>
				    </div>
				  </div>
				</div>
				<script>
					
				</script>
			@endforeach
		@endif
		
		@include('parts.graph')
		
		@if(!empty($items) && $items == true)
		<script>
			var bounce = { bounceOnAdd:true };
			"<?php $jsonItems = json_encode($items); ?>"
			var shopData = JSON.parse(`<?php echo  $jsonItems; ?>`);
			// console.log(data);
			
			var shopMarkers = {};
			for (var i = 0; i < shopData.length; i++) {
				var shopInfo = shopData[i];
				shopMarkers[shopInfo.id] = L.marker([shopInfo.lat, shopInfo.lng], bounce)
				.bindPopup(
					"<h4>" + shopInfo.shopname + "</h4>"
					+ '<button type="button" class="btn btn-default" data-toggle="modal" data-target="#' + shopInfo.id + '"><img class="itemPic" src="ITEM FOLDER/' + shopInfo.image_path + '"></button>'
					+ "<h4>" + shopInfo.item_name + "</h2>"
					+ "<h4>¥" + shopInfo.price + "</h4>"
					+ '<h5>hit items:' + shopInfo.count + '</h5>'
					// + '<span>distance from your location: </span>'
					// + distance
					// + '<span>m</span>'
					)
				.addTo(map);
				shopMarkers[shopInfo.id].on('mouseover', function (e) {
					this.openPopup();
				});
				
				// var lat1 = information.lat;
				// var lng1 = information.lng;
				// console.log(information.id);
				// console.log(information.lat);
				// console.log(lat1);
				// console.log(information.lng);
				// console.log(lng1);
				
					
				// var er = 6378.137; // 地球の赤道半径（km）、極半径は6356.752(km)
				// var latDiff = Math.abs(lat1 - currentLat);
				// var lngDiff = Math.abs(lng1 - currentLng);
					 
				// // 緯度1度辺りの距離（km）
				// var lat1d = (er * 2 * Math.PI) / 360;
				// // 緯度の2地点間の距離（km）
				// var a2 = latDiff * lat1d;
					 
				// // 現在位置の緯度を基準とした半径（km）
				// var latr = Math.cos(Math.abs(lng1) / 180 * Math.PI) * er;
				// // 経度1度辺りの距離（km）
				// var lng1d = (latr * 2 * Math.PI) / 360;
				// // 経度の2地点間の距離（km）
				// var b2 = lngDiff * lng1d;
				
				// // 直角二等辺三角形の斜辺として距離（km）を算出
				// var distance = Math.round(Math.sqrt(Math.pow(a2, 2) + Math.pow(b2, 2)) * 1000);

			}
			
			function addElement(shopname, image, id, openinghours, price) {
				if (document.getElementById('table' + id) === null) {
						
					var objBody = document.getElementById("sidebar");
							 
					var table = document.createElement('TABLE');
					table.id = 'table' + id;
					table.className = 'sidetable';
							 
					var tbody = document.createElement('TBODY');
					table.appendChild(tbody);
							 
					var tr = document.createElement('TR');
							 
					var td1 = document.createElement('TD');
					var DOM_img = document.createElement('img');
					DOM_img.src = 'ITEM FOLDER/' + image;
					DOM_img.className = 'sideImg';
					td1.appendChild(DOM_img);
					td1.setAttribute('onmouseover', 'mouseover(' + id + ')');
					td1.setAttribute('onmouseout', 'mouseout(' + id + ')');
					td1.className = 'td1';
							 
					var td2 = document.createElement('TD');
					td2.appendChild(document.createTextNode(shopname));
					td2.appendChild(document.createElement('br'));
					td2.appendChild(document.createTextNode(openinghours));
					td2.appendChild(document.createElement('br'));
					td2.appendChild(document.createTextNode('￥' + price));
					td2.setAttribute('onmouseover', 'mouseover(' + id + ')');
					td2.setAttribute('onmouseout', 'mouseout(' + id + ')');
					td2.className = 'td2';
							 
					var td3 = document.createElement('TD');
					var button = document.createElement('button');
					button.innerHTML = '×';
					button.className = 'btn-danger'; 
					button.setAttribute('onclick', "document.getElementById('sidebar').removeChild(table" + id +")");
					td3.appendChild(button);
					td3.className = 'td3';
							 
					// var form = document.createElement('input');
					// form.type = "hidden";
					// form.name = "favorite[]";
					// form.value = id;
							 
					tr.appendChild(td1);
					tr.appendChild(td2);
					tr.appendChild(td3);
					tbody.appendChild(tr);
					// tbody.appendChild(form);
							 
					objBody.appendChild(table);	 
				}
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
					// + '<span>distance from your location: </span>'
					// + distance
					// + '<span>m</span>'
					)
				.addTo(map);
				restaurantMarkers[restaurantInfo.id].on('mouseover', function (e) {
					this.openPopup();
				});
				console.log(restaurantMarkers);
				// var lat1 = information.lat;
				// var lng1 = information.lng;
				// console.log(information.id);
				// console.log(information.lat);
				// console.log(lat1);
				// console.log(information.lng);
				// console.log(lng1);
				
					
				// var er = 6378.137; // 地球の赤道半径（km）、極半径は6356.752(km)
				// var latDiff = Math.abs(lat1 - currentLat);
				// var lngDiff = Math.abs(lng1 - currentLng);
					 
				// // 緯度1度辺りの距離（km）
				// var lat1d = (er * 2 * Math.PI) / 360;
				// // 緯度の2地点間の距離（km）
				// var a2 = latDiff * lat1d;
					 
				// // 現在位置の緯度を基準とした半径（km）
				// var latr = Math.cos(Math.abs(lng1) / 180 * Math.PI) * er;
				// // 経度1度辺りの距離（km）
				// var lng1d = (latr * 2 * Math.PI) / 360;
				// // 経度の2地点間の距離（km）
				// var b2 = lngDiff * lng1d;
				
				// // 直角二等辺三角形の斜辺として距離（km）を算出
				// var distance = Math.round(Math.sqrt(Math.pow(a2, 2) + Math.pow(b2, 2)) * 1000);

			}
			
			function addElement(name, image, id, openinghours, tel) {
				if (document.getElementById('table' + id) === null) {
					var objBody = document.getElementById("sidebar");
						 
					var table = document.createElement('TABLE');
					table.id = 'table' + id;
					table.className = 'sidetable';
							 
					var tbody = document.createElement('TBODY');
					table.appendChild(tbody);
							 
					var tr = document.createElement('TR');
							 
					var td1 = document.createElement('TD');
					var DOM_img = document.createElement('img');
					DOM_img.src = 'FOODS FOLDER/' + image;
					DOM_img.className = 'sideImg';
					td1.appendChild(DOM_img);
					td1.setAttribute('onmouseover', 'mouseover(' + id + ')');
					td1.setAttribute('onmouseout', 'mouseout(' + id + ')');
					td1.className = 'td1';
							 
					var td2 = document.createElement('TD');
					td2.appendChild(document.createTextNode(name));
					td2.appendChild(document.createElement('br'));
					td2.appendChild(document.createTextNode(tel));
					td2.appendChild(document.createElement('br'));
					td2.appendChild(document.createTextNode(openinghours));
					td2.setAttribute('onmouseover', 'mouseover(' + id + ')');
					td2.setAttribute('onmouseout', 'mouseout(' + id + ')');
					td2.className = 'td2';
							 
					var td3 = document.createElement('TD');
					var button = document.createElement('button');
					button.innerHTML = '×';
					button.className = 'btn-danger';
					button.setAttribute('onclick', "document.getElementById('sidebar').removeChild(table" + id +")");
					td3.appendChild(button);
					td3.className = 'td3';

					// var form = document.createElement('input');
					// form.type = "hidden";
					// form.name = "favorite[]";
					// form.value = id;
							 
					tr.appendChild(td1);
					tr.appendChild(td2);
					tr.appendChild(td3);
					tbody.appendChild(tr);
					// tbody.appendChild(form);
							 
					objBody.appendChild(table);	 
				}
						
				
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