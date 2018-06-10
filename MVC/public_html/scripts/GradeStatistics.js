/**
 * Created by bgaid on 6/4/2018.
 */

var counter = document.getElementById('counter').getContext('2d');
var no = 0; // Starting Point
var pointToFill = 4.72;  //Point from where you want to fill the circle
var cw = counter.canvas.width;  //Return canvas width
var ch = counter.canvas.height; //Return canvas height
var diff;   // find the different between current value (no) and trageted value (100)
var fill = 0;

//Pentru grad de promovabilitate
var gitCommits = -1;
var stackQuestions = -1;
var media = -1;
var prezente = -1;
function fillCounter(){
    diff = ((no/100) * Math.PI*2*10);

    counter.clearRect(0,0,cw,ch);   // Clear canvas every time when function is call

    counter.lineWidth = 15;     // size of stroke

    counter.fillStyle = '#000000';     // color that you want to fill in counter/circle

    counter.strokeStyle = '#0c3c60';    // Stroke Color

    counter.textAlign = 'center';

    counter.font = "80px monospace";    //set font size and face

    counter.fillText(no+'%',200,210);       //fillText(text,x,y);

    counter.beginPath();
    counter.arc(184,185,178,pointToFill,diff/10+pointToFill);    //arc(x,y,radius,start,stop)

    counter.stroke();   // to fill stroke

    // now add condition
    if(no >= gradPromovabilitate)   // !!! in loc de 70 pui procentul pana la care trebuie sa se incarce
    {
        no = 0;
        clearTimeout(fill);

        //fill is a variable that calls the function fillcounter()
    }
    no++;
}

//now call the function

     //call the fillCounter function after every 50MS


document.getElementById("calculateButton").addEventListener("click", function(event){
    event.preventDefault();
    getGithubCommits();
});


function getGithubCommits() {
    let loadingLabel = document.getElementById("loadingLabel");
    loadingLabel.textContent = "Loading...";
    var returnval;
    let NumeGithub = document.getElementById("NumeGithub").value;
    let IdStack = document.getElementById("IdStack").value;
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            returnval = xmlhttp.responseText;
            returnval = JSON.parse(returnval);
            gitCommits = returnval[0];
            stackQuestions = returnval[1];
            media = returnval[2];
            prezente = returnval[3];
            console.log(returnval);
            getResult();
            let loadingLabel = document.getElementById("loadingLabel");
            loadingLabel.textContent = "";
        }
    };

    xmlhttp.open("POST", "http://localhost/ProjectWeb/MVC/public_html/GradeStatistics/getResults", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send("NumeGithub=" + NumeGithub + "&IdStack=" + IdStack);



}

function getResult()
{
    if(no <= 1) {

        let suggestion = document.getElementById("suggestion");
        gradPromovabilitate = (media * 0.7);
        gradPromovabilitate += (prezente * 0.10);
        gradPromovabilitate += ((gitCommits*0.4) * 0.1);
        gradPromovabilitate += ((stackQuestions*0.4) * 0.1);
        gradPromovabilitate *= 10;
        switch (true){
            case gradPromovabilitate>90:
                suggestion.textContent = "Felicitari,treceti!";
                break;
            case gradPromovabilitate>80:
                suggestion.textContent = "Felicitari,treceti!";
                break;
            case gradPromovabilitate>70:
                suggestion.textContent = "Esti aproape trecut!";
                break;
            case gradPromovabilitate>60:
                suggestion.textContent = "Esti aproape trecut!";
                break;
            case gradPromovabilitate>50:
                suggestion.textContent = "Esti aproape trecut!";
                break;
            case gradPromovabilitate>40:
                suggestion.textContent = "Mai ai de invatat!";
                break;
            case gradPromovabilitate>30:
                suggestion.textContent = "Mai ai de invatat!";
                break;
            default:
                suggestion.textContent = "Nu Treceti!";
        }

        fill = setInterval(fillCounter, 30);

    }
}