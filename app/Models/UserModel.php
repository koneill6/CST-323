<?php

/*
 * ---------------------------------------------------------------
 * Name      : Group Assignment
 * Date      : 2022-04-09
 * Class     : CST-323 Cloud Computing
 * Professor : Bradley Mauger PhD
 * Assignment: Milestone
 * Disclaimer: This is my own work
 * ---------------------------------------------------------------
 * Description:
 * 1. Model to hold user information
 * 2. Member Profile
 * 3.
 * ---------------------------------------------------------------
 * Revision History:
 * Name            Date       Description
 * --------------- ---------- ------------------------------------
 * Kelly           2022-04-09 Initial Creation
 *
 *
 * ---------------------------------------------------------------
 */

namespace App\Models;

class UserModel
{
    private $id;
    private $firstName;
    private $lastName;
    private $userName;
    private $email;
    private $password;
    private $roleId;
    
    public function __construct($id, $firstName, $lastName, $userName, $email, $mobile, $password, $roleId)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userName = $userName;
        $this->email = $email;
        $this->mobile = $mobile;
        $this->password = $password;
        $this->roleId = $roleId;
    }
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    
    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }
    
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * @return mixed
     */
    public function getRoleId()
    {
        return $this->roleId;
    }
    
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    
    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    
    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }
    
    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    /**
     * @param mixed $roleId
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;
    }
}

?>
