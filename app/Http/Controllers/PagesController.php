<?php

namespace App\Http\Controllers;

use App\Models\Box;
use App\Models\CaseDescription;
use App\Models\Equipment;
use App\Models\Feed;
use App\Models\Staff;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function cases()
    {
        $cases = Box::get();
        return view('box', compact('cases'));
    }

    public function case($id)
    {
        $case = Box::where('id', $id)->first();
        $des = CaseDescription::where('case_id', $id)->get();
        return view('case', compact('case', 'des'));
    }

    public function rnf()
    {
        return view('rnf');
    }

    public function news()
    {
        return view('news');
    }


    public function one_news($id)
    {
        $news = Feed::where('id', $id)->first();
        return view('one_news', compact('news'));
    }

    public function equipment()
    {
        $equipments = Equipment::get();
        return view('equipment', compact('equipments'));
    }

    public function contacts()
    {
        $staff = Staff::get();
        return view('contacts', compact('staff'));
    }

    public function admin()
    {
        return view('auth.index');
    }

    public function aNews()
    {
        $news = Feed::get();
        return view('auth.news.news', compact('news'));
    }

    public function aBox()
    {
        $box = Box::get();
        return view('auth.box.box', compact('box'));
    }

    public function aEquipment()
    {
        $equipments = Equipment::get();
        return view('auth.equipment.equipment', compact('equipments'));
    }

    public function aStaff()
    {
        $staff = Staff::get();
        return view('auth.staff.staff', compact('staff'));
    }

    public function aNewsCreate()
    {
        return view('auth.news.createnews');
    }

    public function aBoxCreate()
    {
        return view('auth.box.createbox');
    }

    public function aEquipmentCreate()
    {
        return view('auth.equipment.equipmentcreate');
    }

    public function aStaffCreate()
    {
        return view('auth.staff.staffcreate');
    }
}
