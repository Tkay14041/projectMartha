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
				var sampleIcon = L.icon({
				    iconUrl: 'ITEM FOLDER/panda.png',
				    iconRetinaUrl: 'ITEM FOLDER/panda.png',
				    iconSize: [50, 50],
				    iconAnchor: [25, 50],
				    popupAnchor: [0, -50],
				});
				
				var youMarker = L.marker([currentLat, currentLng], { icon: sampleIcon }).addTo(map);
				// L.DomUtil.addClass( youMarker._icon, 'leaflet-marker-icon-color-green' );
			}
			
			function errorFunc(){
				currentLat = 35.661627;
				currentLng = 139.700159;
				var sampleIcon = L.icon({
				    iconUrl: 'ITEM FOLDER/panda.png',
				    iconRetinaUrl: 'ITEM FOLDER/panda.png',
				    iconSize: [50, 50],
				    iconAnchor: [25, 50],
				    popupAnchor: [0, -50],
				});
				
				var youMarker = L.marker([currentLat, currentLng], { icon: sampleIcon }).addTo(map);
				// L.DomUtil.addClass( youMarker._icon, 'leaflet-marker-icon-color-green' );
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