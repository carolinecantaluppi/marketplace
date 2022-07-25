<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomRequest;
use App\Http\Requests\EditRequest;
use App\Models\CustomTshirt;
use App\Models\Tshirt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class HomeController extends Controller
{
    public function home(Request $request, $id = "")
    {
        $tshirt = "";
        if ($id != "") {
            $tshirt = Tshirt::find($id);
        }

        return view('home', compact('tshirt'));
    }

    public function search(Request $request)
    { 
        $search = $request->input('search');
        $tshirts = "";
        if ($search == '') {
            $tshirts = Tshirt::all();
        } else {
            $tshirts = Tshirt::where('title', 'LIKE', '%'.$search.'%')->get();
        }

        return view('alltshirts', compact('tshirts'));
    }

    public function createTshirt(CustomRequest $request)
    {
        $tshirt = Tshirt::create([
            'img'=>$request->input('imgBase'),
            'title'=>$request->input('title'),
        ]);

        $img64 = base64_decode($request->input('img64'));
        $full = Image::make($img64)->stream('png', 100);
        $mid = Image::make($img64)->resize(600, 600)->stream('png', 100);
        $thumbnail = Image::make($img64)->resize(200, 200)->stream('png', 100);
        
        Storage::disk('public')->put("{$tshirt->id}/full.jpg", $full);
        Storage::disk('public')->put("{$tshirt->id}/mid.jpg", $mid);
        Storage::disk('public')->put("{$tshirt->id}/thumbnail.jpg", $thumbnail);

        // Watermark:
        // $srcPath = storage_path('public/storage/id/mid');
        // $img64 = file_get_contents($srcPath);
        // $img64 = Image::load($srcPath);
        // $img64->watermark(base_path('resources/img/smile.png'))
        //     ->watermarkPosition(50);
        // $img64->save($srcPath);

        return redirect(route('allTshirts'));
    }

    public function allTshirts(Request $request)
    {
        $tshirts = Tshirt::all();
        return view('alltshirts', compact('tshirts'));
    }

    public function editTshirt(Request $request, Tshirt $tshirt)
    {
        if ($request->file('img')) {
            
            $tshirt->update([
                'title'=>$request->input('title'),
                'text'=>$request->input('text'),
            ]);
        } else {
            $tshirt->update([
                'title'=>$request->input('title'), 
                'text'=>$request->input('text'),
            ]);
        };
        return redirect(route('allTshirts'));
    }

    public function deleteTshirt(Request $request, $id)
    {
        $movie = Tshirt::destroy($id);

        return redirect(route('allTshirts'));
    }
}
