<?php


class product
{
    protected $id;
    protected $name;
    protected $category;
    protected $amout;
    protected $price;
    protected $description;
    protected $created;
    protected $img;

    /**
     * product constructor.
     * @param $id
     * @param $name
     * @param $category
     * @param $amout
     * @param $price
     * @param $description
     * @param $created
     * @param $img
     */
    public function __construct($id, $name, $category, $amout, $price, $description, $created, $img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->amout = $amout;
        $this->price = $price;
        $this->description = $description;
        $this->created = $created;
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getAmout()
    {
        return $this->amout;
    }

    /**
     * @param mixed $amout
     */
    public function setAmout($amout)
    {
        $this->amout = $amout;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

}