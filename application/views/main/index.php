<?php echo @$this->session->flashdata('message'); ?>
<h4>Form daftar hadir</h4>
<hr />
<div class="row">
  <div class="col-md-6">
    <form action="<?php echo base_url('kehadiran/store'); ?>" method="post">
      <div class="form-group">
        <label>
          <span>Tanggal</span>
          <input type="text" name="date" placeholder="Tanggal" class="form-control datepicker">
        </label>
      </div>
      <div class="form-group">
        <label>
          <span>Jam masuk</span>
          <input type="time" name="time_open" placeholder="Jam masuk" class="form-control">
        </label>
      </div>
      <div class="form-group">
        <label>
          <span>Jam pulang</span>
          <input type="time" name="time_close" placeholder="Jam pulang" class="form-control">
        </label>
      </div>
      <button type="submit" class="btn btn-secondary">Simpan</button>
    </form>
  </div>
</div>
