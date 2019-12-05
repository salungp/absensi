<h4>Daftar hadir</h4>
<div class="row">
  <div class="col-md-6">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">TGl</th>
          <th scope="col">Waktu masuk</th>
          <th scope="col">Waktu pulang</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach($data as $key) : ?>
          <tr>
            <th scope="row"><?php echo $i++; ?>.</th>
            <td><?php echo date('d M Y', strtotime($key['tanggal'])); ?></td>
            <td><?php echo $key['waktu_masuk']; ?></td>
            <td><?php echo $key['waktu_pulang']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
