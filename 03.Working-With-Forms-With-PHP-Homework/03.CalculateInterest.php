<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>03.CalculateInterest</title>
</head>
<body>
<div id="result">
    <?php
    if(isset($_GET['amount'], $_GET['currency'], $_GET['interest'], $_GET['maturity'])):
        if(filter_var($_GET['amount'], FILTER_VALIDATE_FLOAT) &&
        filter_var($_GET['interest'], FILTER_VALIDATE_FLOAT)):
            $amount = (float)$_GET['amount'];
            $currency = $_GET['currency'];
            $interest = ((float)$_GET['interest']) / 1200;
            $maturity = (int)$_GET['maturity'];

            $calcAmount = $amount * pow((1 + $interest), $maturity);
            $calcAmount = round($calcAmount, 2);

            if($currency == '$'){
                $calcAmount = $currency.' '.$calcAmount;
            } else {
                $calcAmount = $calcAmount.' '.$currency;
            }
            ?>
            <p><?php echo $calcAmount ?></p>
    <?php else: ?>
            <p><?php echo 'Incorrect input. Try again.'?></p>
    <?php endif; endif; ?>
</div>
<form>
    <label for="amount">Enter Amount</label>
    <input type="text" name="amount" id="amount"/>
    <br>
    <input type="radio" name="currency" value="$" id="usd"/>
    <label for="usd">USD</label>
    <input type="radio" name="currency" value="EUR" id="eur"/>
    <label for="eur">EUR</label>
    <input type="radio" name="currency" value="BGN" id="bgn"/>
    <label for="bgn">BGN</label>
    <br>
    <label for="interest">Compound Interest Amount</label>
    <input type="text" name="interest" id="interest"/>
    <br>
    <select name="maturity">
    <option value="6">6 months</option>
    <option value="12">1 year</option>
    <option value="24">2 years</option>
    <option value="60">5 years</option>
    </select>
    <input type="submit" value="Calculate" />
</form>
</body>
</html>