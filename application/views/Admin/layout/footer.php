<script>

var seriesData = [ [], [], [], [], [] ];
var random = new Rickshaw.Fixtures.RandomData(50);

for (var i = 0; i < 75; i++) {
	random.addData(seriesData);
}

var graph = new Rickshaw.Graph( {
	element: document.getElementById("chart"),
	renderer: 'multi',
	
	dotSize: 5,
	series: [
		{
			name: 'temperature',
			data: seriesData.shift(),
			color: '#AFE9FF',
			renderer: 'stack'
		}, {
			name: 'heat index',
			data: seriesData.shift(),
			color: '#FFCAC0',
			renderer: 'stack'
		}, {
			name: 'dewpoint',
			data: seriesData.shift(),
			color: '#555',
			renderer: 'scatterplot'
		}, {
			name: 'pop',
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y / 4 } }),
			color: '#555',
			renderer: 'bar'
		}, {
			name: 'humidity',
			data: seriesData.shift().map(function(d) { return { x: d.x, y: d.y * 1.5 } }),
			renderer: 'line',
			color: '#ef553a'
		}
	]
} );


graph.render();

var detail = new Rickshaw.Graph.HoverDetail({
	graph: graph
});
</script>
</div>
	      <!-- map -->
<link href="<?=base_url('Assets/Admin/css/jqvmap.css')?>" rel='stylesheet' type='text/css' />
<script src="<?=base_url('Assets/Admin/js/jquery.vmap.js')?>"></script>
<script src="<?=base_url('Assets/Admin/js/jquery.vmap.sampledata.js')?>" type="text/javascript"></script>
<script src="<?=base_url('Assets/Admin/js/jquery.vmap.world.js')?>" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#vmap').vectorMap({
		    map: 'world_en',
		    backgroundColor: '#333333',
		    color: '#ffffff',
		    hoverOpacity: 0.7,
		    selectedColor: '#666666',
		    enableZoom: true,
		    showTooltip: true,
		    values: sample_data,
		    scaleColors: ['#C8EEFF', '#006491'],
		    normalizeFunction: 'polynomial'
		});
	});
</script>
<!-- //map -->
       </div>
       <div class="clearfix"> </div>
    </div>
    <div class="content_bottom">
     
	
		<div class="clearfix"> </div>
	    </div>
		<div class="copy">
            <p>Copyright &copy; 2023 vaccine for all </p>
	    </div>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url('Assets/Admin/js/bootstrap.min.js')?>"></script>
</body>
</html>
