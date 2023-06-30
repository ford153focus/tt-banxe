<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Test task</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
  </head>
  <body>
      <div class="container">
          <h1>Products</h1>
          <table class="table table-striped table-hover">
              <thead>
              <tr>
                  <th>#</th>
                  <th>name</th>
                  <th>description</th>
                  <th>price</th>
              </tr>
              </thead>
              <tbody>
              </tbody>
          </table>

          <button class="btn btn-primary" data-fancybox data-src="#create-dialog">Add product</button>
      </div>

      <footer style="min-height: 1cm"></footer>

      <div id="create-dialog" style="display:none; min-width:30%; max-width:80%;">
          <h2>Create product</h2>
          <form onsubmit="event.preventDefault(); send_form(this);">
              <div class="mb-3">
                  <label for="inputName" class="form-label">Name</label>
                  <input type="text" class="form-control" id="inputName" name="name" aria-describedby="inputName">
              </div>
              <div class="mb-3">
                  <label for="inputDesc" class="form-label">Description</label>
                  <textarea class="form-control" id="inputDesc" name="description" aria-describedby="inputDesc"></textarea>
              </div>
              <div class="mb-3">
                  <label for="inputPrice" class="form-label">Price</label>
                  <input type="number" class="form-control" id="inputPrice" name="price" aria-describedby="inputPrice">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="/assets/js/products.js"></script>
  </body>
</html>
