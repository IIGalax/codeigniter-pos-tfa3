<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $model = new CustomerModel();

        $customers = $model->findAll();

        return view('customers', [
            'customers' => $customers
        ]);
    }

    public function newCustomer()
    {
        return view('customers/new');
    }

    public function create()
    {
        $model = new CustomerModel();

        $rules = [
            'full_name' => 'required',
            'email'     => 'required|valid_email',
            'phone'     => 'permit_empty'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $data = [
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
            'phone'     => $this->request->getPost('phone')
        ];

        $model->insert($data);

        return redirect()->to('/customers');
    }

    public function edit($id)
{
    $model = new CustomerModel();

    $customer = $model->find($id);

    if (!$customer) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException(
            'Customer not found'
        );
    }

    return view('customers/edit', [
        'customer' => $customer
    ]);
}

    public function update($id)
    {
        $model = new CustomerModel();

        $rules = [
            'full_name' => 'required',
            'email'     => 'required|valid_email',
            'phone'     => 'permit_empty'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput();
        }

        $data = [
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
            'phone'     => $this->request->getPost('phone')
        ];

        $model->update($id, $data);

        return redirect()->to('/customers');
    }
}