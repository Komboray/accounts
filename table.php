<?php
include("index.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

</head>
<body>

  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method = "POST"> 

  


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

    <div class="table-box">

        <div class="table-row table-head">
           <div class="table-cell">
             <p>ACCOUNT</p>
           </div>
           
           <div class="table-cell">
             <p>DEBIT</p>
           </div>

           <div class="table-cell">
             <p>CREDIT</p>
           </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
                <label for="cash"><p>Cash</p></label>   
            </div>

            <div class="table-cell">
                <input type="number" name = "cash" id = "cash" required>
            </div>

            <div class="table-cell">
               
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
                <label for="acc-rec"><p>Accounts Receivable</p></label>
                
            </div>

            <div class="table-cell">
            <input type="number" name = "acc-rec" id = "acc-rec" required>
            </div>

            <div class="table-cell">
                
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
               <label for="other"><p>Other receivables</p></label>
            </div>

            <div class="table-cell">
              <input type="number" name = "other" id = "other" required>
            </div>

            <div class="table-cell">
               
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
            <label for="pre-paid"><p>Pre-paid expenses</p></label>
                
            </div>

            <div class="table-cell">
              <input type="number" name = "pre-paid" id = "pre-paid" required>
            </div>

            <div class="table-cell">
                
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
              <label for="prop-plant"><p>Property plant & equipment</p></label>   
            </div>

            <div class="table-cell">
              <input type="number" name = "prop-plant" id = "prop-plant" required>
            </div>

            <div class="table-cell">
                
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
            <label for="intangible"><p>Inatangible</p></label>
            </div>

            <div class="table-cell">
              <input type="number" name = "intangible" id = "intangible" required>
            </div>

            <div class="table-cell">
                
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
            <label for="intangible"><h3>Total</h3></label>
            </div>

            <div class="table-cell">
              <h3 id = "assetT"></h3>
            </div>

            <div class="table-cell">
                
            </div>

        </div>
        <hr>

        <div class="table-row">
            <div class="table-cell">
            <label for="acc-pay"><p>Accounts payable</p></label>
            </div>

            <div class="table-cell">
                
            </div>

            <div class="table-cell">
            <input type="number" name = "acc-pay" id = "acc-pay" required>
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
                <label for="tax-pay"><p>Taxes payable</p></label>
            </div>

            <div class="table-cell">
                
            </div>

            <div class="table-cell">
             <input type="number" name = "tax-pay"  id = "tax-pay" required>
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
               <label for="acc-exp"><p>Accrued expenses</p></label>
            </div>

            <div class="table-cell">
                
            </div>

            <div class="table-cell">
              <input type="number" name = "acc-exp"  id = "acc-exp" required>
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
             <label for="def-rev"><h4>Deferred revenue</h4></label>
            </div>

            <div class="table-cell">
                
            </div>

            <div class="table-cell">
              <input type="number" name = "def-rev"  id = "def-rev" required>
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
               <label for="long-loan"><h4>Long Term loans</h4></label>
            </div>

            <div class="table-cell">
                
            </div>

            <div class="table-cell">
              <input type="number" name = "long-loan"  id = "long-loan" required>
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
            <h3>Total</h3>
            </div>

            <div class="table-cell">
              
            </div>

            <div class="table-cell">
              <h3 id = "liables"></h3>
            </div>

        </div>
        <hr>

        <div class="table-row">
            <div class="table-cell">
             <label for="common"><h4>Common Stock</h4></label>
            </div>

            <div class="table-cell">
                
            </div>

            <div class="table-cell">
               <input type="number" id = "common" name = "common" required>
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
              <label for="opening"><h4>Opening retained earnings</h4></label>
            </div>

            <div class="table-cell">
               
            </div>

            <div class="table-cell">
              <input type="number" id = "opening" required>
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
             <label for="dividends"><h4>Dividends</h4></label>  
            </div>

            <div class="table-cell">
             <input type="number" id = "dividends" required>
            </div>

            <div class="table-cell">
               
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
              <label for="revenue"><h4>Revenue</h4></label>
            </div>

            <div class="table-cell">
                
            </div>

            <div class="table-cell">
              <input type="number" id = "revenue" name ="revenue" required>
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
               <label for="cost"><h4>Cost of sales</h4></label>
            </div>

            <div class="table-cell">
              <input type="number" id = "cost" name = "cost" required>
            </div>

            <div class="table-cell">
                
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
             <label for="general"><h4>General & admin expenses</h4></label>
            </div>

            <div class="table-cell">
              <input type="number" id = "general" name = "general" required>
            </div>

            <div class="table-cell">
                
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
              <label for="scrolling"><h4>Scrolling & market expense</h4></label>
            </div>

            <div class="table-cell">
               <input type="number" id = "scrolling" name = "scroll" required>
            </div>

            <div class="table-cell">
                
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
              <label for="dep"><h4>Depreciasion and amortization</h4></label>
            </div>

            <div class="table-cell">
               <input type="number" id = "dep" name = "dep" required>
            </div>

            <div class="table-cell">
                
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
              <label for="interest"><h4>Interest expense</h4></label>
            </div>

            <div class="table-cell">
              <input type="number" id = "interest" name = "interest" required> 
            </div>

            <div class="table-cell">
                
            </div>

        </div>

        <div class="table-row">
            <div class="table-cell">
             <label for="tax"><h4>Tax expense</h4></label>
            </div>

            <div class="table-cell">
              <input type="number" id = "tax" name = "tax" required>
            </div>

            <div class="table-cell">
                
            </div>

        </div>

        <div class="table-row table-total">
            <div class="table-cell">
             <label for="total"><h2>TOTAL</h2></label>
            </div>

            <div class="table-cell">
                <h2 id = "debitTotal"></h2>
            </div>

            <div class="table-cell">
                <h2 id = "creditTotal">95</h2>
            </div>

           </div>
             <a href=""  class="hero-btn"><input type="submit" value = "Finish balance sheet" id = "submit" name = "submit"></a>

            <div><br>

            <div class = "main-skills">
                <input type="button" value="assets" id = "assets" onclick = "add()" >
            </div>
            <div>
                <input type="button" value="liable" id = "liable" >
            </div>

        </div>
        
    </div>
    <!-- this causes the top part to move to the middle the div below-->

  </form> 
  <script>
    function add(){

     let cash =  Number(document.getElementById("cash").value);

     let accRec = Number(document.getElementById("acc-rec").value);
     let other = Number(document.getElementById("other").value);
     let prePaid = Number(document.getElementById("pre-paid").value);
     let propPlant = Number(document.getElementById("prop-plant").value);
     let intangible = Number(document.getElementById("intangible").value);
     
     let assestT = document.getElementById("assetT");

     let assetBtn = document.getElementById("assets");

     var debitTotal= cash + accRec + other + prePaid + propPlant + intangible;
     console.log(debitTotal);
     return assestT.innerHTML = debitTotal;
     }
     
     
     </script>
     <script src = "script.js"></script>
   
  
</body>
</html>