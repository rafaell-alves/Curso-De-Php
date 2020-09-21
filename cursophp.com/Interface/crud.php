<?php

interface Crud{
    public function create($data);
    public function read();
    public function update();
    public function delete();
}

class Noticias implements Crud{
    public function create($data){
        //Logica para criação de noticia
        echo "Criado";
    }
    public function read()
    {
        //Logica para ler uma noticia
        echo "Ler";
    }
    public function update()
    {
        //Logica para atualizar a noticia
        echo "Atualizado";
    }
    public function delete()
    {
        //Logica para deletar uma noticia
        echo "Deletado";
    }
}