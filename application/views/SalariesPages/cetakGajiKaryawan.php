<?php
$Pokok = 5000000;
$CEO = $Pokok * 25 / 100;
$CTO = $Pokok * 20 / 100;
$CMO = $Pokok * 15 / 100;
$COO = $Pokok * 12 / 100;
$CFO = $Pokok * 10 / 100;
$Sales = $Pokok * 5 / 100;
$PCEO = $CEO * 10 / 100;
$PCTO = $CTO * 10 / 100;
$PCMO = $CMO * 10 / 100;
$PCOO = $COO * 10 / 100;
$PCFO = $CFO * 10 / 100;
$PSales = $Sales * 10 / 100;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sand-Box - Cetak Gaji Karyawan</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap');

    *,
    html {
      margin: 0;
      padding: 0;
      font-family: 'Roboto Slab', serif;
    }

    body {
      background-color: azure;
    }

    .container {
      width: 100%;
      height: 100vh;
    }

    .wrapper {
      width: 66%;
      display: flex;
      margin: auto;
      justify-content: space-around;
      background-color: pink;
      height: 100px;
      margin-top: 20px;
      padding-top: 20px;
      border-bottom: 5px solid rgb(0, 0, 0, 0.7);
      box-shadow: 0 5px 15px rgb(0, 0, 0, 0.7);
      ;
    }

    .title {
      color: Azure;
      text-align: center;
      text-transform: UPPERCASE;
      background-color: pink;
      padding: 5px 15px;
      letter-spacing: 0.2em;
      font-weight: 800;
      font-size: 2rem;
      font-family: 'Roboto Slab', serif;
    }

    .second {
      display: flex;
      flex-direction: row;
      color: black;
      font-size: 1.2em;
    }

    .gambar {
      width: 200px;
      border: 4px solid white;
      height: 200px;
      background-image: url('<?= site_url('assets/img/profile/default.svg'); ?>');
      background-repeat: none;
      background-size: cover;
      background-color: White;
      border-radius: 100%;
    }

    .jumbotron {
      width: 66%;
      margin: auto;
      background-color: white;
      height: 600px;
      box-shadow: 0 5px 15px rgb(0, 0, 0, 0.7);
    }

    .data {
      padding: 0 10px;
      background-color: White;
      font-size: 16px;
      display: flex;
      flex-direction: row;
    }

    .data>ul {
      padding-top: 10px;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
    }

    .data>ul>li {
      width: 250px;
      list-style: none;
      padding: 0 10px;
      margin: 0 10px;
      text-indent: 1em;
      text-align: left;
    }

    .divider {
      text-indent: 1em;
      padding-top: 5px;
      text-align: left;
      margin: 0 10px;
    }

    footer {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 66%;
      height: 100px;
      background-color: pink;
      margin: auto;
      height: 100px;
      padding-top: 20px;
      border-top: 5px solid rgb(0, 0, 0, 0.7);
      box-shadow: 0 5px 15px rgb(0, 0, 0, 0.7);
      z-index: -1;
    }

    .footer {
      color: black;
      font-size: 18px;
    }
  </style>
</head>

