<?php

namespace App\Contracts\Services\Api;

interface CategoryServiceInterface{
    public function index();
    public function create($param);
    public function update($id, $param);
    public function delete($id);
}
