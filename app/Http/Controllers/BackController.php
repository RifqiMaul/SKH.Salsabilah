<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use App\Models\AgendaModel;
use App\Models\GalleryModel;
use App\Models\ProfileModel;
use App\Models\SiswaModel;

class BackController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function loginAdmin(Request $request)
    {
        $response = array();
        $username = $request->input('username');
        $password = md5($request->input('password'));
        $data = AdminModel::where([
            'username' => $username,
            'password' => $password
        ])->first();
        if ($data) {
            $response['response'] = "Success";
            $response['data'] = $data;
            session(['nama' => $data->nama_admin]);
        } else {
            $response['response'] = "Failed";
        }
        return json_encode($response);
    }

    public function dashboard(Request $request)
    {
        $activemenu = 'master';
        $activesubmenu = 'customer';
        $nama = "Kosong";
        if (!empty($request->session()->get('nama'))) {
            $nama = $request->session()->get('nama');
        }
        return view('admin.dashboard', compact('activemenu', 'activesubmenu', 'nama'));
    }

    public function siswa(Request $request)
    {
        $activemenu = 'master';
        $activesubmenu = 'siswa';
        $nama = "Kosong";
        if (!empty($request->session()->get('nama'))) {
            $nama = $request->session()->get('nama');
        }
        $siswa = SiswaModel::all();
        return view('admin.siswa', compact('activemenu', 'activesubmenu', 'nama', 'siswa'));
    }

    public function gallery(Request $request)
    {
        $activemenu = 'master';
        $activesubmenu = 'gallery';
        $nama = "Kosong";
        if (!empty($request->session()->get('nama'))) {
            $nama = $request->session()->get('nama');
        }
        $gallery = GalleryModel::all();
        return view('admin.gallery', compact('activemenu', 'activesubmenu', 'nama', 'gallery'));
    }

    public function getGallery(Request $request)
    {
        $gallery = GalleryModel::find($request->input('id_gallery'));
        return $gallery;
    }

    public function prosesGallery(Request $request)
    {
        $image = $request->file('gambar');

        if ($image->isValid()) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('foto/gallery'), $imageName);

            $modelGallery = new GalleryModel;

            $modelGallery->link_gambar = $imageName;
            $modelGallery->deskripsi = $request->input('deskripsi');
            $modelGallery->save();

            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Invalid image file']);
        }
    }

    public function prosesUbahGallery(Request $request)
    {
        $image = $request->file('gambar_edit');

        if ($image->isValid()) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('foto/gallery'), $imageName);

            $modelGallery = GalleryModel::find($request->input('id_gallery'));

            $modelGallery->link_gambar = $imageName;
            $modelGallery->deskripsi = $request->input('deskripsi_edit');
            $modelGallery->save();

            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Invalid image file']);
        }
    }

    public function hapusGallery(Request $request)
    {
        $gallery = GalleryModel::find($request->input('id_gallery'));
        if ($gallery->delete()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Data tidak ditemukan.']);
        }
    }

    public function agenda(Request $request)
    {
        $activemenu = 'master';
        $activesubmenu = 'agenda';
        $nama = "Kosong";
        if (!empty($request->session()->get('nama'))) {
            $nama = $request->session()->get('nama');
        }
        $agenda = AgendaModel::all();
        return view('admin.agenda', compact('activemenu', 'activesubmenu', 'nama', 'agenda'));
    }

    public function getAgenda(Request $request)
    {
        $agenda = AgendaModel::find($request->input('id_agenda'));
        return $agenda;
    }

    public function prosesAgenda(Request $request)
    {

        $model = new AgendaModel;
        $model->judul = $request->input('judul');
        $model->isi = $request->input('isi');
        $model->tanggal = $request->input('tanggal');
        if ($model->save()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Failed']);
        }
    }

    public function editAgenda(Request $request)
    {

        $model = AgendaModel::find($request->input('id_agenda'));
        $model->judul = $request->input('judul');
        $model->isi = $request->input('isi');
        $model->tanggal = $request->input('tanggal');
        if ($model->save()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Failed']);
        }
    }

    public function hapusAgenda(Request $request)
    {
        $agenda = AgendaModel::find($request->input('id_agenda'));
        if ($agenda->delete()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Data tidak ditemukan.']);
        }
    }


    public function profile(Request $request)
    {
        $activemenu = 'master';
        $activesubmenu = 'profile';
        $nama = "Kosong";
        if (!empty($request->session()->get('nama'))) {
            $nama = $request->session()->get('nama');
        }
        $profile = ProfileModel::find(1);
        return view('admin.profile', compact('activemenu', 'activesubmenu', 'nama', 'profile'));
    }

    public function editProfile(Request $request)
    {
        $model = ProfileModel::find(1);
        $model->nama_sekolah = $request->input('nama_sekolah');
        $model->deskripsi = $request->input('deskripsi');
        $model->alamat = $request->input('alamat');
        $model->email = $request->input('email');
        $model->telepon = $request->input('telepon');
        if ($model->save()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Failed']);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('nama');
        return redirect('/');
    }

    //siswa
    public function biodata(Request $request)
    {
        $activemenu = 'biodata';
        $nama = "Kosong";
        if (!empty($request->session()->get('nama'))) {
            $nama = $request->session()->get('nama');
        }
        $siswa = SiswaModel::find($request->session()->get('id_siswa'));
        return view('siswa.biodata', compact('activemenu', 'nama', 'siswa'));
    }

    public function editBiodata(Request $request)
    {
        $model = SiswaModel::find($request->session()->get('id_siswa'));
        $model->nama_lengkap = $request->input('nama_lengkap');
        $model->email = $request->input('email');
        $model->tempat_lahir = $request->input('tempat_lahir');
        $model->tanggal_lahir = $request->input('tanggal_lahir');
        $model->jenis_kelamin = $request->input('jenis_kelamin');
        $model->alamat = $request->input('alamat');
        $model->nama_ayah = $request->input('nama_ayah');
        $model->nama_ibu = $request->input('nama_ibu');
        $model->pekerjaan_ayah = $request->input('pekerjaan_ayah');
        $model->pekerjaan_ibu = $request->input('pekerjaan_ibu');
        $model->no_hp_ortu = $request->input('no_hp_ortu');
        $model->anak_ke = $request->input('anak_ke');
        $model->agama = $request->input('agama');
        $model->ketunaan = $request->input('ketunaan');
        if ($model->save()) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Failed']);
        }
    }

    public function berkas(Request $request)
    {
        $activemenu = 'berkas';
        $nama = "Kosong";
        if (!empty($request->session()->get('nama'))) {
            $nama = $request->session()->get('nama');
        }
        return view('siswa.berkas', compact('activemenu', 'nama'));
    }

    public function prosesUpload(Request $request)
    {
        $berkas_ktp_ortu = $request->file('berkas_ktp_ortu');
        $berkas_kk = $request->file('berkas_kk');
        $berkas_akta_lahir = $request->file('berkas_akta_lahir');
        $berkas_hasil_tes_ketunaan = $request->file('berkas_hasil_tes_ketunaan');
        $berkas_pas_foto = $request->file('berkas_pas_foto');

        if ($berkas_ktp_ortu->isValid()) {
            $imageName = time() . '.' . $berkas_ktp_ortu->getClientOriginalExtension();
            $berkas_ktp_ortu->move(public_path('foto/berkas/ktp_ortu'), $imageName);

            $model = SiswaModel::find($request->session()->get('id_siswa'));

            $model->berkas_ktp_ortu = $imageName;
            $model->save();
        }

        if ($berkas_kk->isValid()) {
            $imageName = time() . '.' . $berkas_kk->getClientOriginalExtension();
            $berkas_kk->move(public_path('foto/berkas/kk'), $imageName);

            $model = SiswaModel::find($request->session()->get('id_siswa'));

            $model->berkas_kk = $imageName;
            $model->save();
        }

        if ($berkas_akta_lahir->isValid()) {
            $imageName = time() . '.' . $berkas_akta_lahir->getClientOriginalExtension();
            $berkas_akta_lahir->move(public_path('foto/berkas/akta_lahir'), $imageName);

            $model = SiswaModel::find($request->session()->get('id_siswa'));

            $model->berkas_akta_lahir = $imageName;
            $model->save();
        }

        if ($berkas_hasil_tes_ketunaan->isValid()) {
            $imageName = time() . '.' . $berkas_hasil_tes_ketunaan->getClientOriginalExtension();
            $berkas_hasil_tes_ketunaan->move(public_path('foto/berkas/ketunaan'), $imageName);

            $model = SiswaModel::find($request->session()->get('id_siswa'));

            $model->berkas_hasil_tes_ketunaan = $imageName;
            $model->save();
        }

        if ($berkas_pas_foto->isValid()) {
            $imageName = time() . '.' . $berkas_pas_foto->getClientOriginalExtension();
            $berkas_pas_foto->move(public_path('foto/berkas/pas_foto'), $imageName);

            $model = SiswaModel::find($request->session()->get('id_siswa'));

            $model->berkas_pas_foto = $imageName;
            $model->save();
        }

        return response()->json(['success' => true]);
    }
}
