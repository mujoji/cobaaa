<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use App\Models\OrderModel; 

class Admin extends ResourceController
{
    private $orderModel;
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        //
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        //
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
        return redirect()->to('/Admin');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->orderModel->delete($id);
        return redirect()->to('/Admin');
    }
}
