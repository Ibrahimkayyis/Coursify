<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>Login Admin</title>
    <style>
      .container {
        margin-top: 150px;
      }
      body {
        background-color: #393e46;
      }
      input {
        max-width: 300px;
        min-width: 300px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3" align="center">
          <form action="login.php" method="POST">
            <input
              type="text"
              class="form-control"
              name="username"
              placeholder="enter username"
            /><br />
            <input
              type="password"
              class="form-control"
              name="password"
              placeholder="enter password"
            /><br />
            <input type="submit" value="login" class="btn btn-success" />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
