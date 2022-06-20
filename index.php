<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Desafio - POO</title>
</head>
<body>
    <h1 class="text-center mt-4">Desafio 1</h1>
    
    <h2 class="text-center mt-4">
        Pesquisar e implementar Namespaces, Composer e Autoload de classes.
    </h2>

    <hr>

    <?php
        //require_once "src/LivroTecnico.php";
        require "vendor/autoload.php";
   

        $livro1 = new Desafio\LivroTecnico;
        $livro2 = new Desafio\LivroTDidatico;
        $livro3 = new Desafio\LivroTProgramacao;
        $livro4 = new Desafio\LivroTPWeb;

        $livro1->setTitulo('A origem das espécies');
        $livro1->setFormato(['fisico']);
        $livro1->setAutor(' Charles Darwin');
        $livro1->setPaginas(574);
    
      

        $livro2->setTitulo("Teoria Pura do Direito");
        $livro2->setFormato(['físico', 'digital']);
        $livro2->setAutor("Hans Kelsen");
        $livro2->setDisciplina('Direito');
        $livro2->setNivel(['superior']);
        $livro2->setPaginas(250);
        

        $livro3->setTitulo("Codificação para Leigos");
        $livro3->setFormato(['digital']);
        $livro3->setAutor("Nikhil Abraham");
        $livro3->setArea('full stack');
        $livro3->setPaginas(272);

        $livro4->setTitulo("Codificação FullStack");
        $livro4->setFormato(['digital']);
        $livro4->setAutor("Veronica");
        $livro4->setArea('web');
        $livro4->setPaginas(800);


        

    ?>


    <main class="container col mt-5">
            <h2 class="text-center">Saída de dados</h2>

            <div class="container-flex row align-items-center text-center mt-4">  

                <div class="col">
                    <h3><?=$livro1->formataTitulo()?></h3>
                    <p>Formato: <?=$livro1->getFormato()?></p>
                    <p>Autor: <?=$livro1->getAutor()?></p>
                    <p><?=$livro1->getPaginas()?> páginas</p>
                </div>

                <div class="col">
                    <h3><?=$livro2->formataTitulo()?></h3>
                    <p>Formato: <?=$livro2->getFormato()?></p>
                    <p>Autor: <?=$livro2->getAutor()?></p>
                    <p>Disciplina: <?=$livro2->getDisciplina()?></p>
                    <p>Nível: <?=$livro2->getNivel()?></p>
                    <p><?=$livro2->getPaginas()?> páginas</p>
                </div>

                <div class="col">
                    <h3><?=$livro3->formataTitulo()?></h3>
                    <p>Formato: <?=$livro3->getFormato()?></p>
                    <p>Autor: <?=$livro3->getAutor()?></p>
                    <p>Área: <?=$livro3->getArea()?></p>
                    <p><?=$livro3->getPaginas()?> páginas</p>
                </div>

            </div>
    </main>
    
</body>
</html>