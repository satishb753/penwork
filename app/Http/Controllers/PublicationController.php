<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Image;

use DB;

use App\Publication;

use App\Author;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\Auth;

class PublicationController extends Controller
{
    //
    public function showPublication(Request $request)
    {
        $publications = DB::table('publications')->where('branches','like','%'.Auth::user()->branch.'%')->paginate(5);
        return view('pages.publication',['publications'=>$publications]);
    }

    public function fillPublication(Request $request){

        $flag1 = 0 ; $flag2 = 0 ; $flag3 = 0;

        $publication = new Publication();
        $publication->publication_title = $request['publication_title'];
        $publication->volume = $request['volume'];
        $publication->date = $request['date'];
        $publication->paper_title = $request['paper_title'];
        $publication->proceeding = $request['proceeding'];
        $publication->abstract = $request['abstract'];
        $publication->keywords = $request['keywords'];
        $publication->issn_no = $request['issn_no'];

        if(Input::hasFile('logo'))
        {
            $file = Input::file('logo');
            $image = Image::make($file);
            $filename = Auth::user()->id .'_'.bin2hex(openssl_random_pseudo_bytes(10)).'_'.$file->getClientOriginalName();
            $file->move(public_path().'/uploads/shared/publication' , $filename);
            Response::make($image->encode('jpeg'));

            $publication->image = $image;
            $publication->path = $filename;
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
        $publication->branches = $branches;

        if($publication->save())
        {

            if($request['author_01'] != '')
            {
                $author_01 = new Author();
                $author_01->author_name = $request['author_01'];
                $author_01->affiliation = $request['affiliation_01'];
                $author_01->publication_id = $publication->id;
                $author_01->save();
                $flag1 = 1;
            }

            if($request['author_02'] != '') {

                $author_02 = new Author();
                $author_02->author_name = $request['author_02'];
                $author_02->affiliation = $request['affiliation_02'];
                $author_02->publication_id = $publication->id;
                $author_02->save();
                $flag2 = 1;
            }

            if($request['author_03'] != '') {
                $author_03 = new Author();
                $author_03->author_name = $request['author_03'];
                $author_03->affiliation = $request['affiliation_03'];
                $author_03->publication_id = $publication->id;
                $author_03->save();
                $flag3 = 1;
            }

            if( $flag1 || $flag2 || $flag3){
                return redirect()->route('admin.panel');
            }

        }

        return redirect()->route('home');

    }

}
