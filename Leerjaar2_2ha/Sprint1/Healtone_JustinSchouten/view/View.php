<?php

namespace view;
//include_once('model/Model.php');
//include_once('model/Patient.php');
//include_once('model/Arts.php');
//include_once('model/Medicijn.php');


class View
{
    private $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    // patienten
    public function showPatienten($result = null)
    {
        if ($result == 1) {
            echo "<h4>Actie geslaagd</h4>";
        }
        $patienten = $this->model->getPatienten();

        /*de html template */
        echo "<!DOCTYPE html>
                <html lang=\"en\">
                <head>
                    <meta charset=\"UTF-8\">
                    <title>Overzicht patienten</title>
                    <style>
                        #patienten{
                            display:grid;
                            grid-template-columns:repeat(4,1fr);                
                            grid-column-gap:2px;
                            grid-row-gap:2px;
                            justify-content: center;
                        }
                        .patient{
                            width:80%;
                            background-color:#ccccff;
                            color:darkslategray;
                            font-size:12px;
                            padding:10px;
                            border-radius:10px;
                        }
                    </style>
                </head>
                <body>";
        echo "<h2>Patienten overzicht</h2> <form action='index.php' method='post'>
                               <input type='hidden' name='showForm' value='0'>
                               <input type='submit' value='toevoegen'/>
                               </form></div></body></html>";
        if ($patienten !== null) {
            echo "
                        <div id=\"patienten\">";
            foreach ($patienten as $patient) {
                echo "<div class=\"patient\">
                      <h5>Naam:</h5>                 
                      $patient->naam<br />
                      <h5>Adres:</h5>
                      $patient->adres<br />
                      <h5>Woonplaats:</h5>
                      $patient->woonplaats<br />
                      <h5>ZKnummer: </h5>
                      $patient->zknummer<br />
                      <h5>Geboorte datum:</h5>
                      $patient->geboortedatum<br />
                      <h5>Soort verzekering:</h5>
                      $patient->soortverzekering<br />
                      <form action='index.php' method='post'>
                       <input type='hidden' name='showForm' value='$patient->id'><input type='submit' value='wijzigen'/></form>
                        <form action='index.php' method='post'>
                       <input type='hidden' name='delete' value='$patient->id'><input type='submit' value='verwijderen'/></form>
                    </div>";
            }
        } else {
            echo "Geen patienten gevonden";
        }
        echo "</div>";

    }
    public function showFormPatienten($patientID = null)
    {
        if ($patientID != null && $patientID != 0) {
            $patient = $this->model->selectPatient($patientID);
        }
        /*de html template */
        echo "<!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <title>Beheer patientengegevens</title>
        </head><body>
        <h2>Formulier patientgegevens</h2>";

        if (isset($patient)) {
            echo "<form method='post' >
        <table>
            <tr><td></td><td>
                <input type=\"hidden\" name=\"id\" value='$patientID'/></td></tr>
             <tr><td>   <label for=\"naam\">Patient naam</label></td><td>
                <input type=\"text\" name=\"naam\" value= '" . $patient->naam . "'/></td></tr>
            <tr><td>
                <label for=\"adres\">adres</label></td><td>
                <input type=\"text\" name=\"adres\" value = '" . $patient->adres . "'/></td></tr>
            <tr><td>
                <label for=\"woonplaats\">woonplaats</label></td><td>
                <input type=\"text\" name=\"woonplaats\" value= '" . $patient->woonplaats . "'/></td></tr>
            <tr><td>
                <label for=\"geboortedatum\">geboortedatum</label></td><td>
                <input type=\"text\" name=\"geboortedatum\" value= '" . $patient->geboortedatum . "'/></td></tr>
            <tr><td>
                <label for=\"zknummer\">zknummer</label></td><td>
                <input type=\"text\" name=\"zknummer\" value= '" . $patient->zknummer . "'/></td></tr>
                 <tr><td>
                <label for=\"soortverzekering\">soortverzekering</label></td><td>
                <input type=\"text\" name=\"soortverzekering\" value= '" . $patient->soortverzekering . "'/></td></tr>
            <tr><td>
                <input type='submit' name='update' value='opslaan'></td><td>
            </td></tr></table>
            </form>
        </body>
        </html>";
        } else {
            /*de html template */
            echo "<form method='post' action='index.php'>
        <table>
            <tr><td></td><td>
                <input type=\"hidden\" name=\"id\" value=''/></td></tr>
             <tr><td>   <label for=\"naam\">Patient naam</label></td><td>
                <input type=\"text\" name=\"naam\" value= ''/></td></tr>
            <tr><td>
                <label for=\"adres\">adres</label></td><td>
                <input type=\"text\" name=\"adres\" value = ''/></td></tr>
            <tr><td>
                <label for=\"woonplaats\">woonplaats</label></td><td>
                <input type=\"text\" name=\"woonplaats\" value= ''/></td></tr>
            <tr><td>
                <label for=\"geboortedatum\">geboortedatum</label></td><td>
                <input type=\"text\" name=\"geboortedatum\" value= ''/></td></tr>
            <tr><td>
                <label for=\"zknummer\">zknummer</label></td><td>
                <input type=\"text\" name=\"zknummer\" value= ''/></td></tr>
                 <tr><td>
                <label for=\"soortverzekering\">soortverzekering</label></td><td>
                <input type=\"text\" name=\"soortverzekering\" value= ''/></td></tr>
            <tr><td>
                <input type='submit' name='create' value='opslaan'></td><td>
            </td></tr></table>
            </form>
        </body>
        </html>";
        }
    }

    // artsen
    public function showArtsen($result = null)
    {
        if ($result == 1) {
            echo "<h4>Actie geslaagd</h4>";
        }
        $artsen = $this->model->getArtsen();

        /*de html template */
        echo "<!DOCTYPE html>
                <html lang=\"en\">
                <head>
                    <meta charset=\"UTF-8\">
                    <title>Overzicht artsen</title>
                    <style>
                        #artsen{
                            display:grid;
                            grid-template-columns:repeat(4,1fr);                
                            grid-column-gap:2px;
                            grid-row-gap:2px;
                            justify-content: center;
                        }
                        .arts{
                            width:80%;
                            background-color: lightgray;
                            color:darkslategray;
                            font-size:12px;
                            padding:10px;
                            border-radius:10px;
                        }
                    </style>
                </head>
                <body>";
        echo "<h2>Artsen overzicht</h2> <form action='index.php' method='post'>
                               <input type='hidden' name='showForm' value='0'>
                               <input type='submit' value='toevoegen'/>
                               </form></div></body></html>";
        if ($artsen !== null) {
            echo "
                        <div id=\"artsen\">";
            foreach ($artsen as $arts) {
                echo "<div class=\"arts\">
                      
                      <h5>Arts ID:</h5>                 
                      $arts->artsID<br />
                      <h5>Voornaam:</h5>
                      $arts->voornaam<br />
                      <h5>Achternaam:</h5>
                      $arts->achternaam<br />
                      <h5>Soort arts:</h5>
                      $arts->soortarts<br />
                      <h5>Straat:</h5>
                      $arts->straat<br />
                      <h5>Postcode:</h5>
                      $arts->postcode<br />
                      <h5>Plaats:</h5>
                      $arts->plaats<br />
                      <h5>Email:</h5>
                      $arts->email<br />
                      <h5>Telefoonnummer:</h5>
                      $arts->telefoonnummer<br />
                      <form action='index.php' method='post'>
                       <input type='hidden' name='showForm' value='$arts->artsenID'><input type='submit' value='wijzigen'/></form>
                        <form action='index.php' method='post'>
                       <input type='hidden' name='delete' value='$arts->artsenID'><input type='submit' value='verwijderen'/></form>
                    </div>";
            }
        } else {
            echo "Geen artsen gevonden";
        }
        echo "</div>";

    }
    public function showFormArtsen($artsID = null)
    {
        if ($artsID != null && $artsID != 0) {
            $arts = $this->model->selectArts($artsID);
        }
        /*de html template */
        echo "<!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <title>Beheer artsengegevens</title>
        </head><body>
        <h2>Formulier artsgegevens</h2>
        ";



        if (isset($arts)) {
            echo "<form method='post' >
        <table>
            <tr><td></td><td>
                <input type=\"hidden\" name=\"artsID\" value='$artsID'/></td></tr>
             <tr><td>   <label for=\"voornaam\">Arts voornaam</label></td><td>
                <input type=\"text\" name=\"voornaam\" value= '" . $arts->voornaam . "'/></td></tr>
            <tr><td>
                <label for=\"achternaam\">achternaam</label></td><td>
                <input type=\"text\" name=\"achternaam\" value = '" . $arts->achternaam . "'/></td></tr>
            <tr><td>
                <label for=\"soortarts\">soortarts</label></td><td>
                <input type=\"text\" name=\"soortarts\" value= '" . $arts->soortarts . "'/></td></tr>
            <tr><td>
                <label for=\"straat\">straat</label></td><td>
                <input type=\"text\" name=\"straat\" value= '" . $arts->straat . "'/></td></tr>
            <tr><td>
                <label for=\"postcode\">postcode</label></td><td>
                <input type=\"text\" name=\"postcode\" value= '" . $arts->postcode . "'/></td></tr>
                 <tr><td>
                <label for=\"plaats\">plaats</label></td><td>
                <input type=\"text\" name=\"plaats\" value= '" . $arts->plaats . "'/></td></tr>
            <tr><td>
                <label for=\"email\">email</label></td><td>
                <input type=\"text\" name=\"email\" value= '" . $arts->email . "'/></td></tr>
                 <tr><td>
                <label for=\"telefoonnummer\">telefoonnummer</label></td><td>
                <input type=\"text\" name=\"telefoonnummer\" value= '" . $arts->telefoonnummer . "'/></td></tr>
            <tr><td>
                <input type='submit' name='update' value='opslaan'></td><td>
            </td></tr></table>
            </form>
        </body>
        </html>";
        } else {
            /*de html template */
            echo "<form method='post' action='index.php'>
        <table>
            <tr><td></td><td>
                <input type=\"hidden\" name=\"artsID\" value=''/></td></tr>
             <tr><td>   <label for=\"voornaam\">Arts voornaam</label></td><td>
                <input type=\"text\" name=\"voornaam\" value= ''/></td></tr>
            <tr><td>
                <label for=\"achternaam\">achternaam</label></td><td>
                <input type=\"text\" name=\"achternaam\" value = ''/></td></tr>
            <tr><td>
                <label for=\"soortarts\">soortarts</label></td><td>
                <input type=\"text\" name=\"soortarts\" value= ''/></td></tr>
            <tr><td>
                <label for=\"straat\">straat</label></td><td>
                <input type=\"text\" name=\"straat\" value= ''/></td></tr>
            <tr><td>
                <label for=\"postcode\">postcode</label></td><td>
                <input type=\"text\" name=\"postcode\" value= ''/></td></tr>
            <tr><td>
                <label for=\"plaats\">plaats</label></td><td>
                <input type=\"text\" name=\"plaats\" value= ''/></td></tr>
            <tr><td>
                <label for=\"email\">email</label></td><td>
                <input type=\"text\" name=\"email\" value= ''/></td></tr>
            <tr><td>
                <label for=\"telefoonnummer\">telefoonnummer</label></td><td>
                <input type=\"text\" name=\"telefoonnummer\" value= ''/></td></tr>
            <tr><td>
                <input type='submit' name='create' value='opslaan'></td><td>
            </td></tr></table>
            </form>
        </body>
        </html>";
        }
    }

    // medicijnen
    public function showMedicijnen($result = null)
    {
        if ($result == 1) {
            echo "<h4>Actie geslaagd</h4>";
        }
        $medicijnen = $this->model->getMedicijnen();

        /*de html template */
        echo "<!DOCTYPE html>
                <html lang=\"en\">
                <head>
                    <meta charset=\"UTF-8\">
                    <title>Overzicht medicijnen</title>
                    <style>
                        #medicijnen{
                            display:grid;
                            grid-template-columns:repeat(4,1fr);                
                            grid-column-gap:2px;
                            grid-row-gap:2px;
                            justify-content: center;
                        }
                        .medicijn{
                            width:80%;
                            background-color: dimgray;
                            color:darkslategray;
                            font-size:12px;
                            padding:10px;
                            border-radius:10px;
                        }
                    </style>
                </head>
                <body>";
        echo "<h2>Medicijnen overzicht</h2> <form action='index.php' method='post'>
                               <input type='hidden' name='showForm' value='0'>
                               <input type='submit' value='toevoegen'/>
                               </form></div></body></html>";
        if ($medicijnen !== null) {
            echo "
                        <div id=\"medicijnen\">";
            foreach ($medicijnen as $medicijn) {
                echo "<div class=\"medicijn\">
                      
                      <h5>Medicijn ID:</h5>                 
                      $medicijn->medicijnID<br />
                      <h5>Naam:</h5>
                      $medicijn->medicijnNaam<br />
                      <h5>Werking:</h5>
                      $medicijn->medicijnWerking<br />
                      <h5>Bijwerking:</h5>
                      $medicijn->medicijnBijwerking<br />
 
                      <form action='index.php' method='post'>
                       <input type='hidden' name='showForm' value='$medicijn->medicijnenID'><input type='submit' value='wijzigen'/></form>
                        <form action='index.php' method='post'>
                       <input type='hidden' name='delete' value='$medicijn->medicijnenID'><input type='submit' value='verwijderen'/></form>
                    </div>";
            }
        } else {
            echo "Geen medicijnen gevonden";
        }
        echo "</div>";
    }
    public function showFormMedicijnen($medicijnID = null)
    {
        if ($medicijnID != null && $medicijnID != 0) {
            $medicijn = $this->model->selectMedicijn($medicijnID);
        }
        /*de html template */
        echo "<!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <title>Beheer medicijnengegevens</title>
        </head><body>
        <h2>Formulier medicijngegevens</h2>
        ";



        if (isset($medicijn)) {
            echo "<form method='post' >
        <table>
            <tr><td></td><td>
                <input type=\"hidden\" name=\"medicijnID\" value='$medicijnID'/></td></tr>
             <tr><td>   <label for=\"medicijnNaam\">Medicijn naam</label></td><td>
                <input type=\"text\" name=\"medicijnNaam\" value= '" . $medicijn->medicijnNaam . "'/></td></tr>
            <tr><td>
                <label for=\"medicijnWerking\">Medicijn Werking</label></td><td>
                <input type=\"text\" name=\"medicijnWerking\" value = '" . $medicijn->medicijnWerking . "'/></td></tr>
            <tr><td>
                <label for=\"medicijnBijwerking\">Medicijn Bijwerking</label></td><td>
                <input type=\"text\" name=\"medicijnBijwerking\" value= '" . $medicijn->medicijnBijwerking . "'/></td></tr>
            <tr><td>
                <input type='submit' name='update' value='opslaan'></td><td>
            </td></tr></table>
            </form>
        </body>
        </html>";
        } else {
            /*de html template */
            echo "<form method='post' action='index.php'>
        <table>
            <tr><td></td><td>
                <input type=\"hidden\" name=\"medicijnID\" value=''/></td></tr>
             <tr><td>   <label for=\"medicijnNaam\">Medicijn Naam</label></td><td>
                <input type=\"text\" name=\"medicijnNaam\" value= ''/></td></tr>
            <tr><td>
                <label for=\"medicijnWerking\">Medicijn Werking</label></td><td>
                <input type=\"text\" name=\"medicijnWerking\" value = ''/></td></tr>
            <tr><td>
                <label for=\"medicijnBijwerking\">Medicijn Bijwerking</label></td><td>
                <input type=\"text\" name=\"medicijnBijwerking\" value= ''/></td></tr>
            <tr><td>
                <input type='submit' name='create' value='opslaan'></td><td>
            </td></tr></table>
            </form>
        </body>
        </html>";
        }
    }

    // recepten
    public function showRecepten($result = null)
    {
        if ($result == 1) {
            echo "<h4>Actie geslaagd</h4>";
        }
        $recepten = $this->model->getRecepten();

        /*de html template */
        echo "<!DOCTYPE html>
                <html lang=\"en\">
                <head>
                    <meta charset=\"UTF-8\">
                    <title>Overzicht recepten</title>
                    <style>
                        #recepten{
                            display:grid;
                            grid-template-columns:repeat(4,1fr);                
                            grid-column-gap:2px;
                            grid-row-gap:2px;
                            justify-content: center;
                        }
                        .recept{
                            width:80%;
                            background-color: indianred;
                            color:darkslategray;
                            font-size:12px;
                            padding:10px;
                            border-radius:10px;
                        }
                    </style>
                </head>
                <body>";
        echo "<h2>Recepten overzicht</h2> <form action='index.php' method='post'>
                               <input type='hidden' name='showForm' value='0'>
                               <input type='submit' value='toevoegen'/>
                               </form></div></body></html>";
        if ($recepten !== null) {
            echo "
                        <div id=\"recepten\">";
            foreach ($recepten as $recept) {
                echo "<div class=\"recept\">
                      
                      <h5>Recept ID:</h5>                 
                      $recept->receptID<br />
                      <h5>Patient ID:</h5>
                      $recept->patientenID<br />
                      <h5>Medicijn ID:</h5>
                      $recept->medicijnID<br />
                      <h5>Dosis:</h5>
                      $recept->medicijnDosis<br />
                      <h5>Duur:</h5>
                      $recept->medicijnDuur<br />
                      <h5>Herhalingen:</h5>
                      $recept->receptHerhalingen<br />
                      <h5>Uitgeschreven:</h5>
                      $recept->receptUitgeschreven<br />
                      <h5>Opgehaald:</h5>
                      $recept->receptOpgehaald<br />
                      <h5>Arts ID:</h5>
                      $recept->artsID<br />
                      
 
                      <form action='index.php' method='post'>
                       <input type='hidden' name='showForm' value='$recept->receptenID'><input type='submit' value='wijzigen'/></form>
                        <form action='index.php' method='post'>
                       <input type='hidden' name='delete' value='$recept->receptenID'><input type='submit' value='verwijderen'/></form>
                    </div>";
            }
        } else {
            echo "Geen recepten gevonden";
        }
        echo "</div>";
    }
    public function showFormRecepten($receptID = null)
    {
        if ($receptID != null && $receptID != 0) {
            $recept = $this->model->selectRecept($receptID);
        }
        /*de html template */
        echo "<!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <title>Beheer receptengegevens</title>
        </head><body>
        <h2>Formulier receptgegevens</h2>
        ";



        if (isset($recept)) {
            echo "<form method='post' >
        <table>
            <tr><td></td><td>
            <input type=\"hidden\" name=\"receptID\" value='$receptID'/></td></tr>
             <tr><td>   <label for=\"receptID\">Recept ID</label></td><td>
                <input type=\"text\" name=\"receptID\" value= '" . $receptID->receptenID . "'/></td></tr>
            <tr><td>
            <input type=\"hidden\" name=\"patientID\" value='$patientenID'/></td></tr>
             <tr><td>   <label for=\"patientID\">Patient ID</label></td><td>
                <input type=\"text\" name=\"patientID\" value= '" . $patientID->patientID . "'/></td></tr>
            <tr><td>
                <input type=\"hidden\" name=\"medicijnID\" value='$medicijnID'/></td></tr>
             <tr><td>   <label for=\"medicijnID\">Medicijn ID</label></td><td>
                <input type=\"text\" name=\"medicijnID\" value= '" . $medicijnID->medicijnID . "'/></td></tr>
            <tr><td>
                <label for=\"medicijnDosis\">Medicijn Dosis</label></td><td>
                <input type=\"text\" name=\"medicijnDosis\" value = '" . $medicijnDosis->medicijnWerking . "'/></td></tr>
            <tr><td>
             
                <input type='submit' name='update' value='opslaan'></td><td>
            </td></tr></table>
            </form>
        </body>
        </html>";
        } else {
            /*de html template */
            echo "<form method='post' action='index.php'>
        <table>
            <tr><td></td><td>
                <input type=\"hidden\" name=\"receptID\" value=''/></td></tr>
             <tr><td>   <label for=\"receptID\">Recept Naam</label></td><td>
                <input type=\"text\" name=\"receptID\" value= ''/></td></tr>
            <tr><td>
                <label for=\"patientID\">Patient ID</label></td><td>
                <input type=\"text\" name=\"patientID\" value = ''/></td></tr>
            <tr><td>
                <label for=\"medicijnID\">Medicijn ID</label></td><td>
                <input type=\"text\" name=\"medicijnID\" value= ''/></td></tr>
            <tr><td>
            <label for=\"medicijnDosis\">Medicijn Dosis</label></td><td>
                <input type=\"text\" name=\"medicijnDosis\" value= ''/></td></tr>
            <tr><td>
                <input type='submit' name='create' value='opslaan'></td><td>
            </td></tr></table>
            </form>
        </body>
        </html>";
        }
    }
}
