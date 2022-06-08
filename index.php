<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Exercício 1 - POO</title>
</head>
<body>
    <h1 class="text-center mt-4">Exercício 1</h1>
    
    <h2 class="text-center mt-4">
        Implementar a Classe, importar a classe, criar objetos e mostrar os dados.
    </h2>

    <hr>

    <?php
        require_once "src/Livro.php";

        $livro1 = new Livro;
        $livro2 = new Livro;
        $livro3 = new Livro;

        $livro1->setTitulo("Capitães da Areia");
        $livro1->setAutor("Jorge Amado");
        $livro1->setPaginas(342);

        $livro2->setTitulo("Vidas Secas");
        $livro2->setAutor("Graciliano Ramos");
        $livro2->setPaginas(164);

        $livro3->setTitulo("O cortiço");
        $livro3->setAutor("Aluízio Azevedo");
        $livro3->setPaginas(354);

    ?>


    <main class="container col mt-5">
            <h2 class="text-center">Saída de dados</h2>

            <div class="container-flex row align-items-center text-center mt-4">  

                <div class="col">
                    <h3><?=$livro1->getTitulo()?></h3>
                    <p>Autor: <?=$livro1->getAutor()?></p>
                    <p><?=$livro1->getPaginas()?> páginas</p>
                </div>

                <div class="col">
                    <h3><?=$livro2->getTitulo()?></h3>
                    <p>Autor: <?=$livro2->getAutor()?></p>
                    <p><?=$livro2->getPaginas()?> páginas</p>
                </div>

                <div class="col">
                    <h3><?=$livro3->getTitulo()?></h3>
                    <p>Autor: <?=$livro3->getAutor()?></p>
                    <p><?=$livro3->getPaginas()?> páginas</p>
                </div>

            </div>
    </main>
    
</body>
</html>