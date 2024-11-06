<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Website Monitoring jantung</title>

    <script src="jquery/jquery.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        setInterval(function() {
          $("#cekdetakjantung").load('fetch_data.php');
          $("#oksigen").load('fetch_data.ph');
          $("#cekstatus").load('cekstatus.php');

        }, 1000);
      
      });

    </script>


    

  </head>
  <body>
    <div class="container" style="text-align: center;">


      <h2>Sistem Monitoring Detak Jantung dan Kadar Oksigen Dalam Darah <br> Berbasis Website </h2>
      <img src="images/jantung.jpg" style="width: 500px;">

      <!--nilaiSensor-->
      <div style="justify-content: center; display: flex;">
        <div class="card text-center" style="width: 1000px;">
          <div class="card-header" style="font-size: 30px; font-weight: bold; background-color: yellow;">Heart and Oxygen Rate Monitoring System
          </div>
            <div class="card-body">
             <h1 style="font-weight: bold; font-size: 30px;">Heart Rate : <span id="cekdetakjantung">Nofinger</span> <span style="font-size: 20px; ">Bpm</span></h1>

             <h1 style="font-weight: bold; font-size:30px">Oxygen Rate : <span id="oksigen">Nofinger</span> <span style="font-size: 25px; ">%</span></h1>
            </div>

            <div class="card-footer">
              <span id="cekstatus"> Status : -</span> 
            </div>
        </div>
      </div>

    </div>







    <footer style="background-color: #f8f9fa; padding: 20px; text-align: center;">
        <p>&copy; 2024 Heart and Oxygen Rate Monitoring System. Universitas Lampung.</p>
    </footer>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
