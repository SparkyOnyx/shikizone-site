<?php
require_once __DIR__.'/Templates/header.php';
?>
<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <h4 class="alert-heading text-center">Welcome</h4>	  
  <hr>
  <p class="mb-0 text-center">Thanks for checking out our new site. Feel free to look at all our new features!</p>

</div>
<button type="button" class="btn btn-info float-right">Daily Skittles</button>

<a href="/faq.php">
<img src="/images/FAQ Button.png" class="rounded float-left" alt="..." href="/faq">
</a>

<?php
require_once __DIR__.'/Templates/footer.php';
?>