<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FrontentController extends Controller
{

    public function index()
    {
        return view ('index');
    }

    public function about()
    {
        return view ('frontend.page.about_us');
    }

    public function contact()
    {
        return view ('frontend.page.contact');
    }

    public function courses()
    {
        return view ('frontend.page.courses');
    }

    public function pricing()
    {
        return view ('frontend.page.pricing');
    }

    public function toturs()
    {
        return view ('frontend.page.tutors');
    }

    public function destroy(string $id)
    {
        //
    }
}
