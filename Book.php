<?php

class Book
{
    private $title;
    private $author;
    private $editor;
    private $pageNb;

    public function __construct($title, $author, $editor, $pageNb)
    {
        $this->title = $title;
        $this->author = $author;
        $this->editor = $editor;
        $this->pageNb = $pageNb;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * @param mixed $editor
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;
    }

    /**
     * @return mixed
     */
    public function getPageNb()
    {
        return $this->pageNb;
    }

    /**
     * @param mixed $pageNb
     */
    public function setPageNb($pageNb)
    {
        $this->pageNb = $pageNb;
    }

    public function afficher()
    {
        echo 'Livre : ' . $this->title . ' de l\'auteur ' . $this->author . ' et de l\'éditeur ' . $this->editor . ', avec ' . $this->pageNb . ' pages.';
    }

    public function equals (Book $book)
    {
        return ($this->author == $book->getAuthor() && $this->title == $book->getTitle() && $this->editor == $book->getEditor() && $this->pageNb == $book->getPageNb());
    }
}

?>