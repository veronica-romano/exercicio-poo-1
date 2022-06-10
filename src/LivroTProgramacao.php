<?php
require_once "LivroTecnico.php";

class LivroTProgramacao extends LivroTecnico{
    private string $area;

    public function getArea(): string
    {
        return $this->area;
    }
    public function setArea(string $area)
    {
        $this->area = $area;

        return $this;
    }
}

?>