<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => []]);
        $this->me = \Auth::user();
    }

    /*
     * Item dashboard
     * GET
     * item
    */
    protected function getIndex()
    {
        $me = $this->me;
        return view('item.index', ['me'=> $me]);
    }

    /*
     * Show input item form
     * GET
     * item/create-input
    */
    protected function getCreateInput()
    {
        $me = $this->me;
        return view('item.create-input', ['me'=> $me]);
    }

    /*
     * Item create confirmation 
     * POST
     * item/create-confirm
    */
    protected function postCreateConfirm()
    {
        $me = $this->me;
        return view('item.create-confirm', ['me'=> $me]);
    }

    /*
     * Item create completion
     * POST
     * item/create-complete
    */
    protected function postCreateComplete()
    {
        $me = $this->me;
        return view('item.create-complete', ['me'=> $me]);
    }

    /*
     * Show list of items
     * GET
     * item/list
    */
    protected function getList()
    {
        $me = $this->me;
        return view('item.list', ['me'=> $me]);
    }

    /*
     * Show item detail
     * GET
     * item/show/{id}
    */
    protected function getShow()
    {
        $me = $this->me;
        return view('item.show', ['me'=> $me]);
    }

    /*
     * Show input item edit Form
     * GET
     * item/edit-input/{id}
    */
    protected function getEditInput()
    {
        $me = $this->me;
        return view('item.edit-input', ['me'=> $me]);
    }

    /*
     * Edit confirmation
     * POST
     * item/edit-confirm
    */
    protected function postEditConfirm()
    {
        $me = $this->me;
        return view('item.edit-confirm', ['me'=> $me]);
    }

    /*
     * Edit completed
     * POST
     * item/edit-complete
    */
    protected function postEditComplete()
    {
        $me = $this->me;
        return view('item.edit-complete', ['me'=> $me]);
    }

    /*
     * Delete an item
     * POST
     * item/delete
    */
    protected function postDelete()
    {
        $me = $this->me;
        return view('item.delete', ['me'=> $me]);
    }

}
