<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;


class MahasiswaController extends Controller
{
    public function index(){
        return view('home-mahasiswa');
    }
}



// {
//     private $data = array();

//     public function index(){
//         array_push($this->data, new Mahasiswa('18090121','alvin anugrah arrafi','DIV Teknik Informatika'));
//         return view('home-mahasiswa',[
//             'data' => $this->data]);
//         }
//             }
// //     public function index()
// //     {
// //         $datas = Mahasiswa::all();
// //         return view('mahasiswa.index' compact('datas'));
// //     }

// //     /**
// //      * Show the form for creating a new resource.
// //      *
// //      * @return \Illuminate\Http\Response
// //      */
// //     public function create()
// //     {
// //         //
// //     }

// //     /**
// //      * Store a newly created resource in storage.
// //      *
// //      * @param  \Illuminate\Http\Request  $request
// //      * @return \Illuminate\Http\Response
// //      */
// //     public function store(Request $request)
// //     {
// //         //
// //     }

// //     /**
// //      * Display the specified resource.
// //      *
// //      * @param  int  $id
// //      * @return \Illuminate\Http\Response
// //      */
// //     public function show($id)
// //     {
// //         //
// //     }

// //     /**
// //      * Show the form for editing the specified resource.
// //      *
// //      * @param  int  $id
// //      * @return \Illuminate\Http\Response
// //      */
// //     public function edit($id)
// //     {
// //         //
// //     }

// //     /**
// //      * Update the specified resource in storage.
// //      *
// //      * @param  \Illuminate\Http\Request  $request
// //      * @param  int  $id
// //      * @return \Illuminate\Http\Response
// //      */
// //     public function update(Request $request, $id)
// //     {
// //         //
// //     }

// //     /**
// //      * Remove the specified resource from storage.
// //      *
// //      * @param  int  $id
// //      * @return \Illuminate\Http\Response
// //      */
// //     public function destroy($id)
// //     {
// //         //
// //     }
// // }
