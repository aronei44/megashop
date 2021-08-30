<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request){
    	$validatedData = $request->validate([
    		'email'=>'required',
    		'password'=>'required'
    	]);
    	if(Auth::attempt($validatedData)){
    		$request->session()->regenerate();
    		return redirect()->intended('/');
    	}
    	return back();
    }
    public function register(Request $request){
    	$validatedData =  $request->validate([
    		'username'=>'required|min:8|max:20|string',
    		'email'=>'required|email:dns|unique:users',
    		'no_hp'=>'required|min:11|max:15',
    		'password'=>'required|min:8'
    	]);
    	$validatedData['password']=Hash::make($validatedData['password']);
    	User::create($validatedData);
    	return redirect('/login');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return back();
    }
    public function ubahFoto(Request $request){
        $request->validate([
            'image'=>'required|mimes:jpg,png,jpeg'
        ]);
        $nama =  'foto' .  '-' .time() .'.'.$request->file('image')->extension();
        $request->image->move(public_path('img'),$nama);
        User::find(auth()->user()->id)->update([
            'image'=>$nama
        ]);
        return back();
    }
    public function get_province(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "key: 43794a63308d7165c3458424ef77c9a7"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          //ini kita decode data nya terlebih dahulu
            $response=json_decode($response,true);
            //ini untuk mengambil data provinsi yang ada di dalam rajaongkir resul
            $data_pengirim = $response['rajaongkir']['results'];
            return $data_pengirim;
        }
    }
    public function get_city($id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.rajaongkir.com/starter/city?&province=$id",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "key: 43794a63308d7165c3458424ef77c9a7"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
            $response=json_decode($response,true);
            $data_kota = $response['rajaongkir']['results'];
            return json_encode($data_kota);
        }
    }
    public function editProfil(){
        $provinsi = $this->get_province();
        return view('edit',    ['url'=> '/profil','provinsi'=>$provinsi]);
    }
    public function simpan(Request $request){
        User::find(auth()->user()->id)->update([
            'name'=>$request->name,
            'username'=>$request->username,
            'no_hp'=>$request->no_hp,
            'origin'=>$request->province_id,
            'city'=>$request->kota_id,
            'alamat'=>$request->alamat
        ]);
        return redirect('/profil');
    }

    public function profil(){
        if(auth()->user()->origin != ''){
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://api.rajaongkir.com/starter/city?id=".auth()->user()->city."&province=".auth()->user()->origin,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_HTTPHEADER => array(
                "key: 43794a63308d7165c3458424ef77c9a7"
              ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
              echo "cURL Error #:" . $err;
            } else {
                $response=json_decode($response,true);
                //ini untuk mengambil data provinsi yang ada di dalam rajaongkir resul
                $data_pengirim = $response['rajaongkir']['results'];
                $province = $data_pengirim['province'];
                $city_name = $data_pengirim['city_name'];
                return view('profil', ['url'=>'/profil','provinsi'=>$province,'kota'=>$city_name]);
            }
        }else{
            return view('profil',['url'=>'/profil']);
        }
    }
}
