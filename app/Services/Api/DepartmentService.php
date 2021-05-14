<?php

namespace App\Services\Api;

use App\Contracts\Repositories\DepartmentRepositoryInterface;
use App\Contracts\Services\Api\DepartmentServiceInterface;
use App\Services\AbstractService;

class DepartmentService extends AbstractService implements DepartmentServiceInterface
{
    protected $departmentRepository;

    /**
     * DepartmentService constructor.
     * @param DepartmentRepositoryInterface $departmentRepository
     */
    public function __construct(DepartmentRepositoryInterface  $departmentRepository)
    {
        $this->departmentRepository = $departmentRepository;
    }

    /**
     * @param $params
     * @return mixed
     */
    public function index(){
        return $this->departmentRepository->getColumns()->get();
    }

    /**
     * @param $param
     * @return mixed
     */
    public function create($param){
        return $this->departmentRepository->store($param);
    }

    /**
     * @param $id
     * @param $param
     * @return mixed
     */
    public function update($id, $param){
        return $this->departmentRepository->update($this->departmentRepository->find($id), $param);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id){
        return $this->departmentRepository->destroy($this->departmentRepository->find($id));
    }
}
