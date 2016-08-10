<?php

namespace estoque\Http\Controllers;

use DB;

class ProdutoController extends Controller
{

    public function lista()
    {
        $html = "<h1>Listagem de Produtos</h1>";
        $html .= "<ul>";
        $produtos = DB::select('select * from produtos');
        
        foreach ($produtos as $p) {
            $html .= "<li>Nome: ".$p->nome.", Descrição: ".$p->descricao."</li>";
        }

        $html .= "</ul>";

        return $html;
    }

}