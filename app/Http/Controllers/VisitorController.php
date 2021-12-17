<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companydetail;
use App\Models\Investmentplan;
use App\Models\referralpercent;
use App\Models\Faq;

class VisitorController extends Controller
{
    //
    public function index()
    {
        # code...
        $inv_plans = Investmentplan::all();
        $ref = referralpercent::where('id', 1)->first();
        $faqs = Faq::all();
        $company_detail = Companydetail::where('id', 1)->first();
        $data=[];
        $data['company_detail'] = $company_detail;
        $data['compd'] = $company_detail;
        $data['investmentplans'] = $inv_plans;
        $data['faqs'] = $faqs;
        $data['title']="Home";
        $data['ref']=$ref;
        
        return view ("visitors.index", $data);
    }



    public function about()
    {
        # code...
    $data=[];
    $company_detail = Companydetail::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="About Us";
        return view ('visitors.about', $data);
    }


    public function affiliate()
    {
        # code...
    $data=[];
    $company_detail = Companydetail::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="Affiliate";
        return view ('visitors.affliate' , $data);
    }


    public function terms()
    {
        # code...
    $data=[];
    $company_detail = Companydetail::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="Terms & Condition";
        return view ('visitors.terms' , $data);
    }


    public function invest()
    {
        # code...
    $data=[];
    $company_detail = Companydetail::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="About Us";
        return view ('visitors.invest', $data);
    }


    public function faq()
    {
        # code...
    $data=[];
    $company_detail = Companydetail::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="Faqs";
        return view ("visitors.faqs", $data);
    }


    public function contact()
    {
        # code...
    $data=[];
    $company_detail = Companydetail::where('id', 1)->first();
    $data['compd'] = $company_detail;
    $data['title']="Contact Us";
        return view ("visitors.contact", $data);
    }

    public function postcontact(Request $request)
    {   # code...
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        $domain = request()->getHost();
        $email = "Brianscott44221@gmail.com";
        $mailtitle = "contact message from $name";
    $emaildata=['data'=> $email,'email_body'=>$message,'email_header'=>$mailtitle];

    Mail::to($email)->send(new Adminmail($emaildata));

        $company_detail = Companydetail::where('id', 1)->first();

    $data=[];
    $data['company_detail'] = $company_detail;
    $data['title']="About Us";
        return redirect()->route("contact")->with("success","message sent, we will respond to you as soon as we can");
    }
}
