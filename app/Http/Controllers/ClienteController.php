<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use Session;
use Redirect;

class ClienteController extends Controller
{

    private $pegaemail;



    public function index()
    {   
        $listar = \App\Models\ClienteModel::all();
        $dados = [
        'titulo' => 'Página todos clientes',
        'listar' => $listar
        ];
        return view('paginas.clientes',$dados);
    }

    public function create()
    {
        $dados = ['titulo' => 'Pagina cadastrar cliente'];
        return view('paginas.cadastrar',$dados);
    }


    public function getEmail(){

        return $this->pegaemail;

    }

   


    
    public function store(Request $request)
    {

        $request = $request->input('email');
        dd($request->getEmail());

        //$dados = $request->all();
        $dados = [

        'tb_nome'               => $request->input('nome'),
        'tb_email'              => $request->input('email'),
        'tb_data_nascimento'    => $request->input('dataNasc'),
        'tb_rg'                 => $request->input('rg'),
        'tb_cpf'                => $request->input('cpf'),
        'tb_pais'               => $request->input('pais'),
        'tb_estado'             => $request->input('estado'),
        'tb_cidade'             => $request->input('cidade'),
        'tb_bairro'             => $request->input('bairro'),
        'tb_endereco'           => $request->input('logradouro'),
        ];

        $cadastrar = new \App\Models\ClienteModel;
        $cadastrar->create($dados);

        if($cadastrar){
         $mail = [
             'nome'               => $request->input('nome'),
             'email'              => $request->input('email'),
             'data_nascimento'    => $request->input('dataNasc'),
             'rg'                 => $request->input('rg'),
             'cpf'                => $request->input('cpf'),
             'pais'               => $request->input('pais'),
             'estado'             => $request->input('estado'),
             'cidade'             => $request->input('cidade'),
             'bairro'             => $request->input('bairro'),
             'endereco'           => $request->input('logradouro'),
         ];

         
        
        // dd($request->input('email'));
         Mail::send('emails.contact', $mail, function($msg){

            

            $email = $request->input('email');
            $msg->$email;
            $msg->subject('Email de cadastro');
            $msg->to(getEmail($request->input('email')));
        });

         Session::flash('message','Mensagem de criação de cadastro MedCenter');

         return redirect('clientes')->with(['mensagem' => 'Cadastrado com sucesso!']);
     }else{
        return redirect('/');
    }

}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $listar = \App\Models\ClienteModel::find($id);
        $dados = [
        'titulo' => 'Página listar cliente.',
        'cliente' => $listar
        ];
        return view('paginas.listar',$dados);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $listar = \App\Models\ClienteModel::find($id);
        $dados = [
        'titulo' => 'Página editar cliente.',
        'cliente' => $listar
        ];
        return view('paginas.editar',$dados);
    }


    public function update(Request $request, $id)
    {

        $dados = [

        'tb_nome'               => $request->input('nome'),
        'tb_email'              => $request->input('email'),
        'tb_data_nascimento'    => $request->input('dataNasc'),
        'tb_rg'                 => $request->input('rg'),
        'tb_cpf'                => $request->input('cpf'),
        'tb_pais'               => $request->input('pais'),
        'tb_estado'             => $request->input('estado'),
        'tb_cidade'             => $request->input('cidade'),
        'tb_bairro'             => $request->input('bairro'),
        'tb_endereco'           => $request->input('logradouro'),
        ];

        $atualizar =  \App\Models\ClienteModel::where('id',$id)->update($dados);
        if($atualizar){
            return redirect('clientes')->with(['mensagem' => 'Atualizado com sucesso!']);
        }else{
            return redirect('/');
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $deletar = \App\Models\ClienteModel::find($id)->delete();
        return redirect('clientes');

    }
}
