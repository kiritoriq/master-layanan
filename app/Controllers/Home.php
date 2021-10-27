<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\LingkupLayananModel;

class Home extends BaseController
{
    public $category;
    public $request;
    public $lingkup;

    public function __construct()
    {
        ini_set('display_errors', 1);
        $this->category = new CategoryModel();
        $this->request = \Config\Services::request();
        $this->lingkup = new LingkupLayananModel();
    }

    /**
     * to display index page
     */
    public function index()
    {
        return view('index.php');
        // return view('welcome_message');
    }

    /**
     * to display create Form
     */
    public function create()
    {
        // $this->category = new CategoryModel();
        $category = $this->category->findAll();
        return view('create.php', ['categories' => $category]);
    }

    /**
     * to Store data to Database
     */
    public function store()
    {
        ini_set('display_errors', 1);
        $response = array(
            'status' => 'success',
            'msg' => 'Terjadi kesalahan pada saat menyimpan data'
        );

        $data = [
            'category_id' => $this->request->getVar('category_id'),
            'layanan_title' => $this->request->getVar('layanan'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $insert = $this->lingkup->insert($data);

        if($insert) {
            $response = array(
                'status' => 'success',
                'msg' => 'Data Berhasil disimpan!'
            );
        } else {
            $response['error'] = $this->db->error()['code'];
        }

        echo json_encode($response);
    }

    /**
     * to display table form
     */
    public function table()
    {
        return view('table.php');
    }

    public function getData()
    {
        
        $total_row = $this->lingkup->countAll();
        $per_page = 4;
        $page = ceil($total_row / $per_page);
        $lingkup = $this->lingkup->paginate($per_page);

        $data = [
            'lingkups' => $lingkup,
            'pager' => $this->lingkup->pager->makeLinks($page, $per_page, $total_row),
        ];

        echo json_encode($data);
    }
}
