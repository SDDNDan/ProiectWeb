/**
 * Created by Slusariuc on 6/4/2018.
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
            console.log(returnval);
            returnval = JSON.parse(returnval);
            gitCommits = returnval.numberOfCommits;
            stackQuestions = returnval.numberOfStackQuestions;
            media = parseInt(returnval.mediaNotelor);
            prezente = parseInt(returnval.numberOfPresences);
            numberOfInterventions = returnval.numberOfInterventions;
            sugestia = returnval.sugestia;
            sugestiaHTML = returnval.sugestiaHTML;
            sugestiaCSS = returnval.sugestiaCSS;
            sugestiaJavascript = returnval.sugestiaJavascript;
            sugestiaPHP = returnval.sugestiaPHP;

            console.log(gitCommits);
            console.log(stackQuestions);
            console.log(media);
            console.log(prezente);
            console.log(sugestia);
            console.log(returnval.numberOfCommits);

            let container = document.createElement('div');
            container.className ="suggestion__content";
            let containerBase = document.getElementsByClassName("suggestion__container");
            let psugestion = document.createElement('p');
            psugestion.textContent = sugestia ;
            psugestion.className ="suggestion__message";
            let psugestion2 = document.createElement('p');
            psugestion2.textContent = sugestiaHTML ;
            psugestion2.className ="suggestion__message";
            let psugestion3 = document.createElement('p');
            psugestion3.textContent = sugestiaCSS ;
            psugestion3.className ="suggestion__message";
            let psugestion4 = document.createElement('p');
            psugestion4.textContent = sugestiaJavascript;
            psugestion4.className ="suggestion__message";
            let psugestion5 = document.createElement('p');
            psugestion5.textContent = sugestiaPHP ;

            psugestion5.className ="suggestion__message";

            container.appendChild(psugestion);
            container.appendChild(psugestion2);
            container.appendChild(psugestion3);
            container.appendChild(psugestion4);
            container.appendChild(psugestion5);
            containerBase[0].appendChild(container);
            console.log(returnval);
            getResult();
            let loadingLabel = document.getElementById("loadingLabel");
            loadingLabel.textContent = "";

            //Button Twitter

            buttonTwitter = document.createElement("button");
            buttonTwitter.className = "share__button";
            buttonTwitter.id = "twitter";

            buttonTwitter.addEventListener("click", function () {
                // Opens a pop-up with twitter sharing dialog
                var shareURL = "http://twitter.com/share?"; //url base
                //params
                var params = {
                    url: "www.twitter.com   ",
                    text: "Sansele mele de promovare la TW sunt de: " + parseInt(gradPromovabilitate) + "% . Yeee!! \n \n",
                    hashtags: "almostThere,TehnologiiWEB"
                }
                for(var prop in params) shareURL += '&' + prop + '=' + encodeURIComponent(params[prop]);
                window.open(shareURL, '', 'left=0,top=0,width=550,height=450,personalbar=0,toolbar=0,scrollbars=0,resizable=0');
            });

            let imageTwitter = document.createElement("image");
            imageTwitter.className = "image__share__button";
            imageTwitter.id = "twitter";
            buttonTwitter.appendChild(imageTwitter);

            //Button Facebook

            buttonFacebook = document.createElement("button");
            buttonFacebook.className = "share__button";
            buttonFacebook.id = "facebook";

            buttonFacebook.addEventListener("click", function () {
                FB.ui({
                    method: 'share',
                    display: 'popup',
                    hashtag : '#TehnologiiWEB',
                    href : 'https://profs.info.uaic.ro/~busaco/teach/courses/web/',
                    quote: 'Sansele mele de promovare sunt de ' + parseInt(gradPromovabilitate) + '%! Incearca si tu! '
                }, function(response){});
            });

            let imageFacebook = document.createElement("image");
            imageFacebook.className = "image__share__button";
            imageFacebook.id = "facebook";
            buttonFacebook.appendChild(imageFacebook);

            document.getElementsByClassName("share__buttons")[0].appendChild(buttonTwitter);
            document.getElementsByClassName("share__buttons")[0].appendChild(buttonFacebook);

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
        let message = document.getElementById("suggestion__message");
        gradPromovabilitate = (media * 0.7);
        gradPromovabilitate += (prezente * 0.10);
        gradPromovabilitate += ((gitCommits*0.2) * 0.5);
        gradPromovabilitate += ((stackQuestions*0.1) * 0.5);
        gradPromovabilitate += ((numberOfInterventions*0.3) * 0.5);
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

