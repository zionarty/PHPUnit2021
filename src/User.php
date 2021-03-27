<?php

/**
 * User
 *
 * A user of the system
 */
class User
{

    /**
     * First name
     * @var string
     */
    public $first_name;

    /**
     * Last name
     * @var string
     */
    public $surname;

    /**
     * Email address
     * @var string
     */

    public $email;

    /**
     * Mailler object
     * @var Mailler
     */
    protected $mailler;

    /**
     * Set the mailler dependency
     * 
     * @param Mailler $mailler The Mailler object
     */
    public function setMailler(Mailler $mailler)
    {
        $this->mailler = $mailler;
    }

    /**
     * Get the user's full name from their first name and surname
     *
     * @return string The user's full name
     */
    public function getFullName()
    {
        return trim("$this->first_name $this->surname");
    }
    public function notify($message)
    {
        //$mailler = new Mailler;

        return $this->mailler->sendMessage($this->email, $message);

       //return true;
    }
}
