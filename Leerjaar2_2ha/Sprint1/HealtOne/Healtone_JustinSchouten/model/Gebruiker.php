<?php


class Gebruiker
{
    private $fullname;
    private $usname;
    private $email;
    private $age;
    private $dob;
    private $gender;
    private $designation;
    private $soortarts;
    private $bio;
//    private $password;
//    private $passwordConfirm;

    /**
     * @return mixed
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     */
    public function setFullname($fullname): void
    {
        $this->fullname = $fullname;
    }

    /**
     * @return mixed
     */
    public function getUsname()
    {
        return $this->usname;
    }

    /**
     * @param mixed $usname
     */
    public function setUsname($usname): void
    {
        $this->usname = $usname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param mixed $dob
     */
    public function setDob($dob): void
    {
        $this->dob = $dob;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation): void
    {
        $this->designation = $designation;
    }

    /**
     * @return mixed
     */
    public function getSoortarts()
    {
        return $this->soortarts;
    }

    /**
     * @param mixed $soortarts
     */
    public function setSoortarts($soortarts): void
    {
        $this->soortarts = $soortarts;
    }

    /**
     * @return mixed
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @param mixed $bio
     */
    public function setBio($bio): void
    {
        $this->bio = $bio;
    }

//    /**
//     * @return mixed
//     */
//    public function getPassword()
//    {
//        return $this->password;
//    }
//
//    /**
//     * @param mixed $password
//     */
//    public function setPassword($password): void
//    {
//        $this->password = $password;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getPasswordConfirm()
//    {
//        return $this->passwordConfirm;
//    }
//
//    /**
//     * @param mixed $passwordConfirm
//     */
//    public function setPasswordConfirm($passwordConfirm): void
//    {
//        $this->passwordConfirm = $passwordConfirm;
//    }

}