<?php
//keyword final dung truoc class co y nghia khong cho bat ky class nao dc phep ke thua no
final class Person
{
    private $id;
    private $name = "teo";

    public function __construct()
    {
        echo "class ----" . __CLASS__;
    }
    protected function getId()
    {
        return $this->id;
    }
    //co tu khoa final cho phuong thuc, dieu nay co nghia khong cho phep cac class ke thua no override
    protected function getName()
    {
        return $this->name;
    }
}
