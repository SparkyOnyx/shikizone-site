<?php
require_once __DIR__.'/Templates/header.php';
?><br />
<div class="alert alert-info" role="alert">
  <h4 class="alert-heading text-center">Want to donate?</h4>
  <hr>
  <p class="mb-0 text-center">Just follow one of the below links!!</p>
</div>
<div class="card text-white bg-primary mb-3" style="margin:auto;width:12rem;padding: 10px;">
  <div class="card-body">
    <h4 class="card-title text-center">Paypal</h4>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="text-center">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="RU4HMLULYQP6C">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
  </div>
</div>
<div class="card" style="margin:auto;width:12rem;padding: 10px;background-color:#F96854">
  <div class="card-body">
    <h4 class="card-title text-center">Patreon</h4>
    <a class="btn btn-outline-primary" href="https://patreon.com/sparkykitty" role="button">Pledge on Patreon</a>
  </div>
</div>
<?php
require_once __DIR__.'/Templates/footer.php';
?>




