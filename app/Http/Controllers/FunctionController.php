<?php

namespace App\Http\Controllers;

use DB;
use DateTime;
use App\list_name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FunctionController extends Controller
{
	public function addNama() {
		$senarai = new list_name; 
		//$attending = Input::get('attend') ? true : false;

		$senarai->nama = request('Nama');
		$senarai->jabatan = request('jbtn');
		$senarai->meja = request('meja');
        //$senarai->attend = request('attend') ? true : false;
		$senarai->save();

		return view('/login');

	}

    public function Update() {

    	// example ->  ModelName::find($id, ['name', 'surname']);
    	//dd(Input::has('attend'));
    	//$now = new DateTime();
    	//$senarai->attend = request('attend') ? true : false;

    	//dd($now);

    	//$attending->
    	//$senarai->attend = request('attend') ? true : false;
    	/*DB::table('list_names')->update(['attend' => 1]);

    	DB::table('list_names')
    		->where('id', 1)
    		->update(['attend' => true]);*/
    	$test = request('attend') ? true : false;
    	//$data -> nama;
    	$userData = list_name::find($id);
        $userData->nama = request('nama');
        $userData->meja = request('meja');
        $userData->jam = request('jam');
        $userData->attend = request('$test');

        //$userData->update($request->all());
    	dd($userData);
    }

    public function attend(Request $request) {
    	//$student = list_name::find($id);
    	//dd($student);
    	$id_pelatih = request('p_id');

        //test dri nama
        //$nama_pelatih = request('p_nama'); -> xdpt jgn try lagi 

    	//$id = $pelatih->

    	//$pelatih = list_name::findOrFail($request->$nama_pelatih);

    	//$pelatih = DB::table('list_names')->where('nama', '=', $nama_pelatih)
    	//->first();
    	//dd($pelatih);

    	//$pelatih->id = request('p_id');
        //$pelatih->meja = request('p_meja');
        //$pelatih->jam = request('p_masa');
        //$pelatih->attend = request('p_attend') ? true : false;

        //$data [] = [
        	//'id'=>request('p_id'),
        	//'id'=>$id_pelatih,
        	//'nama'=>request('p_nama'),
        	//'meja'=>request('p_meja'),
        	//'jam'=>request('p_masa'),
        	//'attend'=>request('p_attend') ? true : false
        //];


        //$pelatih->save();
        //dd($data);
        //$testVar = DB::table('list_names')->where('id', '=', $id_pelatih);
        //$testVar = list_name::select('jam','attend')->where('id', '=', $id_pelatih);//->update($data);
        // DB::table('list_names')->where('id', '=', $id_pelatih)->update($data);
        //return Redirect()->route('registration');
        //$vartest = list_name::find($id_pelatih)->select('jam','attend')->update($data);
        //DB::table('list_names')->where('id', '=', $id_pelatih)->update(['jam'=>])
        //$pelatih = DB::table('list_names')->where('id', '=', $id_pelatih)->update($data);
        //$pelatih->save();
       	//dd($vartest);
        
        list_name::find($id_pelatih)->update([
            'jam'=>request('p_masa'),
            'attend'=>request('p_attend') ? true : false
        ]);
        return Redirect()->route('registration');

    }
}
