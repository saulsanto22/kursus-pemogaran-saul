<?php
require 'koneksi.php';
$id = $_GET['id'];
$sql = 'DELETE FROM tbl_order WHERE id=:id';
$statement = $dbh->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location:hasilorder.php");
}

?>





<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Orderan Kursus Anda</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Nama Kursus</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
        <?php foreach($order as $person): ?> 
          <tr>
            <td><?= $person->id; ?></td>
            <td><?= $person->nama; ?></td>
            <td><?= $person->email; ?></td>
            <td><?= $person->nama_kursus; ?></td>
            <td>
              <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
