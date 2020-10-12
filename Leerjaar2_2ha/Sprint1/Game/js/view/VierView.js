export class VierView {
    // Constructor
    speelBordComponent = [];
    vier;


    constructor(vier) {
        this.vier = vier;

        this.getElement();
    }

    // functie om te elementen te selecteren uit de DOM (selector)
    getElement(selector) {
        // let speelBordComponent = document.querySelectorAll("tegels");
        // let speelBoardComponent = new VierView();
        // document.querySelector("speelBord").append(speelBoardComponent.getView());
    }

    showSpeelBord(maakControl){
        var geel = true; //kijken of geel of rood aan zet is
        var arij = 8;
        var akolom = 10;
        var arrVeld = new Array();
        var rijen;
        var kolommen;
        var knopKleur = 'yellow';
        rijen=prompt("Geef het aantal rijen op : ",6);
        kolommen=prompt("Geef het aantal kolommen op :",7);
        arij = rijen;
        akolom = kolommen;
        for(let i = 0; i < akolom; i++){
            arrVeld[i] = new Array();
        }

        var knop = 0;
        // this.speelbord = speelbord;
        var strHTML = "<table >";
        strHTML += "<tr>";
        strHTML += "<td align=center width='150'>";
        strHTML += "<a href='#any_URL' onMouseOver='handleOver();return true;' onMouseOut='handleOut();return true;'>";
        strHTML += "<img src='knopInit.gif' width=138 height=37  border=0 img name='imgName'";
        strHTML += "alt='Klik hier om het raster leeg te maken' onclick='init()'></a></td>";
        strHTML += "</tr></table><table border='0' cellpadding='2' cellspacing='2'>";
        strHTML += "<tr>";
        for(knop = 0 ; knop < akolom ; knop++){
            strHTML += "<td align=center width='50'><input style='width:'50' type='button' value='" + (knop + 1) +
                "' style='background:\""+knopKleur+"\"' onclick='placeCoin(" + knop +")'></td>"
        }
        strHTML += "</tr></table><table border='1'>";

        for(var rij = arij-1 ; rij >= 0 ; rij--){
            strHTML += "<tr height='50'>";
            for(var kolom = 0 ; kolom < akolom ; kolom++){
                // strHTML += "<td width='50' bgcolor='" + this.vier.maakControl(kolom,rij)+"'>&nbsp</td>"
                strHTML +=  "<td width='50' bgcolor='" +"'>&nbsp</td>"

            }
            strHTML += "</tr>"
        }
        strHTML += "</table>";
        // let divSpel;
        let divSpel = document.getElementById('speelBord');
        divSpel.innerHTML = strHTML;
    }

    // functie die de kleur van het muntje aan geeft (handler)


    // button om de game te starten
    bindStartGame(handler) {
        let startButton = document.getElementById("start");

        startButton.addEventListener('click', vierEvent => {
            console.log('Im doing something!');
            handler();
        });
    }
}