<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Dcamp</title>
  <link rel="stylesheet" href="View/css/beranda.css">
  <link rel="stylesheet" href="View/css/header-footer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/2a4e091a9b.js" crossorigin="anonymous">
  </script>
</head>

<body>

  <?php include("View/header-footer/header.php") ?>

  <div class="imageContainer">

  <div class="kata1">
      Dataset Campus <br>
      Temukan data yang kamu inginkan disini

    </div>
    <div class="topnav">
      <form class="example" method="POST" action="index.php" style="margin:auto;max-width:300px">
        <input type="text" placeholder="Masukan kata kunci pencarian" name="search">
        <button type="submit" name="cari"><i class="fa fa-search"></i></button>
      </form>
    </div>

  </div>

  <div class="wrapper">

    <div class="wrapper-user">

    </div>
    <br>

    <?php
    if (isset($_POST['cari'])) {
      $cari = "%".$_POST['search']."%";
      $sql = "SELECT * from dataset inner join kategori ON dataset.kategori_id=kategori.id inner join pengguna ON dataset.pengguna_id=pengguna.id WHERE dataset.judul LIKE :nama";
      $data = $koneksi->prepare($sql);
      $data->BindParam(":nama",$cari);
      $data->execute();
      $row = $data->fetchAll();
      foreach ($row as $dataset1) {
        echo "<div class='wrapper-dataset'>";
        echo "  <div class='wrapper-upper'>";
        echo "    <div class='wrapper-title'>";
        echo "      <p style='font-size: 18px;'><b>" . $dataset1->judul . "&nbsp;&nbsp;</b><span
                    style='color:darkgrey;font-size:15px;'>" . $dataset1->nama . "</span></p>";
        echo "    </div>";
        echo "    <div class='wrapper-action'>";
        echo "       <a href='View/login.php'><i style='vertical-align: -25%;' class='fas fa-download fa-2x'></i></a>";
        echo "     </div>";
        echo "</div>";
        echo "<br><br>";
        echo "<p>" . $dataset1->deskripsi . "</p>";
        echo "<p>";
        echo "   <span style='color:darkgrey;font-size:15px;'>" . $dataset1->jumlah_data . "</span>&nbsp;&nbsp;";
        echo "   <span style='color:darkgrey;font-size:15px;'>" . $dataset1->sumber . "</span>&nbsp;&nbsp;";
        echo "   <span style='color:darkgrey;font-size:15px;'>" . $dataset1->waktu . "</span>&nbsp;&nbsp;";
        echo "   <span style='color:darkgrey;font-size:15px;'>" . $dataset1->nama_kategori . "</span>";
        echo " </p>";
        echo "</div>";
      }
    }
      $sql2 = "SELECT * from dataset inner join kategori ON dataset.kategori_id=kategori.id inner join pengguna ON dataset.pengguna_id=pengguna.id";
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
        echo "       <a href='View/login.php'><i style='vertical-align: -25%;' class='fas fa-download fa-2x'></i></a>";
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
  </div>

  <?php include("View/header-footer/footer.php") ?>
</body>

</html>