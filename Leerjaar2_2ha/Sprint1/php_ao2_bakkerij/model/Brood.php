<?php


namespace model;

use model\Voertuig;
include_once("model/Voertuig.php");

class Brood extends Voertuig
{
    private $samenstelling;



    public function __construct($id, $naam, $prijs, $samenstelling)
    {
        parent::__construct($id,$naam,$prijs);

        $this->samenstelling = $samenstelling;
    }

    /**
     * @return mixed
     */
    public function getSamenstelling()
    {
        return $this->samenstelling;
    }

    /**
     * @param mixed $samenstelling
     */
    public function setSamenstelling($samenstelling): void
    {
        $this->samenstelling = $samenstelling;
    }



}