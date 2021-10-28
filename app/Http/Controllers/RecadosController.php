<?php

namespace App\Http\Controllers;

use App\Models\Recado;
use Illuminate\Http\Request;

class RecadosController extends Controller
{
    public function index()
    {
        $reca = Recado::orderBy('id', 'asc')->get();

        return view('recados.index', ['recados' => $reca, 'pagina' => 'recados']);
    }
    // Função usada para criar os recados
    public function create()
    {
        return view('recados.create', ['pagina' => 'recados']);
    }
    // Função salvar para os recados criados
    public function insert(Request $form)
    {
        $reca = new Recado();

        $reca->nome = $form->nome;
        $reca->comentario = $form->comentario;

        $reca->save();

        return redirect()->route('recados');
    }
    // Função para editar os recados já criados
    public function edit(Recado $reca)
    {
        return view('recados.edit', ['reca' => $reca, 'pagina' => 'recados']);
    }
    // Função para salvar o recado editado, retorna para a rota recados
    public function update(Request $form, Recado $reca)
    {
        $reca->nome = $form->nome;
        $reca->comentario = $form->comentario;

        $reca->save();

        return redirect()->route('recados');
    }
    // Função para remover o recado já criado
    public function remove(Recado $reca)
    {
        return view('recados.remove', ['reca' => $reca, 'pagina' => 'recados']);
    }
    // Deleta e redireciona para a rota recados
    public function delete(Recado $reca)
    {
        $reca->delete();

        return redirect()->route('recados');
    }

}
