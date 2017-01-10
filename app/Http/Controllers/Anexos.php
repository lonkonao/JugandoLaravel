<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\anexo;

class Anexos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anexos = Anexo::all();
        return view('menu.Anexos')->with(['anexos'=>$anexos ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  dd($request->funcionario);

$this->validate($request,[
    'funcionario' => 'required',
    'estamento' => 'required',
    'box' => 'required',
    'sector' => 'required',
    'anexo' => 'required'
]);

$an = new Anexo();
        $an->funcionario = $request->funcionario;
        $an->estamento = $request->estamento;
        $an->box = $request->box;
        $an->sector = $request->sector;
        $an->anexo = $request->anexo;

        if ($an->save()){
            return back()->with('msj','Datos Guardados');
        }else{
            return back()->with('errormsj','Los datos no se guardaron');
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anexo = Anexo::find($id);

        return view('form.editarAnexo')->with(['edit' =>true, 'anexo'=>$anexo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $this->validate($request,[
            'funcionario' => 'required',
            'estamento' => 'required',
            'box' => 'required',
            'sector' => 'required',
            'anexo' => 'required'
        ]);

        $an = Anexo::find($id);
        $an->funcionario = $request->funcionario;
        $an->estamento = $request->estamento;
        $an->box = $request->box;
        $an->sector = $request->sector;
        $an->anexo = $request->anexo;

        if ($an->save()){
          //  return back()->with('msj','Datos Guardados');

            return redirect('Anexos')->with('msj','Editado Correctamente');
        }else{
            return back()->with('errormsj','Los datos no se guardaron');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
