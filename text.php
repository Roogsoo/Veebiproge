<?php
/**
 * Created by PhpStorm.
 * User: roogsoo.kristjan
 * Date: 6.03.2018
 * Time: 10:59
 */
class text
{
    private $str = '';
    /**
     * text constructor.
     */
    public function __construct($str)
    {
        $this->setStr($str);
    }
    /**
     * @param string $str
     */
    public function setStr($str)
    {
        $this->str = $str;
    }
    /**
     * @return string
     */
    public function getStr()
    {
        return $this->str;
    }
    /**
     * showText method
     */
    public function showText(){
        echo $this->getStr();
    }
}