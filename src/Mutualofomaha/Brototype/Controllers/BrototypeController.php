<?php namespace Mutualofomaha\Brototype\Controllers;

use Mutualofomaha\Core\Controllers\BaseController;
use Illuminate\Support\Facades\View;

class BrototypeController extends BaseController
{
    public function anyIndex()
    {
        echo 'hello';
    }

    public function anyA()
    {
        return View::make('brototype::templateA', array('panda'=>'A'));
    }

    public function anyB()
    {
        return View::make('brototype::templateA', array('panda'=>'I got'));
    }

    public function anyC()
    {
        return View::make('brototype::templateA', array('panda'=>'Broads'));
    }

    public function anyD()
    {
        return View::make('brototype::templateB', array('panda'=>'in ATL'));
    }
}
