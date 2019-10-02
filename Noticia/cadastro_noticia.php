<!DOCTYPE html>
<html>
    <head> <title>Cadastro de Noticias</title>
        <meta charset="UTF-8"/>
        
    </head>
    <body>
    <center> 
            <h1>Cadastro de Noticias</h1>
            <form action="" method="POST">
                Titulo da Noticia: <input type="text" name="titulo_da_noticia"> <br>
                Data:<input type="date" name="data"><br>
                Foto:<input type="text" name="foto"><br>
                Texto: <input type="text" name="texto"><br>
                <br>
                <input type="submit" name="cadastrar" value="cadastrar">
            </form>
    </center>
    </body>
</html>
<?php
    include_once 'dados_noticia.php';
    include_once 'inserir.php';
	
	if(isset($_POST['cadastrar'])){
            
	$noticia = new DadosNoticia();
	$noticia -> setTitulo_da_noticia ($_POST['titulo_da_noticia']);
	$noticia -> setData ($_POST['data']);
	$noticia -> setFoto ($_POST['foto']);
	$noticia -> setTexto ($_POST['texto']);
	
        $objNoticia = new Noticia();
        if ($objNoticia == true) {
            
                $objNoticia->AdicionarNoticia($noticia);
                echo 'Cadastrado!';
        }else{
            echo 'Não cadastrada!';
             }
        }
	
 ?>