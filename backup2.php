<html>
<head>
<script type="text/javascript" src="jquery.terminal-1.0.10.js"></script>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu+Mono" />
</head>
<style>
html
{
  -webkit-tap-highlight-color:transparent;
}
input { outline-style:none;}
input {
background: rgb(48, 48, 48);
border-color: rgb(48, 48, 48);
border:0px;
    color: white;
}
pre, a {

  border-radius: 0px 0px 5px 5px;
  color: white;
}

html {
  background: rgb(63, 82, 99);
}
* {
  font-family: "Ubuntu Mono";
  -webkit-transition: all 1s;

  font-size: 14px;
}
pre:not(:empty) {
  overflow: auto;
  background: rgb(48, 48, 48);
  border: 1px solid #ccc;
  max-height: 80%;
  width: 90%;
  font-size: 14px;
    font-family: "Ubuntu Mono";
  padding: 10px 10px 20px;
  margin: 0px;
  box-shadow: -4px 4px 2px 0 rgba(0,0,0,0.3);
  white-space: pre-wrap;
  outline: 0;
}

@-webkit-keyframes blink {
  0% { opacity: 1.0; }
  50% { opacity: 0.0; }
  100% { opacity: 1.0; }
}

@keyframes blink {
  0% { opacity: 1.0; }
  50% { opacity: 0.0; }
  100% { opacity: 1.0; }
}
</style>
<?php
//$ servername = "localhost";
//$ password = "VG12345";
//$ database = "id935168_vg";
// Create connection
//$ conn = mysqli_connect($ servername, $ username, $ password, $ database);
// Check connection
//if (!$ conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";
?>
<?php
$h=[];
//require_once 'api.php';
//request("https://api.dc01.gamelockerapp.com/shards/ea/matches");
//request("https://api.dc01.gamelockerapp.com/shards/ea/players");
//$ json = json_decode($ serverOutput, true);
//echo $ json;/*
?>
<div id="termhead" style="background-color:white;margin-left:1px;padding:0px;
width: 91.7%;border-radius:5px 5px 0px 0px;
  overflow: auto;
  border: 1px solid #ccc;
  width: 90%;
  font-size: 14px;
  text-align:center;
  padding: 0px 10px 10px;
  margin: 0px;
  white-space: pre-wrap;
  outline: 0;" >
  TERMINAL
</div>
<pre id="term">
Hello.
Welcome to Terminal.
(Type 'help' to see all commands)
Do you know who you are?
home$ <input id='curr' value='' autocorrect='off' autocomplete='off' autocapitalize='off' spellcheck='false'>
</pre>

