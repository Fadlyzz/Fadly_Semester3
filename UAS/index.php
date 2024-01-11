<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ME STORE</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <h1 class="my-4">Penjualan Handphone</h1>

      <div class="row">
        <div class="col-md-6">
          <h2>Smartphone 1</h2>
          <img
            src="https://via.placeholder.com/150"
            alt="Smartphone 1"
            class="img-thumbnail"
          />
          <p>
            Harga: Rp.
            <?php echo number_format(1000000, 0, ',', '.'); ?>
          </p>
          <button class="btn btn-primary">Beli</button>
        </div>
        <div class="col-md-6">
          <h2>Smartphone 2</h2>
          <img
            src="https://via.placeholder.com/150"
            alt="Smartphone 2"
            class="img-thumbnail"
          />
          <p>
            Harga: Rp.
            <?php echo number_format(2000000, 0, ',', '.'); ?>
          </p>
          <button class="btn btn-primary">Beli</button>
        </div>
      </div>
    </div>
  </body>
</html>
