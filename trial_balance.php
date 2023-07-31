<?php
include("index.php");
//this is the trial balance page taht claculates the details b4 they are placed into the databse
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trial Balance</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<section >
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method = "POST">
        <!-- seperate -->
    <div class = "contact-col">


         <p>
            <label for="company-name">Company name</label>
            <input type="text" name ="company-name" required>
         </p>
         <p>
          ADJUSTED TRIAL BALANCE
         </p>

         <p>
          AS AT Dec 31, 2023
         </p>
        


        <div class = "course-col">
         <h3>ACCOUNT</h3>
         <div class="box"><label for="cash"><h4>Cash</h4></label></div>
         <div class="box"><label for="acc-rec"><h4>Accounts Receivable</h4></label></div>
         <div class="box"><label for="other"><h4>Other receivables</h4></label></div>
         <div class="box"><label for="pre-paid"><h4>Pre-paid expenses</h4></label></div>
         <div class="box"><label for="prop-plant"><h4>Property plant & equipment</h4></label></div>
         <div class="box"><label for="intangible"><h4>Inatangible</h4></label></div>
         <hr>
         <div class="box"><label for="acc-pay"><h4>Accounts payable</h4></label></div>
         <div class="box"><label for="tax-pay"><h4>Taxes payable</h4></label></div>
         <div class="box"><label for="acc-exp"><h4>Accrued expenses</h4></label></div>
         <div class="box"><label for="def-rev"><h4>Deferred revenue</h4></label></div>
         <div class="box"><label for="long-loan"><h4>Long Term loans</h4></label></div>

         <hr>
         <div class="box"><label for="common"><h4>Common Stock</h4></label></div>
         <div class="box"><label for="opening"><h4>Opening retained earnings</h4></label></div>
         <div class="box"><label for="dividends"><h4>Dividends</h4></label></div>
         <div class="box"><label for="revenue"><h4>Revenue</h4></label></div>
         <div class="box"><label for="cost"><h4>Cost of sales</h4></label></div>
         <div class="box"><label for="general"><h4>General & admin expenses</h4></label></div>
         <div class="box"><label for="scrolling"><h4>Scrolling & market expense</h4></label></div>
         <div class="box"><label for="dep"><h4>Depreciasion and amortization</h4></label></div>
         <div class="box"><label for="interest"><h4>Interest expense</h4></label></div>
         <div class="box"><label for="tax"><h4>Tax expense</h4></label></div>
         <hr>
         <h3>TOTAL</h3>
         <hr>
      </div>

  <div class="course-col">
      <h3>DEBIT</h3>
      <div class="box"><h4><input type="number" name = "cash" id = "cash" required></h4></div>
      <div class="box"><h4><input type="number" name = "acc-rec" id = "acc-rec" required></h4></div>
      <div class="box"><h4><input type="number" name = "other" id = "other" required></h4></div>
      <div class="box"><h4><input type="number" name = "pre-paid" id = "pre-paid" required></h4></div>
      <div class="box"><h4><input type="number" name = "prop-plant" id = "prop-plant" required></h4></div>
      <div class="box"><h4><input type="number" name = "intangible" id = "intangible" required></h4></div>
      <hr>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <hr>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"><h4><input type="number" id = "dividends" required></h4></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <hr>

      <hr>
      
  </div>

  <div class="course-col">
      <div class = "box"><h3>CREDIT</h3></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <hr>
      <div class="box"><h4><input type="number" name = "acc-pay" id = "acc-pay" required></h4></div>
      <div class="box"><h4><input type="number" name = "tax-pay"  id = "tax-pay" required></h4></div>
      <div class="box"><h4><input type="number" name = "acc-exp"  id = "acc-exp" required></h4></div>
      <div class="box"><h4><input type="number" name = "def-rev"  id = "def-rev" required></h4></div>
      <div class="box"><h4><input type="number" name = "long-loan"  id = "long-loan" required></h4></div>
      <hr>
      <div class="box"><h4><input type="number" id = "common" name = "common" required></h4></div>
      <div class="box"><h4><input type="number" id = "opening" required></h4></div>
      <div class="box"></div>
      <div class="box"><h4><input type="number" id = "revenue" name ="revenue" required></h4></div>
      <div class="box"><h4><input type="number" id = "cost" name = "cost" required></h4></div>
      <div class="box"><h4><input type="number" id = "general" name = "general" required></h4></div>
      <div class="box"><h4><input type="number" id = "scrolling" name = "scroll" required></h4></div>
      <div class="box"><h4><input type="number" id = "dep" name = "dep" required></h4></div>
      <div class="box"><h4><input type="number" id = "interest" name = "interest" required></h4></div>
      <div class="box"><h4><input type="number" id = "tax" name = "tax" required></h4></div>
      <hr>

    </div>
    
        <div class="contact-col">
            <input type="submit" value = "Finish balance sheet" id = "submit" name = "submit">
        </div>

        <div class = "contact-col">
            <input type="button" value="assets" name = "assets" id = "assets">
        </div>
        </form>

        
  </div>

    </section>

    <script src ="index.js"> </script>
