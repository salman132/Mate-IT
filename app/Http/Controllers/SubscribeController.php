<?php

namespace App\Http\Controllers;

use App\Subscribe;
use Illuminate\Http\Request;
use App\Exceptions\SubscribeFailed;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = Subscribe::paginate(2);
        return view('admin.subscriber.index')->with('subscribers',$subscribers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mail(Request $request)
    {
        $request->validate([
            'subject'=>'required|max:200',
            'text'=> 'required'
        ]);

        $subscriber = Subscribe::all();

        foreach ($subscriber as $sub){
            if($request->hasFile('file')) {

                $file = array();
                foreach ($request->file as $attachment){
                    $filename = $attachment;
                    $file_new_name = time() . $filename->getClientOriginalName();
                    $filename->move('uploads/attachments/', $file_new_name);
                    $file[] = 'uploads/attachments/'.$file_new_name;

                }

                Mail::to($sub->email)->send(new \App\Mail\ReplyMail($sub->email,$request->subject,$request->text,$file));

                foreach ($file as $f){
                    unlink($f);
                }

            }
            else{
                Mail::to($sub->email)->send(new \App\Mail\ReplyMail($sub->email,$request->subject,$request->text));
            }
        }

        Session::flash('success','Message sent to all');
        return  redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fname'=>'required|max:120',
            'email'=> 'required'
        ]);

        $subsCheck = Subscribe::where('email',$request->email)->first();
        if($subsCheck == TRUE){
            throw new SubscribeFailed;
        }
        else {

            $sub = new Subscribe();
            $sub->fname = $request->fname;
            $sub->email = $request->email;
            $sub->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        Subscribe::destroy($id);
        Session::flash('success','You deleted a Subscriber');
        return redirect()->back();
    }
}
