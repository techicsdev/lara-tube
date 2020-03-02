<?php

namespace Laratube\Http\Controllers;

use Illuminate\Http\Request;
use Laratube\Birthbg;
class BirthbgController extends Controller
{
    public function index()
    {
    	return view('content')->with('content1',Birthbg::where('type',1)->get())->with('content2',Birthbg::where('type',2)->get());
    }

    public function content1()
    {
    	return view('content1');
    }

    public function content2()
    {
    	return view('content2');
    }

    public function content1store(Request $request)
    {
    	$birthbg=new Birthbg();
    	$birthbg->content=$request->content;
    	$birthbg->type=1;
    	$birthbg->posation=$request->posation;
    	$birthbg->save();
    	return redirect('content');
    }

    public function content2store(Request $request)
    {
    	$birthbg=new Birthbg();
    	$birthbg->content=$request->content;
    	$birthbg->type=2;
    	$birthbg->posation=$request->posation;
    	$birthbg->save();
    	return redirect('content');
    }

    public function contentdelete(Birthbg $birthbg)
    {
    	$birthbg->delete();
    	return redirect('content');
    }
}
