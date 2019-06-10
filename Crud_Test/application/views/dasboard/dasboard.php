
  <?php $data=$this->db->get('barang')->result(); ?>
		<div id='container'></div>
<script type="text/javascript" src="<?php echo base_url('assets/coba/js/highcharts.js"') ?>"></script>
<script type="text/javascript">
	var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            text: 'GRAFIK JUMLAH STOK BARANG '
         },
         xAxis: {
            categories: ['Nama Barang']
         },
         yAxis: {
            title: {
               text: 'Stok'
            }
         },
              series:             
            [
            <?php 
        foreach($data as $data){
            $merk = $data->nm_barang;
            $stok = $data->stok;
                  
                  ?>
                  {
                      name: '<?php echo $merk; ?>',
                      data: [<?php echo $stok; ?>]
                  },
                  <?php } ?>
            ]
      });
   });	

</script>
  		