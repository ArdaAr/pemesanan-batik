<div class="container">
  <!-- <?php var_dump($data['mahasiswa']); ?> -->
  <?php foreach ( $data['mahasiswa'] as $mhs ) : ?>
    <ul>
      <li><?=$mhs['nama']; ?></li>
      <li><?=$mhs['nim']; ?></li>
      <li><?=$mhs['jurusan']; ?></li>
    </ul>
  <?php endforeach; ?>
</div>
