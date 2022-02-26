<!-- Footer -->
<footer class="col-sm-12" style="height:auto;width:100%;">

  <!-- Footer Links -->
  <div class="text-center text-md-left">

    <!-- Grid row -->
    <div class="row" style="height:auto;width:auto;">

      <!-- Grid column -->
      <div class="col-sm-3" style="padding:0px;">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="font-size:20px;color:black;">About Us</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="links">Very long link 1</a>
          </li>
          <li>
            <a href="#!" class="links">Very long link 2</a>
          </li>
          <li>
            <a href="#!" class="links">Very long link 3</a>
          </li>
          <li>
            <a href="#!" class="links">Very long link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-sm-3" style="padding:0px;">

        <!-- Links -->

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-sm-3" style="padding:0px;">

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-sm-3" style="padding:0px;">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="font-size:20px;color:black;">Contact details:</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="links">Anna University, MIT Campus,
              Chromepet, Chennai 600044</a>
          </li>
          <li>
            <a href="#!" class="links">044 2251 6233</a>
          </li>
          <li>
            <a href="#!" class="links">nss@mitindia.edu</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->
  <!-- Copyright -->

</footer>

<!-- logs -->
<script>
  <?php if (!isset($_SESSION['logged'])) : ?>

    $.get('https://www.cloudflare.com/cdn-cgi/trace', function(cdata) {
      // Convert key-value pairs to JSON
      // for user agent
      cdata = cdata.trim().split('\n').reduce(function(obj, pair) {
        pair = pair.split('=');
        return obj[pair[0]] = pair[1], obj;
      }, {});

      var logData = cdata;

      $.get('https://api.freegeoip.app/json/?apikey=d63aeb90-96d5-11ec-8b16-a7c31a8ef651', (gdata) => {
        // for geo location

        // post req to log.php
        $.ajax({
          type: "POST",
          url: "log.php",
          data: {
            ua: logData.uag,
            city: gdata.city,
            region: gdata.region_name,
            country: gdata.country_name,
            pincode: gdata.zipcode,
          }
        }).done(function(msg) {});
      })
    });

    <?php $_SESSION['logged'] = true; ?>

  <?php endif; ?>
</script>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>