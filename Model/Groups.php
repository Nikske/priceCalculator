<?php
declare(strict_types=1);

class Groups
{

    private $id;
    private $name;
    private $variable_discount;
    private $fixed_discount;
    private $group_id;

    public function __construct(int $id, string $name, int $variable_discount, int $fixed_discount, int $group_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->variable_discount = $variable_discount;
        $this->fixed_discount = $fixed_discount;
        $this->group_id = $group_id;
    }

    public function getGroupName() : string
    {
        return $this->name;
    }

    public function getGroupId() : int
    {
        return $this -> id;
    }

    public function getGroupGroupId() : int {
        return  $this -> group_id;
    }

    public function getFixedDiscount(): int
    {
        return $this->fixed_discount;
    }

    public function getVariableDiscount(): int
    {
        return $this->variable_discount;
    }


}