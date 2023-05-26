<?php

namespace App\Http\Controllers;

use App\Models\Aturan;
use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function loginproses(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard');
        }
        return view('admin.login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function dashboard()
    {
        $user = User::where('role', 'pasien')->count();
        $penyakit = Penyakit::count();
        $gejala = Gejala::count();
        $jam = Carbon::now()->format('H:i');
        return view('admin.dashboard', compact('user', 'penyakit', 'gejala', 'jam'));
    }

    public function pengguna()
    {
        $data = User::where('role', 'pasien')->latest()->get();
        return view('admin.datapengguna.index', compact('data'));
    }
    public function insertpengguna(Request $request)
    {
        $data = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role' => 'pasien',
        ]);
        Alert::success('Tambah', 'Data pengguna berhasil ditambahkan ');
        return redirect()->route('pengguna');
    }
    public function resetpassword($id)
    {
        $data = User::find($id)->update([
            'password' => bcrypt('password')
        ]);

        Alert::success('Reset', 'Data pasien berhasil direset password');
        return redirect()->route('pengguna');
    }
    public function deletepengguna($id)
    {
        $data = User::find($id)->delete();
        Alert::success('Hapus', 'Data penyakit berhasil dihapus');
        return redirect()->route('pengguna');
    }

    public function penyakit()
    {
        $data = Penyakit::latest()->get();

        $auto = DB::table('penyakits')->max('kodepenyakit');
        $urut = (int) substr($auto, 1, 3);
        $urut++;
        $huruf = 'P';
        $kd_pe = $huruf . sprintf('%03s', $urut);
        return view('admin.datapenyakit.index', compact('data', 'kd_pe'));
    }
    public function tambahpenyakit()
    {
        return view('admin.datapenyakit.index');
    }
    public function insertpenyakit(Request $request)
    {
        $data = Penyakit::create([
            'kodepenyakit' => $request->input('kodepenyakit'),
            'namapenyakit' => $request->input('namapenyakit'),
            'deskripsi' => $request->input('deskripsi'),
        ]);
        Alert::success('Tambah', 'Data penyakit berhasil ditambahkan ');
        return redirect()->route('penyakit');
    }
    public function editpenyakit($id)
    {
        $data = Penyakit::find($id);
        return view('admin.datapenyakit.edit', compact('data'));
    }

    public function updatepenyakit(Request $request, $id)
    {
        $data = Penyakit::find($id);
        $data->kodepenyakit = $request->input('kodepenyakit');
        $data->namapenyakit = $request->input('namapenyakit');
        $data->deskripsi = $request->input('deskripsi');
        $data->save();
        Alert::success('Update', 'Data penyakit berhasil diupdate ');
        return redirect()->route('penyakit');
    }
    public function deletepenyakit($id)
    {
        $data = Penyakit::find($id)->delete();
        Alert::success('Hapus', 'Data penyakit berhasil dihapus ');
        return redirect()->route('penyakit');
    }


    public function gejala()
    {
        $data = Gejala::latest()->get();

        $auto = DB::table('gejalas')->max('kodegejala');
        $urut = (int) substr($auto, 1, 3);
        $urut++;
        $huruf = 'G';
        $kd_ge = $huruf . sprintf('%03s', $urut);
        return view('admin.datagejala.index', compact('data', 'kd_ge'));
    }

    public function insertgejala(Request $request)
    {
        $data = Gejala::create([
            'kodegejala' => $request->input('kodegejala'),
            'namagejala' => $request->input('namagejala'),
        ]);
        Alert::success('Tambah', 'Data gejala berhasil ditambah');
        return redirect()->route('gejala');
    }
    public function editgejala($id)
    {
        $data = Gejala::find($id);
        return view('admin.datagejala.edit', compact('data'));
    }

    public function updategejala(Request $request, $id)
    {
        $data = Gejala::find($id);
        $data->kodegejala = $request->input('kodegejala');
        $data->namagejala = $request->input('namagejala');
        $data->save();
        Alert::success('Update', 'Data gejala berhasil diupdate ');
        return redirect()->route('gejala');
    }
    public function deletegejala($id)
    {
        $data = Gejala::find($id)->delete();
        Alert::success('Hapus', 'Data gejala berhasil dihapus ');
        return redirect()->route('gejala');
    }

    public function aturan()
    {
        $data = Aturan::latest()->get();

        $penyakit = Penyakit::all();
        $gejala = Gejala::all();
        return view('admin.dataaturan.index', compact('data', 'penyakit', 'gejala'));
    }

    public function insertaturan(Request $request)
    {
        if (!empty($request->input('daftargejala'))) {
            $data = Aturan::create([
                'id_penyakit' => $request->input('id_penyakit'),
                // 'namapenyakit' => $request->input('namapenyakit'),
                'daftargejala' => join(' - ', $request->input('daftargejala')),
            ]);
            // dd($data);
        }

        return redirect()->route('aturan');
    }
    public function editaturan($id)
    {
        $data = Aturan::find($id);

        $penyakit = Penyakit::all();
        $gejala = Gejala::all();
        return view('admin.dataaturan.edit', compact('data', 'penyakit', 'gejala'));
    }

    public function updateaturan(Request $request, $id)
    {
        if (!empty($request->input('daftargejala'))) {
            $data = Aturan::find($id);
            if ($data) {
                $data->id_penyakit = $request->input('id_penyakit');
                
                $daftargejala = $request->input('daftargejala');
                if (is_array($daftargejala)) {
                    $daftargejala = join(' - ', $daftargejala);
                }
                
                $data->daftargejala = $daftargejala;
                $data->save();
            }
        }
        
        
        Alert::success('Update', 'Data aturan berhasil diupdate ');
        return redirect()->route('aturan');
    }
    public function deleteaturan($id)
    {
        $data = Aturan::find($id)->delete();
        Alert::success('Hapus', 'Data aturan berhasil dihapus ');
        return redirect()->route('aturan');
    }

    public function diagnosa()
    {
        $data = Diagnosa::all();
        return view('admin.diagnosa.index', compact('data'));
    }

    public function konsultasi()
    {
        return view('admin.konsultasi.index');
    }
}
