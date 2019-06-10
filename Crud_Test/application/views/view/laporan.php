<?php 
header("content-type:Application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=barang.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<style>
td {
   vertical-align: middle;
}
</style>
<div class='container'>
<h3 align='center' style='font-size:20px'>Laporan Data Barang</h3>
<div align='center'>Tanggal &nbsp;&nbsp;<?= date('d-m-Y');?>
</div>
<p>
<table border="1" style="font-size:13px;border:100px;font-family:Arial;"><tr>
    <thead>
  <th>NO</th>
  <th width='150'>Nama Barang</th>
  <th width='150'>Harga Beli</th>
  <th width='150'>Harga Jual</th>
  <th width='100'>Stok</th>
</tr>
 </thead>
    <tbody>
<?php $no=0; foreach($entry as $data): $no++;?>
  <tr>
  <td><center><?=$no;?></center></td>
  <td><?=$data->nm_barang;?></td>
  <td><?="Rp ".number_format($data->harga_beli, 0, ',', '.'); ?></td>
  <td><?="Rp ".number_format($data->harga_jual, 0, ',', '.'); ?></td>
  <td><center><?=$data->stok;?></center></td>
</tr>
<?php endforeach;?>
    </tbody>
</table>
</div>
