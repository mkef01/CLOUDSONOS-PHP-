<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Pagar con PayPal de forma segura</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<link rel="stylesheet" href="css/amount.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
<?php
$error = false;
$amount = '2.99';
$concept = 'Suscripcion';

if (isset($_GET['error']))
    $error = $_GET['error'];

if (isset($_GET['amount']))
    $amount = $_GET['amount'];

if (isset($_POST['submitPayment'])) {
    
    $amount = $_POST['amount']; 
    $concept = $_POST['concept'];
    $order = date('ymdHis');

    ?>
    
    <div class="loading">Un momento, por favor</div>
    
    <form id="realizarPago" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        <input name="cmd" type="hidden" value="_cart" />
        <input name="upload" type="hidden" value="1" />
        <input name="business" type="hidden" value="cloud.sonos@gmail.com" />
        <input name="shopping_url" type="hidden" value="https://localhost/cloudsonos-php-/confirmation.php" />
        <input name="currency_code" type="hidden" value="USD" />
        <input name="return" type="hidden" value="https://localhost/cloudsonos-php-/confirmation.php" />
        <input name="notify_url" type="hidden" value="ipn.php" />

        <input name="rm" type="hidden" value="2" />
        <input name="item_number_1" type="hidden" value="<?php echo $order; ?>" />
        <input name="item_name_1" type="hidden" value="<?php echo $concept; ?>" />
        <input name="amount_1" type="hidden" value="<?php echo $amount; ?>" />
        <input name="quantity_1" type="hidden" value="1" /> 

    </form>
    <script>
    $(document).ready(function () {
        $("#realizarPago").submit();
    });
    </script>
<?php
}
else {   
?>
<form class="form-amount" action="paypal.php" method="post">
    <?php if ($error) { ?><div class="alert alert-danger">El valor introducido no es correcto. Debe introducir por ejemplo: 50.99</div><?php } ?>
    <div class="form-group">
        <label for="concept">Concepto</label>
        <input type="text" id="concept" name="concept" class="form-control" readonly = "readonly" <?php if ($concept) { ?> value="<?php echo $concept; ?>"<?php }else{ ?> placeholder="Indicar un concepto"<?php } ?>>
    </div>
    <div class="form-group">
        <label for="amount">Importe</label>
        <input type="text" id="amount" name="amount" class="form-control" readonly = "readonly" <?php if ($amount) { ?> value="<?php echo $amount; ?>"<?php }else{ ?> placeholder="Por ejemplo: 50.00"<?php } ?>>
    </div>
    <input class="btn btn-lg btn-primary btn-block" name="submitPayment" type="submit" value="Pagar">
    <img class="img-responsive" src="img/paypal.png" alt="Pagos con PayPal y PHP" height="65" width="300"><br/>
</form> 
<?php
}
?>
</div>
</body>
</html>