<?php  session_start();?>

<form action="success.php" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_TYooMQauvdEDq54NiTphI7jx"
    data-amount="<?php echo $_SESSION['GT']*100?>"
    data-name="CHOKHER KHIDE"
    data-description="QUALITY MATTERS"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto"
    data-currency="INR"
    data-zip-code="true">
  </script>
</form>
