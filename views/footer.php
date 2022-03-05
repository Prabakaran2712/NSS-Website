<footer>
  <div class="container">
    <div class="footer-body">
      <div class="footer-about">
        <h2 class="display-6">National Service Scheme</h2>
        <h4 class="lead">Anna University, MIT Campus</h4>
        <!-- <p class="py-3">Write to us: <a href="mailto:mail@mail.com" class="footer-mail">mail@mail.com</a></p> -->
        <small>Developed by <a href="incharges.php?webTeamExpand=true#webTeam">NSS web team</a></small>
      </div>
      <div class="footer-links">
        <ul>
          <li>
            <img src="./public/icons/instagram.svg" class="footer-link-icon"></img>
            <a href="https://instagram.com/nss_mit">Instagram</a>
          </li>
          <li>
            <img src="./public/icons/facebook.svg" class="footer-link-icon"></img>
            <a href="https://www.facebook.com/groups/nssmit12/">Facebook</a>
          </li>          
        </ul>
      </div>
    </div>
  </div>
</footer>

<style>
  footer{
    background-color: #303983;
    color: white;
    padding: 20px;
  }
  .footer-body{
    display: flex;
    justify-content: space-around;
    align-items: center;
  }
  .footer-mail{
    text-decoration: none;
    color: white;
  }
  .footer-mail:hover{
    color: white;
  }
  .footer-links ul{
    list-style-type: none;
  }
  .footer-links ul li{
    display: flex;
    justify-content: space-between;
    margin: 20px auto;
  }
  .footer-link-icon{
    filter: invert(100%);
    padding: 3px;    
    margin-right: 5px;
  }
  a{
    text-decoration: none;
    color: white;
  }
  a:hover{
    color: #ddd;
  }
  small{
    font-size: 12px;
  }
</style>

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
            type: 'analytics',
            ua: logData.uag,
            city: gdata.city,
            region: gdata.region_name,
            country: gdata.country_name,
            pincode: gdata.zipcode,
          }
        }).fail(()=>{
          $.ajax({
          type: "POST",
          url: "log.php",
          data: {
            type: 'analytics',
            ua: navigator.userAgent,
          }
        })
        })
      })
    }).fail(()=>{
          $.ajax({
          type: "POST",
          url: "log.php",
          data: {
            type: 'analytics',
            ua: navigator.userAgent,
          }
        })
        });
    <?php $_SESSION['logged'] = true; ?>

  <?php endif; ?>
</script>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">

</script>
</body>
</html>
