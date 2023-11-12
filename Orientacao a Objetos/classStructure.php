<h1>Classes</h1>

<?php


abstract class Person
{

    public $name;
    public $age;
    static $counter = 0;
    protected $documentId;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;

        self::$counter++;
    }

    static function getCounter()
    {
        return self::$counter;
    }
}


class User extends Person
{

    function __construct($name, $age, $documentId)
    {
        $this->documentId = $documentId;
        parent::__construct($name, $age);
    }

    public function getDocumentId()
    {
        return $this->documentId;
    }

    function saySmth()
    {
        echo "Hello, I'm a user! My name is " . $this->name . " and I'm " . $this->age . " years old.";
    }

    static function getCounter()
    {
        return parent::getCounter();
    }
}


class Programmer
{

    // props and methods

}