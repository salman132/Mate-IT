<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at','desc')->paginate(5);
        return view('admin.contact.index')->with('contacts',$contacts);
    }


    public function read($id)
    {
        $contact = Contact::find($id);
        $contact->read =1;
        $contact->save();
        Session::flash('success','Marked as a read');
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reply(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'subject'=>'required|max:150',
            'text'=> 'required',
            'file.*' => 'mimes:jpeg,png,jpg,gif,svg,pdf,doc|max:5048'
        ]);

        $user = User::where('admin',1)->first();
        $email = $user->email;
        $subject = $request->subject;
        $text = $request->text;
        if($request->hasFile('file')) {

            $file = array();
            foreach ($request->file as $attachment){
                $filename = $attachment;
                $file_new_name = time() . $filename->getClientOriginalName();
                $filename->move('uploads/attachments/', $file_new_name);
                $file[] = 'uploads/attachments/'.$file_new_name;

            }

            Mail::to($request->email)->send(new \App\Mail\ReplyMail($email,$subject,$text,$file));

            foreach ($file as $f){
                unlink($f);
            }

        }
        else{
            Mail::to($request->email)->send(new \App\Mail\ReplyMail($email,$subject,$text));
        }




        Session::flash('success','You sent the reply');
        return redirect()->back();
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
            'lname'=> 'required|max:120',
            'email'=> 'required|email',
            'description'=> 'required'
        ]);

        $contact = new Contact();
        $contact->first_name = $request->fname;
        $contact->last_name = $request->lname;
        $contact->email = $request->email;
        $contact->description = $request->description;
        $contact->save();

        $user = User::where('admin',1)->first();

        Mail::to($user->email)->send(new \App\Mail\ContactMail($contact));

        Session::flash('success','We got your mail');
        return redirect()->back();
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
        Contact::destroy($id);
        Session::flash('success','You Delete an Email');
        return redirect()->back();
    }
}
