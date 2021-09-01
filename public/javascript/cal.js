function cc()
{
var cneed;
var fneed;
var crneed;
var pneed;
var aneed;
var fd;
var age=parseInt(document.getElementById("age").value);
var foot=parseInt(document.getElementById("foot").value);
var inch=parseInt(document.getElementById("inch").value);
var cm1=(inch*2.54);
var cm2=(foot*30.48);
var cm=Math.round(cm1+cm2);
var weight=parseInt(document.getElementById("weight").value);
var loa=document.getElementById("loa").value;
if(document.getElementById("gen").checked)
{
fd=(10*weight)+(6.25*cm)-(5*age)+5;
}
else
{
fd=(10*weight)+(6.25*cm)-(5*age)-161;
}
switch(loa)
{
case "1":
cneed=fd*1.2;
break;
case "2":
cneed=fd*1.375
break;
case "3":
cneed=fd*1.53;
break;
case "4":
cneed=fd*1.725;
break;
case "5":
cneed=fd*1.9;
break;
}
cneed=Math.floor(cneed);
fneed=Math.floor((cneed*0.25)/9);
pneed=Math.floor((cneed*0.25)/4);
crneed=Math.floor((cneed*0.25)/4);
aneed=Math.floor((cneed*0.25)/7);
document.getElementById("rc").value=" "+cneed+" per day";
document.getElementById("rf").value=" "+fneed+" grams per day";
document.getElementById("rp").value=" "+pneed+" grams per day";
document.getElementById("rh").value=" "+crneed+" grams per day";
document.getElementById("ra").value=" "+aneed+" grams per day";
}
function con(num)
{
var hc=parseInt(num.value);
var hi=hc/2.54;
var hf=Math.floor(hi/12);
var ri=Math.round(hi%12);
if(hc>40 && hc<=210)
{
document.getElementById("foot").value=hf;
}
document.getElementById("inch").value=ri;
}
function hcon()
{
var hf=parseInt(document.getElementById("foot").value);
var hi=parseInt(document.getElementById("inch").value);
var hc;
hc=Math.round((hf*30.48)+(hi*2.54));
document.getElementById("cen").value=hc;
}
function cknum(event,num)
{
var kc;
if(window.event)
{
kc=event.keyCode;
}
else
{
kc=event.which;
}
var a=num.value;
if(kc==48)
{
if(a=="")
{
return false;
}
else
{
return true;
}
}if (kc!=8 && kc!=0)
{
if (kc<49||kc>57)
{
return false;
}
}
}
