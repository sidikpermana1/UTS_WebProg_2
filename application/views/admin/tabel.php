<br>
<br>
<br>
<br>
<br>
<div class="container">
<a href="<?= base_url('umum/form'); ?>" class="btn btn-primary" style="margin-bottom: 10px"> + Tambah Data</a>
<table class="table table-striped table-dark">
  <thead >
    <tr>
          <th width="1%">No</th>
          <th width="10%">Kode Barang</th>
           <th width="15%">Tanggal Pembelian</th>
          <th width="15%">Nama Barang</th>
          <th width="15%">Harga</th>
          <th width="10%">Nama Pembeli</th>
          <th width="20%">Email</th>
          <th width="10%">No Hp</th>
          <th style="vertical-align: middle;"width="35%" colspan="2" ><em class="fa fa-cog"></em></th>
        </tr>
  </thead>
  <tbody>
  <?php $i= 1; ?>
  <?php foreach($pembelian as $ab) : ?>
    <tr>
      <th style="vertical-align: middle;" scope="row" ><?= $i; ?></th>
      <td style="vertical-align: middle;"><?= $ab['kode_barang']?></td>
      <td style="vertical-align: middle;"><?= $ab['Tanggal_beli']?></td>
      <td style="vertical-align: middle;"><?= $ab['Nama_Barang']?></td>
      <td style="vertical-align: middle;"><?= $ab['Harga']?></td>
      <td style="vertical-align: middle;"><?= $ab['Nama_pembeli']?></td>
      <td style="vertical-align: middle;"><?= $ab['Email']?></td>
       <td style="vertical-align: middle;"><?= $ab['No_HP']?></td>
      <td style="vertical-align: middle;">
            <a href=""class="btn btn-small"><i class="fas fa-edit"></i></a>
						<a onclick="return confirm('apa anda yakin.....?');" href="<?= base_url('umum/delete/'.$ab['kode_barang']); ?> " class="btn btn-danger"><i class="fa fa-trash"></i></a>
      </td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>
  </tbody>
</table>
</div>