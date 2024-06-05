<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan Bunga</title>
  <style>
    body {
      background-color: #F67280;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc; /* Added border for the form */
      border-radius: 5px; /* Added border radius for the form */
      padding-bottom: 40px; /* Added padding to avoid content overlapping the border */
      background-color: #E799A3;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    select, input[type="number"], input[type="radio"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .button {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
<div class="container">
  <h1>Pesan Bunga</h1>

  <form action="process_order.php" method="post">
    <div class="form-group">
      <label for="flowerType">Jenis Bunga:</label>
      <select id="flowerType" name="flowerType" required>
        <option value="">Pilih Bunga</option>
        <?php
        // Asumsi data bunga diambil dari database atau array
        $flowers = [
          ["name" => "Anggrek", "price" => 10000],
          ["name" => "Lavender", "price" => 15000],
          ["name" => "Matahari", "price" => 8000],
          ["name" => "Lily", "price" => 8000],
          ["name" => "Tulip", "price" => 8000],
          ["name" => "Melati", "price" => 8000],
        ];

        foreach ($flowers as $flower) {
          echo "<option value='{$flower['name']}'>{$flower['name']}</option>";
        }
        ?>
      </select>
    </div>

    <div class="form-group">
      <label for="quantity">Jumlah Bunga:</label>
      <input type="number" id="quantity" name="quantity" min="1" required>
    </div>

    <div class="form-group">
      <label for="service">Layanan:</label>
      <div>
        <input type="radio" id="cod" name="service" value="cod" checked>
        <label for="cod">COD (Bayar di Tempat)</label>
      </div>
      <div>
        <input type="radio" id="pickUp" name="service" value="pickUp">
        <label for="pickUp">Ambil di Toko</label>
      </div>
    </div>

    <button type="submit" class="button">Pesan Sekarang</button>
    <button class="button" onclick="window.location.href='halaman_user.php';">Kembali</button>
  </form>
</div>
</body>
</html>
