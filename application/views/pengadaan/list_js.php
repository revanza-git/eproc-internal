<script type="text/javascript">

$(function(){
	dataPost = {
		// order: 'id',
		// sort: 'desc'
	};			

	var folder = $('#folderGenerator').folder({
		url: '<?php echo site_url('pengadaan/getData/'); ?>',
		data: dataPost,
		dataRightClick: function(key, btn, value){
			_id 		= value[key][2].value;
			urlDivision = '<?php echo base_url('pemaketan/index/');?>/'+_id;
			urlYear = '<?php echo base_url('export_timeline/rekap_timeline/');?>/'+_id;

			btn = [
			{
				icon : 'search',
				label: 'Lihat Data',
				class: 'buttonView',
			}
			,
			{
				icon : 'download',
				label: 'Export Timeline',
				class: 'buttonExport'
			}
			];
			return btn;
		},
		callbackFunctionRightClick: function(){
			var view = $('.buttonView').click(function(){
				$(location).attr('href',urlDivision);
			});

			var export_ = $('.buttonExport').click(function(){
				window.open(urlYear, "_blank");
			});
		},

		renderContent: function(el, value, key){
			console.log(value);
			html = '';
			html += '<div class="caption"><p>'+value[2].value+'</p><p><b>'+value[1].value+'</b> Item(s)</p></div>';
			// console.log(folder);
			return html;
		},
		additionFeature: function(el){
		
		},
		finish: function(){
     	
		}
	});
});

</script>