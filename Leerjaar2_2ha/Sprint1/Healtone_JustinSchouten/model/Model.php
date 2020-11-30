<?php

namespace model;
include_once ('model/Patient.php');
include_once ('model/Arts.php');
include_once ('model/Medicijn.php');
include_once ('model/Recept.php');

class Model
{
    private $database;

    private function makeConnection(){
      $this->database = new \PDO("mysql:host=localhost;dbname=healtone", "root",null);
    }

    //----------------------------------------------------------
    // patient
    public function insertPatient($naam,$adres,$woonplaats,$geboortedatum,$zknummer,$soortverzekering){
        $this->makeConnection();
        if($naam !='')
        {
            $query = $this->database->prepare (
                "INSERT INTO `patienten` (`id`, `naam`, `adres`, `woonplaats`, `zknummer`, `geboortedatum`, `soortverzekering`) 
                VALUES (NULL, :naam, :adres, :woonplaats, :zknummer, :geboortedatum, :soortverzekering)");
            $query->bindParam(":naam", $naam);
            $query->bindParam(":adres", $adres);
            $query->bindParam(":woonplaats",$woonplaats);
            $query->bindParam(":zknummer", $zknummer);
            $query->bindParam(":geboortedatum", $geboortedatum);
            $query->bindParam(":soortverzekering",$soortverzekering);
            $result = $query->execute();
            return $result;
        }
        return -1;
        // id hoeft niet te worden toegevoegd omdat de id in de databse op autoincrement staat.


    }
    public function updatePatient($id,$naam,$adres,$woonplaats,$geboortedatum,$zknummer,$soortverzekering){
        $this->makeConnection();

        // id moet worden toegevoegd omdat de id in de databse wordt gezocht
        $query = $this->database->prepare (
            "UPDATE `patienten` SET `naam` = :naam, `adres`=:adres, `woonplaats` = :woonplaats,
            `zknummer`=:zknummer, `geboortedatum`=:geboortedatum, `soortverzekering`=:soortverzekering 
            WHERE `patienten`.`id` = :id ");
        $query->bindParam(":id", $id);
        $query->bindParam(":naam", $naam);
        $query->bindParam(":adres", $adres);
        $query->bindParam(":woonplaats",$woonplaats);
        $query->bindParam(":zknummer", $zknummer);
        $query->bindParam(":geboortedatum", $geboortedatum);
        $query->bindParam(":soortverzekering",$soortverzekering);
        $result = $query->execute();
        return $result;
    }

    public function getPatienten(){

        $this->makeConnection();
        $selection = $this->database->query('SELECT * FROM `patienten`');
        if($selection){
            $result=$selection->fetchAll(\PDO::FETCH_CLASS,\model\Patient::class);
            return $result;
        }
        return null;
    }
    public function selectPatient($id){

        $this->makeConnection();
        $selection = $this->database->prepare(
            'SELECT * FROM `patienten` 
            WHERE `patienten`.`id` =:id');
        $selection->bindParam(":id",$id);
        $result = $selection ->execute();
        if($result){
            $selection->setFetchMode(\PDO::FETCH_CLASS, \model\Patient::class);
            $patient = $selection->fetch();
            return $patient;
        }
        return null;
    }
    public function deletePatient($id){
        $this->makeConnection();
        $selection = $this->database->prepare(
            'DELETE FROM `patienten` 
            WHERE `patienten`.`id` =:id');
        $selection->bindParam(":id",$id);
        $result = $selection ->execute();
        return $result;
    }
    //----------------------------------------------------------

    //----------------------------------------------------------
    // arts
    public function insertArts($artsID,$voornaam,$achternaam,$soortarts,$straat,$postcode,$plaats,$email,$telefoonnummer){
        $this->makeConnection();
        if($artsID !='')
        {
            $query = $this->database->prepare (
                "INSERT INTO `artsen` (`artsID`, `voornaam`, `achternaam`, `soortarts`, `straat`, `postcode`,
                                       `plaats`, `email`, `telefoonnummer`) 
                VALUES (NULL, :artsID, :voornaam, :achternaam, :soortarts, :straat, :postcode,
                :plaats, :email, :telefoonnummer");
            $query->bindParam(":artsID", $artsID);
            $query->bindParam(":voornaam", $voornaam);
            $query->bindParam(":achternaam",$achternaam);
            $query->bindParam(":soortarts", $soortarts);
            $query->bindParam(":straat", $straat);
            $query->bindParam(":postcode", $postcode);
            $query->bindParam(":plaats", $plaats);
            $query->bindParam(":email", $email);
            $query->bindParam(":telefoonnummer", $telefoonnummer);

            $result = $query->execute();
            return $result;
        }
        return -1;
        // id hoeft niet te worden toegevoegd omdat de id in de databse op autoincrement staat.


    }
    public function updateArts($artsID,$voornaam,$achternaam,$soortarts,$straat,$postcode,$plaats,$email,$telefoonnummer){
        $this->makeConnection();

        // id moet worden toegevoegd omdat de id in de databse wordt gezocht
        $query = $this->database->prepare (
            "UPDATE `artsen` SET `voornaam` = :voornaam, `achternaam`=:achternaam, 
                                 `soortarts` = :soortarts, `straat` = :straat, 
                                 `postcode` = :postcode, `plaats` = :plaats,
                                 `email` = :email, `telefoonnummer` = :telefoonnummer    
            WHERE `artsen`.`artsID` = :artsID ");
        $query->bindParam(":artsID", $artsID);
        $query->bindParam(":voornaam", $voornaam);
        $query->bindParam(":achternaam",$achternaam);
        $query->bindParam(":soortarts", $soortarts);
        $query->bindParam(":straat", $straat);
        $query->bindParam(":postcode", $postcode);
        $query->bindParam(":plaats", $plaats);
        $query->bindParam(":email", $email);
        $query->bindParam(":telefoonnummer", $telefoonnummer);
        $result = $query->execute();
        return $result;
    }

    public function getArtsen(){

        $this->makeConnection();
        $selection = $this->database->query('SELECT * FROM `artsen`');
        if($selection){
            $result=$selection->fetchAll(\PDO::FETCH_CLASS,\model\Arts::class);
            return $result;
        }
        return null;
    }
    public function selectArts($artsID){

        $this->makeConnection();
        $selection = $this->database->prepare(
            'SELECT * FROM `artsen` 
            WHERE `artsen`.`artsID` =:artsID');
        $selection->bindParam(":artsID",$artsID);
        $result = $selection ->execute();
        if($result){
            $selection->setFetchMode(\PDO::FETCH_CLASS, \model\Arts::class);
            $arts = $selection->fetch();
            return $arts;
        }
        return null;
    }
    public function deleteArts($artsID){
        $this->makeConnection();
        $selection = $this->database->prepare(
            'DELETE FROM `artsen` 
            WHERE `artsen`.`artsID` =:artsID');
        $selection->bindParam(":artsID",$artsID);
        $result = $selection ->execute();
        return $result;
    }
    //----------------------------------------------------------

    //----------------------------------------------------------
    // medicijn
    public function insertMedicijn($medicijnID,$medicijnNaam,$medicijnWerking,$medicijnBijwerking){
        $this->makeConnection();
        if($medicijnID !='')
        {
            $query = $this->database->prepare (
                "INSERT INTO `medicijnen` (`medicijnID`, `medicijnNaam`, `medicijnWerking`, `medicijnBijwerking`) 
                VALUES (NULL, :medicijnID, :medicijnNaam, :medicijnWerking, :medicijnBijwerking,");
            $query->bindParam(":medicijnID", $medicijnID);
            $query->bindParam(":medicijnNaam", $medicijnNaam);
            $query->bindParam(":medicijnWerking",$medicijnWerking);
            $query->bindParam(":medicijnBijwerking", $medicijnBijwerking);

            $result = $query->execute();
            return $result;
        }
        return -1;
        // id hoeft niet te worden toegevoegd omdat de id in de databse op autoincrement staat.


    }
    public function updateMedicijn($medicijnID,$medicijnNaam,$medicijnWerking,$medicijnBijwerking){
        $this->makeConnection();

        // id moet worden toegevoegd omdat de id in de databse wordt gezocht
        $query = $this->database->prepare (
            "UPDATE `medicijnen` SET `medicijnNaam` = :medicijnNaam, `medicijnWerking`=:medicijnWerking, `medicijnBijwerking` = :medicijnBijwerking
            WHERE `medicijnen`.`medicijnID` = :medicijnID ");
        $query->bindParam(":medicijnID", $medicijnID);
        $query->bindParam(":medicijnNaam", $medicijnNaam);
        $query->bindParam(":medicijnWerking",$medicijnWerking);
        $query->bindParam(":medicijnBijwerking", $medicijnBijwerking);
        $result = $query->execute();
        return $result;
    }

    public function getMedicijnen(){

        $this->makeConnection();
        $selection = $this->database->query('SELECT * FROM `medicijnen`');
        if($selection){
            $result=$selection->fetchAll(\PDO::FETCH_CLASS,\model\Medicijn::class);
            return $result;
        }
        return null;
    }
    public function selectMedicijn($medicijnID){

        $this->makeConnection();
        $selection = $this->database->prepare(
            'SELECT * FROM `medicijnen` 
            WHERE `medicijnen`.`medicijnID` =:medicijnID');
        $selection->bindParam(":medicijnID",$medicijnID);
        $result = $selection ->execute();
        if($result){
            $selection->setFetchMode(\PDO::FETCH_CLASS, \model\Medicijn::class);
            $medicijn = $selection->fetch();
            return $medicijn;
        }
        return null;
    }
    public function deleteMedicijn($medicijnID){
        $this->makeConnection();
        $selection = $this->database->prepare(
            'DELETE FROM `medicijnen` 
            WHERE `medicijnen`.`medicijnID` =:medicijnID');
        $selection->bindParam(":medicijnID",$medicijnID);
        $result = $selection ->execute();
        return $result;
    }
    //----------------------------------------------------------

    //----------------------------------------------------------
    // recept
    public function insertRecept($receptID,$patientID,$medicijnID,$medicijnDosis,$medicijnDuur,$receptHerhalingen,$receptUitgeschreven,$receptOpgehaald, $artsID){
        $this->makeConnection();
        if($receptID !='')
        {
            $query = $this->database->prepare (
                "INSERT INTO `recepten` (`receptID`, `patientID`, `medicijnID`, `medicijnDosis`, `medicijnDuur`, `receptHerhalingen`, `receptUitgeschreven`
                                        `receptOpgehaald`, `artsID`) 
                VALUES (NULL, :receptID, :patientID, :medicijnID, :medicijnDosis, :medicijnDuur, :receptHerhalingen, :receptUitgeschreven, :receptOpgehaald, :artsID");
            $query->bindParam(":receptID", $receptID);
            $query->bindParam(":patientID", $patientID);
            $query->bindParam(":medicijnID", $medicijnID);
            $query->bindParam(":medicijnDosis", $medicijnDosis);
            $query->bindParam(":medicijnDuur",$medicijnDuur);
            $query->bindParam(":receptHerhalingen", $receptHerhalingen);
            $query->bindParam(":receptUitgeschreven", $receptUitgeschreven);
            $query->bindParam(":receptOpgehaald", $receptOpgehaald);
            $query->bindParam(":artsID", $artsID);

            $result = $query->execute();
            return $result;
        }
        return -1;
        // id hoeft niet te worden toegevoegd omdat de id in de databse op autoincrement staat.


    }
    public function updateRecept($receptID,$patientID,$medicijnID,$medicijnDosis,$medicijnDuur,$receptHerhalingen,$receptUitgeschreven,$receptOpgehaald, $artsID){
        $this->makeConnection();

        // id moet worden toegevoegd omdat de id in de databse wordt gezocht
        $query->bindParam(":receptID", $receptID);
        $query->bindParam(":patientID", $patientID);
        $query->bindParam(":medicijnID", $medicijnID);
        $query->bindParam(":medicijnDosis", $medicijnDosis);
        $query->bindParam(":medicijnDuur",$medicijnDuur);
        $query->bindParam(":receptHerhalingen", $receptHerhalingen);
        $query->bindParam(":receptUitgeschreven", $receptUitgeschreven);
        $query->bindParam(":receptOpgehaald", $receptOpgehaald);
        $query->bindParam(":artsID", $artsID);
        $result = $query->execute();
        return $result;
    }

    public function getRecepten(){

        $this->makeConnection();
        $selection = $this->database->query('SELECT * FROM `recepten`');
        if($selection){
            $result=$selection->fetchAll(\PDO::FETCH_CLASS,\model\Recept::class);
            return $result;
        }
        return null;
    }
    public function selectRecept($receptID){

        $this->makeConnection();
        $selection = $this->database->prepare(
            'SELECT * FROM `recepten` 
            WHERE `recepten`.`receptID` =:receptID');
        $selection->bindParam(":receptID",$receptID);
        $result = $selection ->execute();
        if($result){
            $selection->setFetchMode(\PDO::FETCH_CLASS, \model\Recept::class);
            $recept = $selection->fetch();
            return $recept;
        }
        return null;
    }
    public function deleteRecept($receptID){
        $this->makeConnection();
        $selection = $this->database->prepare(
            'DELETE FROM `recepten` 
            WHERE `recepten`.`receptID` =:receptID');
        $selection->bindParam(":receptID",$receptID);
        $result = $selection ->execute();
        return $result;
    }
    //----------------------------------------------------------
}