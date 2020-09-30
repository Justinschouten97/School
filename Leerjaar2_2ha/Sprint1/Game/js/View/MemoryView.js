export class MemoryView {

    // Constructor
    images = [];
    memory;

    constructor(memory) {

    }

    // functie om te elementen te selecteren uit de DOM (selector)
    getElement(){}

    // functie die de kleur van het muntje aan geeft (handler)


    // button om de game te starten
    bindStartGame(handler) {

    }


    /************
     Functie die het speelveld aanmaakt met vakjes en knoppen
     ************/
    function toonVeld(){
        var strHTML = "<table id='board'>";
        strHTML += "<tr>";
        strHTML += "<td align=center width='150'>";
        strHTML += "<a href='#any_URL' onMouseOver='handleOver();return true;' onMouseOut='handleOut();return true;'>";
        strHTML += "<img src='knopInit.gif' width=138 height=37  border=0 img name='imgName'";
        strHTML += "alt='Klik hier om het raster leeg te maken' onclick='init()'></a></td>";
        strHTML += "</tr></table><table id='tegels' border='0' cellpadding='2' cellspacing='2'>";
        strHTML += "<tr>";
        for(knop = 0 ; knop < akolom ; knop++){
            strHTML += "<td align=center width='50'><input style='width:50' type='button' value='" + (knop + 1) +
                "' style='background:\""+knopKleur+"\"' onclick='plaatsSchijf(" + knop +")'></td>"
        }
        strHTML += "</tr></table><table border='1'>";

        for(var rij = arij-1 ; rij >= 0 ; rij--){
            strHTML += "<tr height='50'>";
            for(var kolom = 0 ; kolom < akolom ; kolom++){
                strHTML += "<td width='50' bgcolor='" + maakControl(kolom,rij)+"'>&nbsp</td>"
            }
            strHTML += "</tr>"
        }
        strHTML += "</table>";
        divSpel.innerHTML = strHTML;
    }
}