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
      background-color: lightblue;
      height: 100px;
      margin-top: 20px;
      padding-top: 20px;
      box-shadow: 0 5px 15px rgb(0, 0, 0, 0.7);
      ;
    }

    .title {
      color: rgba(220, 20, 60, 0.9);
      text-align: center;
      text-transform: UPPERCASE;
      background-color: lightblue;
      padding: 5px 15px;
      letter-spacing: 0.2em;
      font-weight: 800;
      font-size: 2rem;
      font-family: 'Roboto Slab', serif;
    }

    .second {
      text-align: center;
      font-family: Arial;
      color: rgba(220, 20, 60, 0.7);
      box-shadow: 0 2px 5px shadow;
      font-size: 1.2em;
    }

    .jumbotron {
      width: 66%;
      margin: auto;
      background-color: white;
      height: 600px;
      box-shadow: 0 5px 15px rgb(0, 0, 0, 0.7);
    }

    .data {
      text-align: center;
      padding: 0 10px;
      background-color: White;
      font-size: 16px;
    }

    .data>ul {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
    }

    .data>ul>li {
      margin-left: 50px;
      width: 250px;
      list-style: none;
      margin: 0 10px;
      text-indent: 1em;
      text-align: left;
    }

    .divider {
      text-indent: 1em;
      text-align: left;
      margin: 0;
    }

    footer {
      display: block;
      justify-content: center;
      align-items: center;
      width: 66%;
      height: 100px;
      background-color: lightblue;
      margin: auto;
      height: 100px;
      margin-top: 40px;
      border-top: 5px solid rgb(0, 0, 0, 0.7);
      box-shadow: 0 5px 15px rgb(0, 0, 0, 0.7);
      z-index: -1;
    }

    .footer {
      text-align: center;
      color: black;
      padding: 25px;
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
    <section class=" jumbotron">
      <div class="divider">
        <h2>Biodata :</h2>
      </div>
      <div class="data">
        <ul>
          <li>
            <h3>ID Karyawan</h3>
          </li>
          <li><?= $Print['ID_Magang']; ?></li>
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
          <li>Karyawan Magang</li>
        </ul>
      </div>
      <div class="data">
        <ul>
          <li>
            <h3>Awal Magang</h3>
          </li>
          <li><?= $Print['Tahun_Masuk']; ?></li>
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
            Rp <?= $gajiMagang['gajipokok']; ?>
          </li>
        </ul>
      </div>
      <div class="data">
        <ul>
          <li>
            <h3>Pajak</h3>
          </li>
          <li>
            Rp <?= $gajiMagang['gajipokok'] * $gajiMagang['pajak']; ?>
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
            Rp <?= $gajiMagang['gajipokok'] - ($gajiMagang['gajipokok'] * $gajiMagang['pajak']); ?>
          </li>
        </ul>
      </div>
    </section>

    <footer class="  animate__animated animate__jello">
      <div class="footer">
        Copyright &copy; Iqbal Sonata <?= date('Y', $user['date_created']); ?> </div>
    </footer>
  </div>
</body>

</html>