<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    //cek folder resources/view/
    public function index()
    {
        // blm menggunakan database
        // hanya latihan menggunakan data sementara
        $models = [
            (object) ['id'=>1,'foo'=>'Foo1','bar'=>'123'],
            (object) ['id'=>2,'foo'=>'Foo2','bar'=>'456']
        ];

        // menampilkan index.blade.php
        return view('models.index',['models'=>$models]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return string
     */
    public function create()
    {
        //menampilkan create.blade.php

        return view('models.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'bar'=>'numeric'
        ]);

        return redirect('models')->with('status','Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return string
     */
    public function show($id)
    {
        $model = (object) ['id' => $id, 'foo' => 'Foo1', 'bar' => '123'];
        return view('models.show', ['model'=>$model]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return string
     */
    public function edit($id)
    {
        //
        $model = (object) ['id'=>$id,'foo'=>'Foo1','bar'=>'123'];
        return view('models.edit',['model'=>$model]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return string
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'bar'=>'numeric'
        ]);
        return redirect('models/'.$id)->with('status','Model '.$id.' berhasil disimpan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return string
     */
    public function destroy($id)
    {
        //
        return 'destroy, hapus model dengan primary key '.$id.' dari database';
    }
}
