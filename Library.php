<?php

class Library
{
    const MAX_BOOKS = 500;

    private $name;
    private $adress;
    private $max;

    private $books = array();

    /**
     * Library constructor.
     * @param $name
     * @param $adress
     * @param $max
     */
    public function __construct($name, $adress, $max)
    {
        $this->name = $name;
        $this->adress = $adress;

        if ($max > self::MAX_BOOKS)
        {
            echo 'Hola malheureux, c\'est trop grand comme tableau ça !';
            $this->max = self::MAX_BOOKS;
        }
        else
            $this->max = $max;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param mixed $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * @return mixed
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param mixed $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * @return array
     */
    public function getBooks()
    {
        return $this->books;
    }

    /**
     * @param array $books
     */
    public function setBooks($books)
    {
        $this->books = $books;
    }

    public function afficherLivres ()
    {
        foreach ($this->books as $value)
            $value->afficher();
    }

    public function ajouterLivre (Book $book)
    {
        $this->books[] = $book;
    }

    public function retirerLivre (Book $book)
    {
        $k = 0;
        foreach ($this->books as $value)
        {
            if ($value->equals($book)) {
                unset($books, $k);
                break;
            }
            $k += 1;
        }
    }

    public function eliminerDoublons ()
    {
        $this->books = array_unique($this->books);
    }

    public function doubleAfficher (Library $library)
    {
        $this->afficherLivres();
        $library->afficherLivres();
    }

    public function triParAuteurs ()
    {
        
    }
}

?>