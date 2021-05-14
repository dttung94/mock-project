<?php

namespace App\Contracts\Services\Api;

interface DepartmentServiceInterface{
    public function index();
    public function create($param);
    public function update($id, $param);
    public function delete($id);
}
