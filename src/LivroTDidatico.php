<?php 
namespace Desafio;
require_once "LivroTecnico.php";

class LivroTDidatico extends LivroTecnico{
    private string $disciplina;
    private array $nivel = ['basico', 'medio', 'superior'];

    public function getDisciplina(): string
    {
        return $this->disciplina;
    }
    public function setDisciplina(string $disciplina)
    {
        $this->disciplina = $disciplina;

        return $this;
    }

    public function getNivel(): string
    {
        return implode('', $this->nivel);
    }
    public function setNivel(array $nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }
}

?>