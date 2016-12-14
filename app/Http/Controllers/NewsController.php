<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\News;

class NewsController extends Controller
{

    /**
     * @var Item
     */
    protected $news;

    /**
     * @var App\Http\Validation\NewsCustomValidator
     */
    protected $cvalidator;

    public function __construct()
    {
        $this->middleware('auth', ['except' => []]);
        $this->me = \Auth::user();
    }

    /*
     * News dashboard
     * GET
     * news
    */
    protected function getIndex()
    {
        return view('news.index', ['me'=> $this->me]);
    }

    /*
     * Show input news create form
     * GET
     * item/create-input
    */
    protected function getCreateInput()
    {
        $me = $this->me;
        return view('news.create-input')->with(compact('me'));
    }

    /*
     * News create confirmation
     * POST
     * news/create-confirm
    */
    protected function postCreateConfirm(Requests\NewsCreateRequest $request)
    {
        $me = $this->me;
        $news = $request->all();
        return view('news.create-confirm')->with(compact('news','me'));
    }

    /*
     * News create completion
     * POST
     * news/create-complete
    */
    protected function postCreateComplete(Requests\NewsCreateRequest $request)
    {
        $me = $this->me;
        $news = News::createNews($request);
        return view('news.create-complete')->with(compact('news','me'));
    }

    /*
     * Show list of news
     * GET
     * news/list
    */
    protected function getList()
    {
        $me = $this->me;
        $news = News::getAllNews();
        return view('news.list')->with(compact('news','me'));
    }

    /*
     * Show news detail
     * GET
     * news/show/{id}
    */
    protected function getShow($id)
    {
        $me = $this->me;
        $news = News::getNews($id);
        return view('news.show')->with(compact('news','me'));
    }

    /*
     * Show input news edit Form
     * GET
     * news/edit-input/{id}
    */
    protected function getEditInput($id)
    {
        $me = $this->me;
        $news = News::getNews($id);
        return view('news.edit-input')->with(compact('news','me'));
    }

    /*
     * Edit confirmation
     * POST
     * news/edit-confirm
    */
    protected function postEditConfirm(Requests\NewsEditRequest $request)
    {
        $me = $this->me;
        $news = $request->all();
        return view('news.edit-confirm')->with(compact('news','me'));
    }

    /*
     * Edit completed
     * POST
     * news/edit-complete
    */
    protected function postEditComplete(Requests\NewsEditRequest $request)
    {
        $me = $this->me;
        $news = News::updateNews($request);
        return view('news.edit-complete')->with(compact('news','me'));
    }

    /*
     * Delete an news
     * POST
     * news/delete
    */
    protected function postDelete(Requests\NewsDeleteRequest $request)
    {
        $me = $this->me;
        $news = News::deleteNews($request['id']);
        return redirect('news/list')->with('success', trans('global.success_delete'));
    }
}