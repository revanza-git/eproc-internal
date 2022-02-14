<script type="text/javascript">

$(function(){
	dataPost = {
		order: 'year',
		sort: 'desc'
	};			

	var folder = $('#tableGenerator').folder({
		url: '<?php echo site_url('perencanaan/rekap/getData/'); ?>',
		data: dataPost,
		dataRightClick: function(key, btn, value){
			_id 			= value[key][3].value;
			_year 			= value[key][2].value;
			urlDivision 	= '<?php echo base_url('perencanaan/rekap/year/');?>/'+_year;
			urlPerencanaan	= '<?php echo base_url('export/rekap_perencanaan/');?>/'+_year;
			urlDepartment 	= '<?php echo base_url('export/rekap_department/');?>/'+_year;

			btn = [{
					icon : 'search',
					label: 'Lihat Data',
					class: 'buttonView',
					},{
						icon : 'file-download',
						label: 'Rekap Perencanaan',
						class: 'buttonPerencanaan',
					}];
			return btn;
		},
		callbackFunctionRightClick: function(){
			var view = $('.buttonView').click(function(){
				$(location).attr('href',urlDivision);
			});

			// DOWNLOAD Data on PDF
			var pdf = $('.buttonPerencanaan').click(function(){
				// $(location).attr('href',urlpdf);
				window.open(urlPerencanaan, "_blank");
			});

			// DOWNLOAD Data on PDF
			var pdf = $('.buttonPDF').click(function(){
				// $(location).attr('href',urlpdf);
				window.open(buttonDepartment, "_blank");
			});
		},

		renderContent: function(el, value, key){
			html = '';
			html += '<div class="caption"><p>'+value[2].value+'</p><p><b>'+value[1].value+'</b> Item(s)</p></div>';
			console.log(folder);
			return html;
		},
		additionFeature: function(el){
			// el.prepend(insertButton(site_url+"perencanaan/rekap/insert/<?php echo $id;?>"));
		},
		finish: function(){
     		

		}
	});
	// var add = $('.buttonAdd').modal({
	// 	render : function(el, data){
	// 		data.onSuccess = function(){
	// 			folder.data('plugin_tableGenerator').fetchData();

	// 					$(add).data('modal').close();
	// 		}

	// 		$(el).form(data);
			
	// 		$('.modal [name="pengadaan"]').on('change', function(){
	// 			// get parent value
	// 			var pengadaan = $(this).val();

	// 			// Change option on select based on parent
	// 			if (pengadaan == "barang") {
	// 				$('.modal [name="jenis_pengadaan"]').empty();
	// 				$('.modal [name="jenis_pengadaan"]').append("<option value=''>Pilih Salah Satu</option><option value=''>Pilih Salah Satu</option><option value=''>Pilih Salah Satu</option><option value=''>Pilih Salah Satu</option>");
	// 			}else if(pengadaan == "jasa"){
	// 				$('.modal [name="jenis_pengadaan"]').empty();
	// 				$('.modal [name="jenis_pengadaan"]').append("<option value=''>Pilih Dibawah Ini</option><option value='jasa_konstruksi'>Jasa Konstruksi</option><option value='jasa_konsultasi'>Jasa Konsultasi</option><option value='jasa_lainnya'>Jasa Lainnya</option>");
	// 			}else{
	// 				$('.modal [name="jenis_pengadaan"]').empty();
	// 				$('.modal [name="jenis_pengadaan"]').append("<option value=''>Pilih Jenis Pengadaan Diatas</option>");
	// 			}
	// 		});
	// 	}
	// });
});


</script>