<?php
namespace App\Controllers;
//add
use App\Models\SearchModel;

class SearchController extends BaseController {
    
public function index()
{
    return view('search_form');
}
public function search()
{
    $searchModel=new SearchModel;
    $search_term=$this->request->getPost('search');

    $data['flori']=$searchModel->where('nume',$search_term)->findAll();
        
    return view('search_result',$data);
}
}