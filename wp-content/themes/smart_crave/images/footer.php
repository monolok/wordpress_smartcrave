    <div class="col-sm-2 col-xs-12 center">
        <div class="row pointer" id="news">
          <li onclick="myFunction()" class="fa fa-envelope fa-3x social"></li>
        </div>

        <div class="row pointer" id="news1">
          <li onclick="myFace()" class="fa fa-facebook-square fa-3x social"></li>
        </div>

        <div class="row pointer" id="news2">
         <li onclick="myTweet()" class="fa fa-twitter-square fa-3x social"></li>
        </div>

        <div class="row pointer" data-toggle="modal" data-target=".bs-example-modal-sm" id="news3">
          <li class="fa fa-btc fa-3x social"></li>
        </div>

        <div class="row privacy">
          <span>Privacy & Terms</span>
          <br />
          <span><?php echo comicpress_copyright(); ?></span>
        </div>
    </div>

  </div>
</div>

<!-- MODAL BTC-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <h5 class="center">Please donate Bitcoin to the following address: <br></br> 1CbrtETKCmwaAwEgbwbGDtRr4xYTwGeCCv</h5> <br></br>
      <img src="wp-content/themes/smart_crave/images/bit.png" class="btc">
    </div>
  </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="https://blockchain.info//Resources/wallet/pay-now-button.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="wp-content/themes/smart_crave/global.js"></script>
<?php
   /* Always have wp_footer() just before the closing </body>
    * tag of your theme, or you will break many plugins, which
    * generally use this hook to reference JavaScript files.
    */
    wp_footer();
?>
</body>
</html>