</body>
</html>

<?php

// if($_SERVER["REQUEST_METHOD"] == "POST"){
//  $compName = filter_input(INPUT_POST, "company-name",FILTER_SANITIZE_SPECIAL_CHARS);
//  $cash = filter_input(INPUT_POST, "cash", FILTER_SANITIZE_SPECIAL_CHARS);
//  $accRec = filter_input(INPUT_POST, "acc-rec", FILTER_SANITIZE_SPECIAL_CHARS);
//  $other = filter_input(INPUT_POST, "other", FILTER_SANITIZE_SPECIAL_CHARS);
//  $prePaid = filter_input(INPUT_POST, "pre-paid", FILTER_SANITIZE_SPECIAL_CHARS);
//  $propPlant = filter_input(INPUT_POST, "prop-plant", FILTER_SANITIZE_SPECIAL_CHARS);
//  $intang = filter_input(INPUT_POST, "intangible", FILTER_SANITIZE_SPECIAL_CHARS);
//  $accPay = filter_input(INPUT_POST, "acc-pay", FILTER_SANITIZE_SPECIAL_CHARS);
//  $taxPay = filter_input(INPUT_POST, "tax-pay", FILTER_SANITIZE_SPECIAL_CHARS);
//  $accExp = filter_input(INPUT_POST, "acc-exp", FILTER_SANITIZE_SPECIAL_CHARS);
//  $defRev = filter_input(INPUT_POST, "def-rev", FILTER_SANITIZE_SPECIAL_CHARS);
//  $longLoan = filter_input(INPUT_POST, "long-loan", FILTER_SANITIZE_SPECIAL_CHARS);
//  $common = filter_input(INPUT_POST, "common", FILTER_SANITIZE_SPECIAL_CHARS);
//  $opening = filter_input(INPUT_POST, "opening", FILTER_SANITIZE_SPECIAL_CHARS);
//  $revenue = filter_input(INPUT_POST, "revenue", FILTER_SANITIZE_SPECIAL_CHARS);
//  $cost = filter_input(INPUT_POST, "cost", FILTER_SANITIZE_SPECIAL_CHARS);
//  $general = filter_input(INPUT_POST, "general", FILTER_SANITIZE_SPECIAL_CHARS);
//  $scroll = filter_input(INPUT_POST, "scroll", FILTER_SANITIZE_SPECIAL_CHARS);
//  $dep = filter_input(INPUT_POST, "dep", FILTER_SANITIZE_SPECIAL_CHARS);
//  $interest = filter_input(INPUT_POST, "interest", FILTER_SANITIZE_SPECIAL_CHARS);
//  $tax = filter_input(INPUT_POST, "tax", FILTER_SANITIZE_SPECIAL_CHARS);
//  $dividends = filter_input(INPUT_POST, "dividends", FILTER_SANITIZE_SPECIAL_CHARS);

// //  if(isset($_POST["assets"])){
// //     $assetsTotal = $cash + $accRec + $other + $prePaid + $propPlant + $intang;

// //     echo $assetsTotal;
// //  }
 
// //  $liabilities = $accPay + $defRev + $longLoan;

// //  $equity = $common + $opening + $revenue + $cost + $general + $scroll + $dep + $interest + $tax - $dividends;

// $sql = "INSERT INTO trial_balance (compName, cash, accRec, other, prePaid, propPlant, intang, accPay, taxPay, accExp, defRev, longLoan, common, opening, revenue, cost, general, scroll, dep, interest, tax, dividends) VALUES('$compName','$cash', '$accRec', '$other', '$prePaid', '$propPlant', '$intang', '$accPay', '$taxPay', '$accExp', '$defRev', '$longLoan', '$common', '$opening', '$revenue', '$cost', '$general', '$scroll', '$dep', '$interest', '$tax','$dividends')";

// $result = mysqli_query($conn, $sql);
// if($result){
//     echo "Details sent";
// }
// }


//     if(isset($_POST["assets"])){
//         $assetsTotal = $cash + $accRec + $other + $prePaid + $propPlant + $intang;
    
//         echo $assetsTotal;
//      }
    

 





// ?>