<?php
include_once '../conexao.php';
include_once 'dados_noticia.php';

class Noticia extends Conectar {

    function AdicionarNoticia(DadosNoticia $dados) {
        try {
            $connection = $this->Conecta();
            $connection->beginTransaction();
            $sql = "INSERT INTO noticias (titulo_da_noticia,foto,data,texto) VALUES (:titulo_da_noticia, :foto, :data, :texto)";
            $preparedStatment = $connection->prepare($sql);
            $preparedStatment->bindValue(':titulo_da_noticia', $dados->getTitulo_da_noticia());
            $preparedStatment->bindValue(':foto', $dados->getFoto());
            $preparedStatment->bindValue(':data', $dados->getData());
            $preparedStatment->bindValue(':texto', $dados->getTexto());

            $executionResult = $preparedStatment->execute();
            print_r($executionResult);
           
            if ($executionResult == TRUE) {
                $connection->commit();
                return TRUE;
            } /*else {
                throw new PDOException($executionResult);
            }*/
        } catch (Exception $exc) {
            if ((isset($connection)) && ($connection->inTransaction())) {
                $connection->rollBack();
            }
            PRINT($exc->getMessage());
            return FALSE;
        } finally {
            if (isset($connection)) {
                unset($connection);
            }
        }
    }

    function listar() {

        try {
            $conexao = $this->Conecta();
            $conexao->beginTransaction();
            $sql = "SELECT * FROM noticias order by titulo_da_noticia";
            $listar = $conexao->prepare($sql);
            $listar->execute();
            return $listar->fetchAll();
        } catch (PDOException $exc) {
            if ((isset($conexao)) && ($conexao->inTransaction())) {
                $conexao->rollBack();
            }
            print($exc->getMessage());
            return array();
        } finally {
            if (isset($conexao)) {
                unset($conexao);
            }
        }
    }

}

