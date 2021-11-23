<?php 

declare(strict_types=1);

namespace App\Models;

use DateTime;

class Student{
    public function __construct(
        private string $name, 
        private int $class, 
        private string $letter,
        private DateTime $dateOfBirth,
    )
    {
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getClass() : int
    {
        return $this->class;
    }

    public function getLetter() : string
    {
        return $this->letter;
    }

    public function getDateOfBirth() : DateTime
    {
        return $this->dateOfBirth;
    }
}