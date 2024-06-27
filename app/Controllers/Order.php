<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\OrderModel; 

class Order extends ResourceController
{
    private $orderModel;

    public function __construct() {
        $this->orderModel = new OrderModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        
        $order = $this->orderModel->findAll();

        $payload = [
            "order" => $order
        ];

        echo view('order/index', $payload);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        echo view('order/new');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $payload = [
            "name" => $this->request->getPost('name'),
            "game" => (int) $this->request->getPost('game'),
            "price" => (int) $this->request->getPost('price'),
            "status" => $this->request->getPost('status'),
        ];


        $this->orderModel->insert($payload);
        return redirect()->to('/Home');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $order = $this->orderModel->find($id);
        
        if (!$order) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('order/edit', ["data" => $order]);
    }


    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $payload = [
            "name" => $this->request->getPost('name'),
            "game" => (int) $this->request->getPost('game'),
            "price" => (int) $this->request->getPost('price'),
            "status" => $this->request->getPost('status'),
        ];

        $this->orderModel->update($id, $payload);
        return redirect()->to('/Home');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->orderModel->delete($id);
        return redirect()->to('/product');
    }
}