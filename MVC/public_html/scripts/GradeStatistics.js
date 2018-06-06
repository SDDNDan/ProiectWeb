/**
 * Created by bgaid on 6/4/2018.
 */

var counter = document.getElementById('counter').getContext('2d');
var no = 0; // Starting Point
var pointToFill = 4.72;  //Point from where you want to fill the circle
var cw = counter.canvas.width;  //Return canvas width
var ch = counter.canvas.height; //Return canvas height
var diff;   // find the different between current value (no) and trageted value (100)

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
        clearTimeout(fill);     //fill is a variable that calls the function fillcounter()
    }
    no++;
}

//now call the function

     //call the fillCounter function after every 50MS

let calculateButton = document.getElementById("calculateButton");
calculateButton.addEventListener("click", function () {
    gradPromovabilitate = 57;
    var fill = setInterval(fillCounter,30);
});

