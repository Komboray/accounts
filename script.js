
// setTimeout(firstMeso, 3000);

// let timer1 = function firstMeso(){
//     alert('Press on the account names to be able to fill the correct fields');
// }

// document.getElementById("but").onclick = function(){
//     clearTimeout(timer1);
// }

let liabilityBtn = document.getElementById("liable");
liabilityBtn.addEventListener("click", liability);


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