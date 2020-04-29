<?php

namespace Models\Articles;

// use Services\Db;
use Models\Users\User;
use Models\ActiveRecordEntity;

class Article extends ActiveRecordEntity
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $text;

    /** @var string */
    protected $authorId;

    /** @var string */
    protected $createdAt;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    public function setName(string $name) 
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text) 
    {
        $this->text = $text;
    }

    protected static function getTableName(): string
    {
        return 'articles';
    }

     /**
     * @return int
     */
    public function getAuthorId(): int
    {
        return (int) $this->authorId;
    }

    public function setAuthor(User $author): void
{
    $this->authorId = $author->getId();
}

    /**
     * @return User
     */
    public function getAuthor(): User
    {
        return User::getById($this->authorId);
    }
}