<body>
  <div class="container animate__animated animate__jello">
    <div class="wrapper">
      <h2 class="title">Sand-Box</h2>
      <h3 class="second">Kartu Gaji Karyawan</h3>
      <div class="gambar">
      </div>
    </div>
    <section class="jumbotron">
      <div class="divider">
        <h2>Biodata :</h2>
      </div>
      <div class="data">
        <ul>
          <li>
            <h3>ID Karyawan</h3>
          </li>
          <li><?= $Print['id_Karyawan']; ?></li>
        </ul>
      </div>
      <div class="data">
        <ul>
          <li>
            <h3>Nama</h3>
          </li>
          <li><?= $Print['Nama']; ?></li>
        </ul>
      </div>
      <div class="data">
        <ul>
          <li>
            <h3>Jenis Kelamin</h3>
          </li>
          <li><?= $Print['Jeniskelamin']; ?></li>
        </ul>
      </div>
      <div class="data">
        <ul>
          <li>
            <h3>Jenis Karyawan</h3>
          </li>
          <li>Karyawan Tetap </li>
        </ul>
      </div>
      <div class="data">
        <ul>
          <li>
            <h3>Jabatan</h3>
          </li>
          <li><?= $Print['Jabatan']; ?></li>
        </ul>
      </div>
      <div class="data">
        <ul>
          <li>
            <h3>Alamat</h3>
          </li>
          <li><?= $Print['Alamat']; ?></li>
        </ul>
      </div>
      <div class="divider">
        <h2>Deskripsi Gaji :</h2>
      </div>

      <div class="data">
        <ul>
          <li>
            <h3>Gaji Pokok</h3>
          </li>
          <li>
            Rp <?= $Pokok; ?>
          </li>
        </ul>
      </div>
      <div class="data">
        <ul>
          <li>
            <h3>Gaji Jabatan</h3>
          </li>
          <li>
            <?php if ($Print['Jabatan'] == "CEO (Chief Executive Officer)") : ?>
              Rp <?= $CEO; ?>
            <?php elseif ($Print['Jabatan'] == "CTO (Chief Technology Officer)") : ?>
              Rp <?= $CTO; ?>
            <?php elseif ($Print['Jabatan'] == "CMO (Chief Marketing Officer)") : ?>
              Rp <?= $CMO; ?>
            <?php elseif ($Print['Jabatan'] == "COO (Chief Operating Officer)") : ?>
              Rp <?= $COO; ?>
            <?php elseif ($Print['Jabatan'] == "CFO (Chief Financial Officer)") : ?>
              Rp <?= $CFO; ?>
            <?php elseif ($Print['Jabatan'] == "Sales Manager") : ?>
              Rp <?= $Sales; ?>
            <?php endif; ?>
          </li>
        </ul>
      </div>
      <div class="data">
        <ul>
          <li>
            <h3>Pajak</h3>
          </li>
          <li>
            <?php if ($Print['Jabatan'] == "CEO (Chief Executive Officer)") : ?>
              Rp <?= $PCEO; ?>
            <?php elseif ($Print['Jabatan'] == "CTO (Chief Technology Officer)") : ?>
              Rp <?= $PCTO; ?>
            <?php elseif ($Print['Jabatan'] == "CMO (Chief Marketing Officer)") : ?>
              Rp <?= $PCMO; ?>
            <?php elseif ($Print['Jabatan'] == "COO (Chief Operating Officer)") : ?>
              Rp <?= $PCOO; ?>
            <?php elseif ($Print['Jabatan'] == "CFO (Chief Financial Officer)") : ?>
              Rp <?= $PCFO; ?>
            <?php elseif ($Print['Jabatan'] == "Sales Manager") : ?>
              Rp <?= $PSales; ?>
            <?php endif; ?>
          </li>
        </ul>
      </div>
      <hr>
      <div class="data">
        <ul>
          <li>
            <h3>Total Gaji</h3>
          </li>
          <li style="letter-spacing:1px;">
            <?php if ($Print['Jabatan'] == "CEO (Chief Executive Officer)") : ?>
              Rp <?= $Pokok + $CEO - $PCEO; ?>
            <?php elseif ($Print['Jabatan'] == "CTO (Chief Technology Officer)") : ?>
              Rp <?= $Pokok + $CTO - $PCTO; ?>
            <?php elseif ($Print['Jabatan'] == "CMO (Chief Marketing Officer)") : ?>
              Rp <?= $Pokok + $CMO - $PCMO; ?>
            <?php elseif ($Print['Jabatan'] == "COO (Chief Operating Officer)") : ?>
              Rp <?= $Pokok + $COO - $PCOO; ?>
            <?php elseif ($Print['Jabatan'] == "CFO (Chief Financial Officer)") : ?>
              Rp <?= $Pokok + $CFO - $PCFO; ?>
            <?php elseif ($Print['Jabatan'] == "Sales Manager") : ?>
              Rp <?= $Pokok + $Sales - $PSales; ?>
            <?php endif; ?>
          </li>
        </ul>
      </div>
    </section>

    <footer class="  animate__animated animate__jello">
      <div>
        <span class="footer">Copyright &copy; Iqbal Sonata <?= date('Y', $user['date_created']); ?></span>
      </div>
    </footer>
  </div>
</body>

</html>