<?php
require 'character.php';

class Hero extends Character
{
    public $stage = 1;
    public function addAttribute($attribute)
    {
        if ($attribute == 1) {
            $this->physical_attack++;
            echo "增加物理攻擊";
        } elseif ($attribute == 2) {
            $this->magic_attack++;
            echo "增加魔法攻擊";
        } elseif ($attribute == 3) {
            $this->physical_defense++;
            echo "增加物理防禦";
        } elseif ($attribute == 4) {
            $this->magic_defense++;
            echo "增加魔法防禦";
        } elseif ($attribute == 5) {
            $this->luck++;
            echo "增加幸運";
        } else {
            echo "請輸入有效數字";
        }
    }

    //不在規劃內，後來發現使用繼續，從資料庫拿到英雄資訊，需要重新創立該角色到php內
    public function setAttribute($attributeArr)
    {
        $this->hp = $attributeArr["HP"];
        $this->mp = $attributeArr["MP"];
        $this->physical_attack = $attributeArr["Physical_Attack"];
        $this->magic_attack = $attributeArr["Magic_Attack"];
        $this->physical_defense = $attributeArr["Physical_Defense"];
        $this->physical_defense = $attributeArr["Magic_Defense"];
        $this->luck = $attributeArr["Luck"];
        $this->level = $attributeArr["Level"];
        $this->experience = $attributeArr["Experience"];
        $this->skillLibrary = $attributeArr["Skill"];
        $this->stage = $attributeArr["Stage"];
    }
}

class Warrior extends Hero
{
    public $hp = 20;
    public $physical_attack = 5;
}
class Mage extends Hero
{
    public $magic_attack = 5;
}

?>