<script>
var level={"home":["case1.txt","case2.txt","case3.txt","home18","home32","home34"],"home18":["medreport.txt","contactsbook.txt"],"home32":["lawsuitfile.txt","toolbox.txt"],"home34":[]};
var answer=["Person1"];
var a=0;
var data={"case1.txt":`
<div style="color:#00FF00">
File:		Theft of cash in home35 Person0
Date: 		10th March 2017
Time:		1:35 PM
Scenario Reported:
Cash worth 1 Lakh INR stolen from safe which was cracked open using a car jack with peculiar teeth mark, while the inhabitants were away at work. House has no Burglar alarms and CCTV.

Information collected from People:
Person1 from opposite house reportedly saw a middle aged man with a scar on his face, bald-headed and well built around the time of the event. Had 'mysterious look' with suspicious behaviour. Hence had gone to home35 and on seeing a broken door, contacted the police.

Person2 claimed that he was late to get there at the scene and only saw Person1 alerting the police after he had seen the house condition.

Analysis made using Citizen's ID Database:
The man described by Person1 is likely to be a "Mr.Karthik" who lives by home18 in the same locality and the description perfectly matches as claimed by Person1.

Address of people involved:
Mr.Karthik lives in home18
Person1 lives in home32
Person2 lives in home34

So now... Where do you want to go and start your investigation?

</div>
`,"lawsuitfile.txt":`
<div style='color:cyan'>
Surprisingly,
Person1 is suing Person0 for alleged property expansion inot his area.
Previous hearings have been bitterfull.
</div>
`,"toolbox.txt":`
<div style='color:cyan'>
There, there...A car jack with peculiar teeth mark is found.
</div>
`,"contactsbook.txt":`
<div style='color:cyan'>
Person0 is very well in the contacts and seems to be a friend of his.
</div>
`,"medreport.txt":`
<div style='color:cyan'>
Reports show Mr.Karthik suffering from Arthritits and is undergoing regular treament with a therapist.
Cannot lift heavy stuff now can exert lot of power due to weak bones.
</div>
`
,"case2.txt":`
<div style="color:yellow">

File:		Smuggling of sensitive information from Company0
Date: 		10th March 2017
Time:		7:38 PM

Scenario Reported:
The HR Manager of Company0 reported a sensitive data "Missing" after realizing that the server didn't show up the required file during the regular checking.

Information collected from People:
 Only 3 other people have the access to this data - Person7, Person8 and Person9 apart from the HR manager.
The file that is missing is named as "OperationR" and has sensitive information about the Research that was carried on by the company and might affect their Value if gone to Rival's hands.
The IP Address of the company's system from which it has been copied has been found to be 10.13.1.131.

Analysis made :
Person8 has been in an Holiday trip with his family from 8-12th of March and has been asked about the situaton. As the file cant be accessed remotely, his suspicion was completely removed.
Person7 and Person9 were present when the situation came up and were interrgoated and both had their respective work during that time.
No suitable or relatable evidences was able to be connected with them.
Best way to start is to verify the IP address of both the people and to see if it matches the downloaded one, but was not allowed as per the Code of Conduct of Company1.
** But well, you can always break in :P **

Address of people involved:
Person7= cubicle7
Person9= cubicle9

Objective:
The File has to be recovered and deleted from the system in whichever it is present (or moved).

So now... Where do you want to go and start your investigation? (Remember to use help command)

</div>
`};
var cur=level["home"];
var pwd="";
console.log(cur);
document.getElementById("curr").focus();
var prev=[];
var c;
document.addEventListener('keydown', function(event) {
    if(event.keyCode == 38) {
        document.getElementById("curr").value=prev[c];
        document.getElementById("curr").setSelectionRange(1,2);
        c--;
        if(c<0)
        c=prev.length-1;
      }
    else if(event.keyCode == 13) {
        execute();
        c=prev.length-1;
    }
});
function execute()
{
  var k=document.getElementById("term").innerHTML;
  //console.log(k.indexOf("<input"));
  k=k.slice(0,k.indexOf("<input"));
  k+=document.getElementById("curr").value;
  if(document.getElementById("curr").value!=="undefined")
  prev.push(document.getElementById("curr").value);
  if(document.getElementById("curr").value=="help")
  {
    k+="<br>----------------------  HELP  -----------------------<br>whoami        :Username<br>pwd           :Current Working Directory<br>cd [name]     :Change to a Directory/Location<br>ls            :lists the files in the current directory<br>cd ..         :To go back to previous directory/location<br>cat [filename]:view contents of the file<br>quit          :Quit the Terminal<br>accuse [name] :Accuse one of the susspects<br>"
  }
  else if(document.getElementById("curr").value=="whoami")
  {
    k+="<br><br>You are Mr.Kali, a professional Detective specialsing in solving Crimes realted to Robbery, Murders and CyberCrimes.<br> ";
  }
  else if(document.getElementById("curr").value=="quit")
  {
    document.getElementById("term").innerHTML="";
      document.getElementById("termhead").innerHTML="";
      document.getElementById("termhead").style.visibility = "hidden";
  }
  else if(document.getElementById("curr").value=="clear")
  {
    document.getElementById("term").innerHTML=`
    Hello.
    Welcome to Terminal.
    (Type 'help' to see all commands)
    Do you know who you are?
    home$ <input id='curr' value='' autocorrect='off' autocomplete='off' autocapitalize='off'><br>`;
  }
  console.log(document.getElementById("curr").value.split(" "));
  console.log(cur);
  console.log("pwd is "+ pwd);
  if(document.getElementById("curr").value.split(" ")[0]=="cd")
  {
    console.log("CD detected");
    console.log(cur[document.getElementById("curr").value.split(" ")[1]]);
    if(cur.indexOf(document.getElementById("curr").value.split(" ")[1])!=-1 && document.getElementById("curr").value.split(" ")[1]!=".." && level[document.getElementById("curr").value.split(" ")[1]]!==undefined)
    {   console.log("ENTERED");
      pwd+="/"+document.getElementById("curr").value.split(" ")[1];
      k+="<br>home"+pwd+"$ <input id='curr' value='' autocorrect='off' autocomplete='off' autocapitalize='off'><br>";
      cur=level[document.getElementById("curr").value.split(" ")[1]];
    }
    else if(document.getElementById("curr").value.split(" ")[1]=="..")
    {
      console.log("back");
      pwd="";
      k+="<br>home"+pwd+"$ <input id='curr' value='' autocorrect='off' autocomplete='off' autocapitalize='off'><br>";
      cur=level["home"];
    }
    else {
        console.log("error NOT FOUND !");
        k+="<br><br><div style='color:red;'>ERROR Directory NOT FOUND !</div><br>";
        k+="<br>home"+pwd+"$ <input id='curr' value='' autocorrect='off' autocomplete='off' autocapitalize='off'><br>";

      }
    }//cd end
    else if(document.getElementById("curr").value=="ls")
    {
      console.log("LS"+cur[0]);
      var i=0;
      k+="<br>";
      for(i=0;i<cur.length;i++)
      k+="<br>"+cur[i];
      k+="<br>";
      k+="<br>home"+pwd+"$ <input id='curr' value='' autocorrect='off' autocomplete='off' autocapitalize='off'><br>";

    }
    else if(document.getElementById("curr").value.split(" ")[0]=="cat")
    {
      console.log("CAT detected");
    if(cur.indexOf(document.getElementById("curr").value.split(" ")[1])!=-1 && data[document.getElementById("curr").value.split(" ")[1]]!==undefined)
    {
      console.log("ENTERED FILE");
      k+=data[document.getElementById("curr").value.split(" ")[1]];
      k+="<br>home"+pwd+"$ <input id='curr' value='' autocorrect='off' autocomplete='off' autocapitalize='off'><br>";

    }
    else {
        console.log("error FILE NOT FOUND !");
        k+="<br><br><div style='color:red;'>ERROR FILE NOT FOUND !</div><br>";
        k+="<br>home"+pwd+"$ <input id='curr' value='' autocorrect='off' autocomplete='off' autocapitalize='off'><br>";

      }
    }
    else if(document.getElementById("curr").value.split(" ")[0]=="accuse")
    {
      console.log("accuse");
      if(document.getElementById("curr").value.split(" ")[1]==answer[a])
      {a=a+1;
        k+=`
        <div style='color:#00FF00'>
      --------------------------------------
      Correct! You have passed Level `
      +a+`

      YOU CAN NOW GET 10% discount on PRODUCT X

      For Redeeming use :

      COUPON CODE: RPQV-SEQC
      -----------------------------------
      </div>`;
    }
    else {
      k+=`<div style='color:red;'>
    --------------------------------------
    ERROR YOU HAVE INCORRECTLY ACCUSED AN INNOCENT CITIZEN
    -----------------------------------</div>`;
    }

      k+="<br>home"+pwd+"$ <input id='curr' value='' autocorrect='off' autocomplete='off' autocapitalize='off'><br>";

    }
    else if(document.getElementById("curr").value.split(" ")[0]=="pwd")
    {
      console.log("pwd");
      if(pwd=="")
      {
        k+=`
      --------------------------------------
      You are in your apartment (home) wherein, various casefiles of different crime scenes alloted to you are located...
      PWD : home
      -----------------------------------`;
    }
    else
    {
      k+=`
    --------------------------------------
    You are inside `+pwd+`
    -----------------------------------`;
  }

      k+="<br>home"+pwd+"$ <input id='curr' value='' autocorrect='off' autocomplete='off' autocapitalize='off'><br>";

    }
    else
      k+="<br>home"+pwd+"$ <input id='curr' value='' autocorrect='off' autocomplete='off' autocapitalize='off'><br>";
  document.getElementById("term").innerHTML=k;
  document.getElementById("curr").focus();
}
</script>
</html>
