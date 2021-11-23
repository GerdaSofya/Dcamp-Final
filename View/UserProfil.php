<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/profil.css">
  <link rel="stylesheet" href="css/header-footer.css">
  <script src="https://kit.fontawesome.com/2a4e091a9b.js" crossorigin="anonymous">
  </script>
</head>

<body>
  <?php include("header-footer/header-user.php") ?>

  <?php
  $sql = "SELECT * from pengguna WHERE id='2'";
  $data = $koneksi->query($sql);
  $row = $data->fetchAll();
  ?>
  <div class="wrapper">
    <h2>Profil Pengguna&nbsp;&nbsp;<span><a href="#" class="btn btn-success" role="button">edit</a>
        <a href="#" class="btn btn-danger" role="button">hapus</a></span></h2>
    </span>
    <div class="wrapper-user">
      <table>
        <tr>
          <td>Nama &nbsp;&nbsp;</td>
          <td>:&nbsp;</td>
          <td><?php echo "$row->nama"; ?></td>
        </tr>
        <tr>
          <td>E-mail &nbsp;&nbsp;</td>
          <td>:&nbsp;</td>
          <td><?php echo "$row->email"; ?></td>
        </tr>
        <tr>
          <td>Instansi &nbsp;&nbsp;</td>
          <td>:&nbsp;</td>
          <td><?php echo "$row->instansi"; ?></td>
        </tr>
      </table>
    </div>
    <br>
    <h2>Dataset Pengguna</h2>
    <?php
    $sql2 = "SELECT * from dataset inner join kategori ON dataset.kategori_id=kategori.id inner join pengguna ON dataset.pengguna_id=pengguna.id WHERE pengguna_id='2'";
    $data2 = $koneksi->query($sql2);
    $row2 = $data2->fetchAll();
    foreach ($row2 as $dataset) {
      echo "<div class='wrapper-dataset'>";
      echo "  <div class='wrapper-upper'>";
      echo "    <div class='wrapper-title'>";
      echo "      <p style='font-size: 18px;'><b>" . $dataset->judul . "&nbsp;&nbsp;</b><span
                   style='color:darkgrey;font-size:15px;'>" . $dataset->nama . "</span></p>";
      echo "    </div>";
      echo "    <div class='wrapper-action'>";
      echo "       <a href='" . $dataset->link_download . "'><i style='vertical-align: -25%;' class='fas fa-download fa-2x'></i></a>";
      echo "       <a href='#' class='btn btn-btn btn-success' role='button'>edit</a>";
      echo "       <a href='#' class='btn btn-danger' role='button'>hapus</a>";
      echo "     </div>";
      echo "</div>";
      echo "<br><br>";
      echo "<p>" . $dataset->deskripsi . "</p>";
      echo "<p>";
      echo "   <span style='color:darkgrey;font-size:15px;'>" . $dataset->jumlah_data . "</span>&nbsp;&nbsp;";
      echo "   <span style='color:darkgrey;font-size:15px;'>" . $dataset->sumber . "</span>&nbsp;&nbsp;";
      echo "   <span style='color:darkgrey;font-size:15px;'>" . $dataset->waktu . "</span>&nbsp;&nbsp;";
      echo "   <span style='color:darkgrey;font-size:15px;'>" . $dataset->nama_kategori . "</span>";
      echo " </p>";
      echo "</div>";
    }
    ?>

  </div>
  <?php include("header-footer/footer.php") ?>
</body>

</html>