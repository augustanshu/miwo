<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{

		  
	public function __construct()
	{
		$this->setupTheme('default','default');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	 $title='公司动态';
	 $url='about/activity';
          $articles=Post::View()->orderBy('id', 'desc')->Paginate(15);
		  return $this->theme->of('client.activity.index',compact('articles','title','url'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		    $title='公司动态';
	       $url='about/activity';
             $article = Post::View()->find($id);
			 $article_former = Post::View()->where('id','<',$id)->first();
			 $article_latter= Post::View()->where('id','>',$id)->first();
			 
			if(!$article ->exists)
			{
				 return 'error';
			}
			return $this->theme->of('client.activity.show',compact('url','title','article','article_former','article_latter'))->render();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
