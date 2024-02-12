<?php

namespace App\Http\Controllers\Backend\Gallery;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Album;
use Image;

class GalleryController extends Controller
{
    public function GalleryView()
    {
        // $data['allData']=Gallery::all();
        $data['allData']=Album::all();
        return view('backend.gallery.view_gallery',$data);
    }
    public function AlbumAdd()
    {
        //$data['allData']=Gallery::all();
        return view('backend.gallery.add_album');
    }
    public function AlbumStore(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:albums,name|min:3',
            'image'=>'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
        ]);
        $data=new Album();
        $data->name = $request->name;
        $data->details = $request->details;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();
            // @unlink(public_path('upload/student_images/'.$data->image));
            $filename = date('YmdHi'). '.' . $extention ;
            // dd((public_path('/upload/gallery_images/thumbnail/'). $filename));
            // $request->file('image')->save(public_path('/upload/gallery_images/thumbnail/'), $filename);



            $thumbnailPath = public_path('/upload/gallery_images/thumbnail/'. $filename);
            //dd($thumbnailPath);
            $img = Image::make($file->path())->resize(100,100, function($constraint){
                $constraint->aspectRatio();
            });
            $img->save($thumbnailPath);
            $request->file('image')->move(public_path('/upload/gallery_images/'), $filename);


            // $data['image'] = $filename;
        }

        // $data->save();
        $notification=array(
            'message'=>'Album Created Successsfully',
            'alert-type'=>'success'
        );
        return redirect()
        ->route('gallery.view')
        ->with($notification);
    }
    public function AlbumEdit($id)
    {

        $editData=Album::where('id',$id)->first();

        return view('backend.gallery.edit_album',compact('editData'));
    }
    public function AlbumUpdate(Request $request, $id)
    {
        $data=Album::find($id);
        $vallidatedData=$request->validate([

            'name'=>'required|unique:albums,name,'.$data->id.'|min:3'
        ]);

        $data->name = $request->name;
        $data->details = $request->details;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/gallery_images/'.$data->image));


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $thumbnailPath = public_path('/upload/gallery_images/thumbnail/'. $filename);

            $img = Image::make($file->path())->resize(100,100, function($constraint){
                $constraint->aspectRatio();
            });
            $img->save($thumbnailPath);
            $file->move(public_path('upload/gallery_images'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        $notification=array(
            'message'=>'Album Updated Successsfully',
            'alert-type'=>'info'
        );
        return redirect()
        ->route('gallery.view')
        ->with($notification);
    }
    public function AlbumView($id)
    {
        $data['allData']=Gallery::with('album')->where('album_id',$id)->get();
        $data['album']=Album::where('id',$id)->first();
        return view('backend.gallery.view_album',$data);
    }


    public function GalleryStore(Request $request,$id)
    {
        $vallidatedData=$request->validate([
            'name'=>'required|unique:albums,name|min:3'
        ]);
        $data=new Gallery();
        $data->name = $request->name;
        $data->details = $request->details;
        $data->album_id = $request->album_id;
       // dd($request->all());
        if ($request->file('image')) {
            $file = $request->file('image');
            // @unlink(public_path('upload/student_images/'.$data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $thumbnailPath = public_path('/upload/gallery_images/thumbnail/'. $filename);
            //dd($thumbnailPath);
            $img = Image::make($file->path())->resize(100,100, function($constraint){
                $constraint->aspectRatio();
            });
            $img->save($thumbnailPath);
            $file->move(public_path('upload/gallery_images'), $filename);
            $data['image'] = $filename;
        }

        $data->save();
        $notification=array(
            'message'=>'Image Added Successsfully',
            'alert-type'=>'success'
        );
        return redirect()
        ->route('album.view',$request->album_id)
        ->with($notification);
    }
    public function ImageEdit($id)
    {
        //dd($id);
        $data['editData']=Gallery::with('album')->where('id',$id)->first();
        // dd($data);
        return view('backend.gallery.edit_image',$data);
    }
    public function ImageUpdate(Request $request, $id)
    {
        $data=Gallery::where('id',$id)->first();

        $vallidatedData=$request->validate([
           'name'=>'required|unique:galleries,name,'.$data->id.'|min:3'
        ]);
        //dd($data);
        $data->name = $request->name;
        $data->details = $request->details;
        $data->album_id = $request->album_id;
       // dd($request->all());
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/gallery_images/'.$data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $thumbnailPath = public_path('/upload/gallery_images/thumbnail/'. $filename);

            $img = Image::make($file->path())->resize(100,100, function($constraint){
                $constraint->aspectRatio();
            });
            $img->save($thumbnailPath);
            $file->move(public_path('upload/gallery_images'), $filename);
            $data['image'] = $filename;
        }
        $data->save();
        $notification=array(
            'message'=>'Image Updated Successsfully',
            'alert-type'=>'info'
        );
        return redirect()
        ->route('album.view',$request->album_id)
        ->with($notification);
    }
    public function GalleryUpdate(Request $request, $id)
    {
        $data=Gallery::find($id);
        $vallidatedData=$request->validate([
            'name'=>'required|min:3'
        ]);

        $data->name = $request->name;
        $data->details = $request->details;
        $data->album_id = $request->album_id;
        $data->image = $request->image;
        $data->save();
        $notification=array(
            'message'=>'Gallery Updated Successsfully',
            'alert-type'=>'info'
        );
        return redirect()
        ->route('gallery.view')
        ->with($notification);
    }
    public function GalleryDelete($id)
    {

        $gallery=Album::find($id);
        // dd($gallery);
        $gallery->delete();
    $notification=array(
        'message'=>'Gallery Deleted Successsfully',
        'alert-type'=>'info'
    );
    return redirect()
    ->route('gallery.view')
    ->with($notification);

    }


    //---------------------- Front End-------------------------
    //---------------------------------------------------------



    public function FrontendAlbumView($id)
    {
        $data['allData']=Gallery::with('album')->where('album_id',$id)->orderBy('updated_at','desc')->get();
        // dd($data['allData']);
        // $data['album']=Gallery::with('album')->where('album_id',$id)->first();
        // $data['album'] = Album::all();
    //    dd($data['album']);
        return view('frontend.gallery.view_album',$data);
    }
    public function FrontendGalleryView($id)
    {
        $data['allData']=Gallery::with('album')->where('album_id',$id)->get();
        // $data['album']=Album::where('id',$id)->first();
        $data['album'] = Album::all();
        // dd('Hello');
    //    dd($data['album']);
        return view('frontend.gallery.view_gallery',$data);
    }
}
