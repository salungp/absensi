<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url('main'); ?>">
      <b>absensi</b>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('main'); ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('presence'); ?>">Daftar hadir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('activity'); ?>">Kegiatan</a>
        </li>
        <hr class="nav-divider" />
        <li class="nav-item profile-item">
          <a class="nav-link" href="<?php echo base_url('profile'); ?>">Profile</a>
        </li>
        <li class="nav-item profile-item">
          <a class="nav-link" href="<?php echo base_url('auth/logout'); ?>">Sign out</a>
        </li>
        <li class="nav-item dropdown profile-lg">
          <a class="nav-link dropdown-toggle profile-lg" href="javascript:void(0)">
            <span>Account</span>
            <img src="<?php echo base_url('assets/img/default/image.jpg'); ?>" alt="photo default">
          </a>
          <div class="dropdown-menu-custom">
            <a class="dropdown-item" href="<?php echo base_url('profile'); ?>">Profile</a>
            <a class="dropdown-item" href="<?php echo base_url('auth/logout'); ?>">Sign out</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container pt-2 pb-2">
