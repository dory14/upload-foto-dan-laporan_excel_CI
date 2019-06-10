<a href="<?=base_url('list/list_barang/laporan');?>" type="button" class="btn btn-primary btn-sm"><i class="icon-download"></i> Ekspor Ke Excel </a>
<p>
   <?php 
              $data=$this->session->flashdata('sukses');
              if($data!=""){ ?>
              <div class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
              <?php } ?>
              <?php 
              $data2=$this->session->flashdata('error');
              if($data2!=""){ ?>
              <div class="alert alert-danger"><strong> Error! </strong> <?=$data2;?></div>
              <?php } ?>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h5 class="panel-title"><i class="icon-file-eye2"></i> <?=$title;?></h5>
  </div>
<div class="panel-body">
 <table class="table table-bordered datatable-columns">
       <thead>
<tr>
  <th class='hidden'>NO</th>
  <th>NO</th>
  <th>Gambar</th>
  <th></th>
  <th>Nama Barang</th>
  <th>Harga Beli</th>
  <th>Harga Jual</th>
  <th>Stok</th>
</tr>
</thead>
      <tbody>
<?php $no=0; foreach($entry as $data): $no++;?>
  <tr>
  <td class='hidden'></td>
  <td><?=$no;?></td>
  <td><img src="<?php echo base_url('uploads/'.$data->foto); ?>" style="width:80px;height:110px;"></td>
  <td class='hidden'><?=$no;?></td>
  <td><?=$data->nm_barang;?></td>
  <td><?="Rp ".number_format($data->harga_beli, 0, ',', '.'); ?></td>
  <td><?="Rp ".number_format($data->harga_jual, 0, ',', '.'); ?></td>
  <td><?=$data->stok;?></td>
</tr>
<?php endforeach;?>
</tbody>
</table>
</div>
</div>