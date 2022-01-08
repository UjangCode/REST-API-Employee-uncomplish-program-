<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
  <div></div>


  <script>
    $.ajax({
      type: "GET",
      url: "http://localhost:8080/pegawai",
      data: {},
      success: function(result) {

        const isi = result;

        for(const i = 0; i = 2; i++) {
          console.log(isi[i].name);
        }
      }
    });
  </script>
</body>

</html>