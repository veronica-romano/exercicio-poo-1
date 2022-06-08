<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - POO</title>
</head>
<body>
    <h1>Exercício 1</h1>
    
    <h2>
        implementar a Classe Livro no PHP, importar a classe e criar pelo menos um objeto, mostrar os dados.
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


    <main>
            <h2>Saída de dados</h2>
            <article>
            <h3><?=$livro1->getTitulo()?></h3>
            <p><?=$livro1->getAutor()?></p>
            <p><p><?=$livro1->getPaginas()?></p></p>
            </article>

            <article>
            <h3><?=$livro2->getTitulo()?></h3>
            <p><?=$livro2->getAutor()?></p>
            <p><p><?=$livro2->getPaginas()?></p></p>
            </article>
            
            <article>
            <h3><?=$livro3->getTitulo()?></h3>
            <p><?=$livro3->getAutor()?></p>
            <p><p><?=$livro3->getPaginas()?></p></p>
            </article>
    </main>
    
</body>
</html>