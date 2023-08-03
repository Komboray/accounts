
// setTimeout(firstMeso, 3000);

// let timer1 = function firstMeso(){
//     alert('Press on the account names to be able to fill the correct fields');
// }

// document.getElementById("but").onclick = function(){
//     clearTimeout(timer1);
// }
let assetsBtn = document.getElementById("assets");
let equityBtn = document.getElementById("equity");
let liabilityBtn = document.getElementById("liable");
let totalsBtn = document.getElementById("assets");

liabilityBtn.addEventListener("click", liability, true);
equityBtn.addEventListener("click", equity, true);
assetsBtn.addEventListener("click", add, true);
totalsBtn.addEventListener("click", totals, true);

//total of the assets is done by the formula below
function add(){
    

    let cash =  Number(document.getElementById("cash").value);

    let accRec = Number(document.getElementById("acc-rec").value);
    let other = Number(document.getElementById("other").value);
    let prePaid = Number(document.getElementById("pre-paid").value);
    let propPlant = Number(document.getElementById("prop-plant").value);
    let intangible = Number(document.getElementById("intangible").value);
    
    let assestT = document.getElementById("assetT");

    

    var debitTotal= cash + accRec + other + prePaid + propPlant + intangible;
    console.log(debitTotal);
    return assestT.innerHTML = debitTotal;
    
    }

//total of the liabilities is done by the formula below
function liability(){
    let longLoan =  Number(document.getElementById("long-loan").value);
    let defRev =  Number(document.getElementById("def-rev").value);
    let accExp =  Number(document.getElementById("acc-exp").value);
    let taxPay =  Number(document.getElementById("tax-pay").value);
    let accPay =  Number(document.getElementById("acc-pay").value);

    let liables = document.getElementById("liables");
    
    let liabTotal = longLoan + defRev + accExp + taxPay + accPay;
    console.log(liabTotal);
    return liables.innerHTML = liabTotal;
   }

   //the funct below calcs the equity total
function equity(){
    //negative
    let common = Number(document.getElementById("common").value);
    let opening = Number(document.getElementById("opening").value);
    //+
    let dividends = Number(document.getElementById("dividends").value);
    //-
    let revenue = Number(document.getElementById("revenue").value);
    //+
    let cost = Number(document.getElementById("cost").value);
    let general = Number(document.getElementById("general").value);
    let scrolling = Number(document.getElementById("scrolling").value);
    let dep = Number(document.getElementById("dep").value);
    let interest = Number(document.getElementById("interest").value);
    let tax = Number(document.getElementById("tax").value);
    let equityTLabel = document.getElementById("equityTLabel");
    
    //formula total
    let equityT =(dividends + cost + general + scrolling + dep + interest + tax) + (- common - opening - revenue);
    
    console.log(equityT);

    return equityTLabel.innerHTML = equityT;
    
}

//the method that adds together all the total liabilities + equity
//equityT + liabTotal = totalLiabilities
function totals(){
    //the html that requires a value
    let creditT = document.getElementById("creditTotal");
    let debitT = document.getElementById("debitTotal");

    //debit totals
    let cash =  Number(document.getElementById("cash").value);

    let accRec = Number(document.getElementById("acc-rec").value);
    let other = Number(document.getElementById("other").value);
    let prePaid = Number(document.getElementById("pre-paid").value);
    let propPlant = Number(document.getElementById("prop-plant").value);
    let intangible = Number(document.getElementById("intangible").value);
    
    var debitTotal= cash + accRec + other + prePaid + propPlant + intangible;
    console.log(debitTotal);
    debitT.innerHTML = debitTotal;
    //liabilities

    let longLoan =  Number(document.getElementById("long-loan").value);
    let defRev =  Number(document.getElementById("def-rev").value);
    let accExp =  Number(document.getElementById("acc-exp").value);
    let taxPay =  Number(document.getElementById("tax-pay").value);
    let accPay =  Number(document.getElementById("acc-pay").value);
    
    let liabTotal = longLoan + defRev + accExp + taxPay + accPay;
    console.log(liabTotal);
    

    //equity totals
    let common = Number(document.getElementById("common").value);
    let opening = Number(document.getElementById("opening").value);
    //+
    let dividends = Number(document.getElementById("dividends").value);
    //-
    let revenue = Number(document.getElementById("revenue").value);
    //+
    let cost = Number(document.getElementById("cost").value);
    let general = Number(document.getElementById("general").value);
    let scrolling = Number(document.getElementById("scrolling").value);
    let dep = Number(document.getElementById("dep").value);
    let interest = Number(document.getElementById("interest").value);
    let tax = Number(document.getElementById("tax").value);
    
    
    //formula total
    let equityT =(dividends + cost + general + scrolling + dep + interest + tax) + (- common - opening - revenue);
    
    console.log(equityT);

    let credits = liabTotal + equityT;

    return creditT.innerHTML = credits;

}