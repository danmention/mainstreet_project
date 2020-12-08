<?php


namespace App\Services;


use App\Traits\CurlTrait;

class ApiService
{
    use CurlTrait;

    /**
     * @var array|false|string
     */
    private $base_url;

    public function __construct()
    {
        $this->base_url = getenv('API_URL');
    }

    public function login($payload)
    {
        $endpoint = $this->base_url . '/admin/users/login';
        return $this->postApi($endpoint, $payload);
    }

    public function register($payload)
    {
        $endpoint = $this->base_url . '/customers/new';
        return $this->postApi($endpoint, $payload);
    }

    public function fetchBranches()
    {
        $endpoint = $this->base_url . '/admin/branches';
        return $this->getApi($endpoint);
    }

    public function storeBranch($data)
    {
        $endpoint = $this->base_url . '/admin/branches';
        return $this->postApi($endpoint, $data);
    }

    public function fetchAdminUsers()
    {
        $endpoint = $this->base_url . '/admin/users';
        return $this->getApi($endpoint);
    }

    public function addAdminUser($data)
    {
        $endpoint = $this->base_url . '/admin/users';
        return $this->postApi($endpoint, $data);
    }

    public function editAdminUser($data)
    {
        $endpoint = $this->base_url . '/admin/users/edit';
        return $this->postApi($endpoint, $data);
    }

    public function editBranch($data)
    {
        $endpoint = $this->base_url . '/admin/branches/edit';
        return $this->postApi($endpoint, $data);
    }

    public function storeAdminUser($data)
    {
        $endpoint = $this->base_url . '/admin/users';
        return $this->postApi($endpoint, $data);
    }

    public function fetchLoanProducts()
    {
        $endpoint = $this->base_url . '/admin/loans/products';
        return $this->getApi($endpoint);
    }

    public function showLoanProduct($id)
    {
        $endpoint = $this->base_url . '/admin/loans/products/' . $id;
        return $this->getApi($endpoint);
    }

    public function storeLoanProducts($data)
    {
        $endpoint = $this->base_url . '/admin/loans/products';
        return $this->postApi($endpoint, $data);
    }

    public function fetchLoans()
    {
        $endpoint = $this->base_url . '/admin/loans/';
        return $this->getApi($endpoint);
    }

    public function storeLoan($data)
    {
        $endpoint = $this->base_url . '/admin/loans';
        return $this->postApi($endpoint, $data);
    }

    public function addLoan($data)
    {
        $endpoint = $this->base_url . '/admin/loans/add';
        return $this->postApi($endpoint, $data);
    }

    public function fetchCustomers()
    {
        $endpoint = $this->base_url . '/customers';
        return $this->getApi($endpoint);
    }

    public function fetchAdminDashboard()
    {
        $endpoint = $this->base_url . '/admin/dashboard';
        return $this->getApi($endpoint);
    }

}
