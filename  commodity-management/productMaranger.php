<?php


class productMaranger
{
private $product =[];
public function __construct(){

}

    /**
     * @return array
     */
    public function getProduct()
    {
        return $this->product;
    }
public function add($product){
    array_push($this->product,$product);
}
public  function read($index){
    return $this->product[$index];
}
public  function update($index,$product){
     $this->product[$index]=$product;
}
public  function delete($index){
     array_slice($this->product,$index, 1);
}


}