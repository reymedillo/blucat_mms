<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
      * The table associated with the model.
      *
      * @var string
      */
    protected $table = 'news';

    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable = ['id','content'];

    /** Get All News
      *  @var array
      */
    protected function getAllNews($filters = null){
        return News::orderBy('updated_at', 'DESC')->paginate(config('app.countperpage'));
    }

    /** Get News
     *  @var Integer
     */
    protected function getNews($id){
        return News::where('id', $id)->orderBy('id', 'desc')->first();
    }

    /** Delete News
     *  @var array
     */
    protected function deleteNews($id){
        return News::where('id', $id)->delete();
    }

    /** Update News
     *  @var array
     */
    protected function updateNews($request){
        return News::where('id', $request['id'])->update(['content' => $request['content']]);
    }

    /** Create News
     *  @var array
     */
    protected function createNews($request){
        return News::create(['content' => $request['content'],]);
    }
}
