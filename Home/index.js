
function printTicket(ID) {
    const data = document.body.innerHTML;
    document.body.innerHTML = document.getElementById(ID).innerHTML+"<ul class=\"instructions\" style=\"margin-top:80px;\"><p class=\"instruc-head\"><b>Instructions</b></p>     <li>Ticket is <b>not</b> transferable. Issued subject to travel restrictions in force and rules notified in Time Table & Tariffs. The Season Ticket is <b>invalid</b> without identity card. Season Ticket is <b>invalid</b> without the Holders name, age and signature. Senior Citizen availing concession should carry <b>proof of age</b>.</li>     <br>     <li><b>Free allowance on Season Ticket:</b> 10 Kgs on Second Class & 15 Kgs on First Class.</li>     <li><b>Free allowances on journey Ticket:</b> 35 Kgs on Second Class & 50 Kgs on First Class</li> </ul> ";
    window.print();
    document.body.innerHTML=data;
}


const weekday = new Array(7);
weekday[0] = "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";


function changeDay() {
    date =new Date(document.getElementById("dateInput").value);
    day=date.getDay();
    document.getElementById("day").value=weekday[day];
}
var isProfile=false;
function profileShow() {
    if(isProfile)
    {
        document.getElementById("profile").style.opacity=0;
        isProfile=false;
    }
    else
    {
        document.getElementById("profile").style.opacity=1;
        isProfile=true;
    }
}
