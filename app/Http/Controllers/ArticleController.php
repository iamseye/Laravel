<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Article;
use Request;

class ArticleController extends Controller
{


    public function __construct() {
        $this->middleware('auth');
    }


    //
    public function index()
    {
    	//$articles=Article::latest('updated_at')->get();

        //return \Auth::user()->name;

    	$articles=Article::latest('created_at')->published()->get();

    	//return $articles;
    	return view('articles.index', compact('articles'));
    }

    public function show($id){

    	$articles=Article::findOrFail($id);

    	/*
    	if(is_null($articles))
    	{
    		abort(404);
    		//can change config.debug mode to false
    	}
		*/

    	//dd($articles->published_at);

    	return view('articles.show', compact('articles'));
    }

     public function create() {

    	return view('articles.create');
    }


     public function store(Requests\ArticleRequest $request) {

     	//$input=Request::all();
     	// $input['updated_at']=Carbon::now();

     	// Article::create($input);

         $newArticle=new Article($request->all());

         //save user_id from auth
         \Auth::user()->articles()->save($newArticle);

     	//Article::create($request->all());  //$user_id=auth:user->id


         //\Session::flash('flash_msg','Your article has been created!');
         //session()->flash('flash_msg_important',true);

     	return redirect('article')->with([
     	    'flash_msg'=> 'Your article has been created!',
            'flash_msg_important' => true
        ]);
    }

    public function edit($id){

    	$articles = Article::findOrFail($id);

    	return view('articles.edit',compact('articles'));
    }

    public function update($id, Requests\ArticleRequest $request){

    	$articles = Article::findOrFail($id);

    	$articles->update($request->all());

    	return redirect('article');

    }

}
