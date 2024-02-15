<?php

namespace App\Http\Controllers\Backend\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Route::get('/news/view',         [NewsController ::class, 'NewsView'])->name('news.view');
    // Route::get('/news/add',         [NewsController ::class, 'NewsAdd'])->name('news.add');
    // Route::post('/news/store',         [NewsController ::class, 'NewsStore'])->name('store.news');
    // Route::get('/news/edit/{id}',         [NewsController ::class, 'NewsEdit'])->name('news.edit');
    // Route::post('/news/update/{id}',         [NewsController ::class, 'NewsUpdate'])->name('update.news');
    // Route::get('/news/delete/{id}',         [NewsController ::class, 'NewsDetails'])->name('news.delete');
    public function NewsView()
    {
        $data['allData'] = News::all();
        return view('backend.news.view_news', $data);
    }
    public function NewsSingle($id)
    {
        $data['allData'] = News::all();
        $data['viewData'] = News::find($id);
        return view('frontend.news.view_news', $data);
    }

    public function NewsAdd()
    {
        $data['allData'] = News::all();
        return view('backend.news.add_news', $data);
    }
    public function NewsStore(Request $request)
    {
        $vallidatedData = $request->validate([
            'name' => 'required|min:3',
        ]);
        $data = new News();
        $data->name = $request->name;
        $data->details = $request->details;
        $data->published_at = $request->published_at;
        $data->status = $request->status;

        $data->save();
        $notification = array(
            'message' => 'News Inserted Successsfully',
            'alert-type' => 'success',
        );
        return redirect()
            ->route('news.view')
            ->with($notification);
    }
    public function NewsEdit($id)
    {

        $data['newsData'] = News::find($id);
        // dd($data);
        return view('backend.news.edit_news', $data);
    }
    public function NewsUpdate(Request $request, $id)
    {
        $data = News::find($id);
        $vallidatedData = $request->validate([
            'name' => 'required|min:3',
        ]);

        $data->name = $request->name;
        $data->details = $request->details;
        $data->published_at = $request->published_at;
        $data->status = $request->status;
        $data->save();
        $notification = array(
            'message' => 'News Updated Successsfully',
            'alert-type' => 'info',
        );
        return redirect()
            ->route('news.view')
            ->with($notification);
    }
    public function NewsDelete($id)
    {
        $studentGroup = News::find($id);
        $studentGroup->delete();
        $notification = array(
            'message' => 'News Deleted Successsfully',
            'alert-type' => 'info',
        );
        return redirect()
            ->route('news.view')
            ->with($notification);

    }
}
