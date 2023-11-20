<?php

namespace App\Http\Controllers;

use App\Models\AgendaModel;
use App\Models\GalleryModel;
use App\Models\ProfileModel;
use App\Models\SiswaModel;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $profile = ProfileModel::find(1);
        $agenda = AgendaModel::orderBy('id_agenda', 'desc')->limit(3)->get();
        return view('index', compact('agenda', 'profile'));
    }

    public function gallery()
    {
        $gallery = GalleryModel::all();
        return view('gallery', compact('gallery'));
    }

    public function agenda()
    {
        $agenda = AgendaModel::all();
        return view('agenda', compact('agenda'));
    }

    public function profile()
    {
        $profile = ProfileModel::find(1);
        $siswa = SiswaModel::all();
        $agenda = AgendaModel::all();
        return view('profile', compact('profile', 'siswa', 'agenda'));
    }

    public function daftar()
    {
        return view('daftar');
    }

    public function prosesDaftarSiswa(Request $request)
    {
        $model = new SiswaModel;
        $model->nama_lengkap = $request->input('nama_lengkap');
        $model->email = $request->input('email');
        $model->password = md5($request->input('password'));
        if ($model->save()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Failed']);
        }
    }

    public function login()
    {
        return view('login');
    }

    public function loginSiswa(Request $request)
    {
        $response = array();
        $email = $request->input('email');
        $password = md5($request->input('password'));
        $data = SiswaModel::where([
            'email' => $email,
            'password' => $password
        ])->first();
        if ($data) {
            $response['response'] = "Success";
            $response['data'] = $data;
            session(['nama' => $data->nama_lengkap]);
            session(['id_siswa' => $data->id_siswa]);
        } else {
            $response['response'] = "Failed";
        }
        return json_encode($response);
    }
}
