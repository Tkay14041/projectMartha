<script>
			var a = "<?php echo $A[0]->count ?>";
			var b = "<?php echo $B[0]->count ?>";
			var c = "<?php echo $C[0]->count ?>";
			var d = "<?php echo $D[0]->count ?>";
			var e = "<?php echo $E[0]->count ?>";
			var f = "<?php echo $F[0]->count ?>";
			var g = "<?php echo $G[0]->count ?>";
			var h = "<?php echo $H[0]->count ?>";
			var i = "<?php echo $I[0]->count ?>";
			var j = "<?php echo $J[0]->count ?>";
			var k = "<?php echo $K[0]->count ?>";
			var l = "<?php echo $L[0]->count ?>";
			var m = "<?php echo $M[0]->count ?>";
			var n = "<?php echo $N[0]->count ?>";
			var o = "<?php echo $O[0]->count ?>";
			var p = "<?php echo $P[0]->count ?>";
			var q = "<?php echo $Q[0]->count ?>";
			var r = "<?php echo $R[0]->count ?>";
			var s = "<?php echo $S[0]->count ?>";
			var t = "<?php echo $T[0]->count ?>";
			var u = "<?php echo $U[0]->count ?>";
			
			var ctx = document.getElementById('myChart').getContext('2d');
			var myChart = new Chart(ctx, {
			  type: 'line',
			  data: {
			    labels: ['0', '5,000', '10,000', '15,000', '20,000', '25,000', '30,000', '35,000', '40,000', '45,000', '50,000', '55,000', '60,000', '65,000', '70,000', '75,000', '80,000', '85,000', '90,000', '95,000', '100,000+'],
			    datasets: [{
			      label: 'items',
			      data: [a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u],
			      backgroundColor: "rgba(153,255,51,0.4)",
			    }]
			  }
			});
		</script>