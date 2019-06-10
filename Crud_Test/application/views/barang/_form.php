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
    <h5 class="panel-title"><i class="icon-pencil7"></i> <?=$title;?> <b><i></i></b></h5>
  </div>
  <?php  validation_errors();?>
  <?php echo form_open_multipart($action); ?>
  <input type="hidden" value="<?=$entry['id_barang']?>" name="id">
  <div class="panel-body">
  <div class="form-group <?=$hide;?>">
    <label class='col-md-3'><strong>Gambar</strong></label>
    <div class='col-md-9'><img src="<?php echo base_url('uploads/'.$entry['foto']); ?>" style="width:80px;height:110px;"></div>
  </div>
  <br>
  <br>
  <br>
    <div class="form-group">
    <label class='col-md-3'><strong><?=$gambar?></strong></label>
    <div class='col-md-9'><input type="file" required name="gambar" accept="image/jpeg" class="form-control" style='width:380px'></div>
  </div>
  <br>
  <br>
  <br>
  <div class="form-group">
    <label class='col-md-3'><strong>Nama Barang</strong></label>
    <div class='col-md-9'><input type="text" name="nama" value="<?=$entry['nm_barang']?>" required placeholder="Nama Barang" class="form-control" style='width:380px'></div>
  </div>
  <br>
  <?php echo form_error('nama');?>
  <br>
  <div class="form-group">
    <label class='col-md-3'><strong>Harga Beli</strong></label>
    <div class='col-md-9'><input type="text" name="beli" value="<?=$entry['harga_beli']?>" required placeholder="Harga Beli" class="form-control" style='width:380px'></div>
  </div>
  <br>
  <?php echo form_error('beli');?>
  <br>
  <div class="form-group">
    <label class='col-md-3'><strong>Harga Jual</strong></label>
      <div class='col-md-9'><input type="text" name="jual" value="<?=$entry['harga_jual']?>"  required placeholder="Harga Jual" class="form-control" style='width:380px'></div>
  </div>
  <br>
  <?php echo form_error('jual');?>
  <br>
  <div class="form-group">
    <label class='col-md-3'><strong>Stok</strong></label>
    <div class='col-md-9'><input type="text" name="stok" value="<?=$entry['stok']?>" placeholder="stok" class="form-control" style='width:380px'></div>
  </div>
  <br>
  <?php echo form_error('stok');?>
  <br>
   <div class="panel-footer">
    <br>
    <div class="row">
      <center><button type="submit" class="btn btn-primary"><i class="icon-checkmark-circle2"></i> Simpan</button></center>
    </div>
    <br>
   </div>
   <?php echo form_close(); ?>
</div>