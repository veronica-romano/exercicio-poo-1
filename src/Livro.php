<?php
class Livro{
    private string $titulo;
    private string $autor;
    private int $paginas = 0;
  
    public function getTitulo():string{
        return $this->titulo;
    }
    //                             parâmetro  
    public function setTitulo(string $titulo){
        $this->titulo = $titulo;
        
    }

    public function getAutor():string{
        return $this->autor;
    }
    public function setAutor(string $autor){
        $this->autor = $autor;
    }

    public function getPaginas():int{
        return $this->paginas;
    }
    public function setPaginas(int $paginas){
        $this->paginas = $paginas;
    }

    public function formataTitulo(){
        echo "<b>". mb_strtoupper($this->getTitulo())."</b>";       

    }
}

?>