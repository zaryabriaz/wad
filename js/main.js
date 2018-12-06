 account=[{
    Title:"zaryab",
    Currency:"PKR",
    IBN:"zaryabpk0047",
    Balance:2000
}]


var CurrentAmount=0;
function show()
{
    document.getElementById("title").innerText=account[0].Title;
    document.getElementById("currency").innerText=account[0].Currency;
    document.getElementById("IBAN").innerText=account[0].IBN;
    CurrentAmount=account[0].Balance;
    document.getElementById("balance").innerText=account[0].Balance;
}

show();
function processDeposit(a)
{
    if(a.keyCode==13)
    {
        var b=parseInt(document.getElementById("deposit").value);
        if(isNaN(b))
        {
            document.getElementById("deposit-msg").innerText="Please Enter SomeThing";
        }
        else
        {

            CurrentAmount=CurrentAmount+b;
            document.getElementById("balance").innerText=CurrentAmount;
            let AB=document.getElementById("transaction-table");
            AB.innerHTML+='<tr>'
                +' <th align="left" valign="middle" scope="col">'+new Date()+'</th>'
                +' <th align="left" valign="middle" scope="col">'+'Deposit'+'</th>'
                +' <th align="left" valign="middle" scope="col">'+document.getElementById("deposit").value+'</th>'
                +'</tr>'
        }
        document.getElementById("deposit").value="";
    }

}

function processwithdraw(a) {
    if(a.keyCode==13)
    {
        var b=parseInt(document.getElementById("withdraw").value);
        if(isNaN(b))
        {
            document.getElementById("withdraw-msg").innerText="Please Enter SomeThing";
        }
        else if(b>CurrentAmount)
        {
            document.getElementById("withdraw-msg").innerText="Not Enough Balance";
        }
        else
        {
            document.getElementById("withdraw-msg").innerText="";
            CurrentAmount=CurrentAmount-b;
            document.getElementById("balance").innerText=CurrentAmount;
            let AB=document.getElementById("transaction-table");
            AB.innerHTML+='<tr>'
                +' <th align="left" valign="middle" scope="col">'+new Date()+'</th>'
                +' <th align="left" valign="middle" scope="col">'+'WithDraw'+'</th>'
                +' <th align="left" valign="middle" scope="col">'+document.getElementById("withdraw").value+'</th>'
                +'</tr>'
        }
        document.getElementById("withdraw").value="";
    }
}