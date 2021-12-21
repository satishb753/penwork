<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Other;

use Image;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Response;

class OtherController extends Controller
{
    //
    public function fillOther(Request $request){

        $this->validate($request, [
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $other = new Other();
        $other->title = $request['title'];
        $other->description = $request['description'];

        if(Input::hasFile('logo'))
        {
            $file = Input::file('logo');
            $image = Image::make($file);
            $filename = bin2hex(openssl_random_pseudo_bytes(10)).'_'.$file->getClientOriginalName();
            $file->move(public_path().'/uploads/user/'. Auth::user()->id , $filename);
            Response::make($image->encode('jpeg'));

//            $internship->image = $image;
            $other->image = $filename;
        }

        $streams = ['civil','mechanical','electrical','electronics','computer'];
        $taken = array();

        foreach( $streams as $key => $stream)
        {
            if(Input::has($stream)){
                array_push($taken,$stream);
            }
        }

        $branches = implode(', ',$taken);
        $other->branches = $branches;

        if($other->save())
        {
            return redirect()->route('admin.panel');
        }
    }
}
