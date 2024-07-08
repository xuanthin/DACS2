<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Mail;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use Illuminate\Support\Facades\Redirect;
session_start();

class ContactController extends Controller
{   
    public function sendMail(){
        $data = [
            'name'=>'Tèo',
            'age'=>6,
            'toy'=>'Chiếc iphone13 promax'
                ];
        Mail::send('email',$data,function($message){
            $message->from('nguyenduyid123@gmail.com','Duy Nguyễn');
            $message->to('thin16008@gmail.com','Thin Dinh');
            $message->subject('Thư gửi ông già noel');
        });
    }

    
    public function lien_he(){
        $contact = DB::table('tbl_information')->where('info_id','1')->get();
        return view('pages.lienhe.contact',compact('contact'));

    }
    public function information(){
        $contact = Contact::where('info_id',1)->get();
        return view('admin.add_information')->with(compact('contact'));
    }
   

    public function update_info (Request $request,$info_id){
        $data = $request->all();
        $contact = Contact::find($info_id);
        $contact->info_contact = $data['info_contact'];
        $contact->info_map = $data['info_map'];
        $contact->info_fanpage = $data['info_fanpage'];
        $get_image = $request->file('info_logo');

        $path = 'public/uploads/contact/';

        if($get_image) {
            unlink($path.$contact->info_logo);
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $contact->info_logo = $new_image;
           
        } 
        // DB::table('tbl_information')->where('info_id',$info_id)->update($data);
        // return redirect()->back()->with('message','Cập nhật thông tin website thành công');
        $contact->save();
        return redirect()->back()->with('message','Cập nhật thông tin website thành công');



    }
    public function save_info(Request $request){
        $data = $request->all();
        $contact = new Contact();
        $contact->info_contact = $data['info_contact'];
        $contact->info_map = $data['info_map'];
        $contact->info_fanpage = $data['info_fanpage'];
        $get_image = $request->file('info_logo');

        $path = 'public/uploads/contact/';

        if($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move($path,$new_image);
            $contact->info_logo = $new_image;
           
        } 
        $contact->save();
        return redirect()->back()->with('message','Cập nhật thông tin website thành công');
    }
}
