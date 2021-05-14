<?php

namespace App\Services\Api;

use App\Contracts\Repositories\CategoryRepositoryInterface;
use App\Contracts\Repositories\UserRepositoryInterface;
use App\Contracts\Services\Api\CategoryServiceInterface;
use App\Contracts\Services\Api\UserServiceInterface;
use App\Services\AbstractService;

class CategoryService extends AbstractService implements CategoryServiceInterface
{
    protected $categoryRepository;

    /**
     * CategoryService constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     */

    public function __construct(CategoryRepositoryInterface  $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @param $params
     * @return mixed
     */
    public function index(){
        return $this->categoryRepository->getColumns()->get();
    }

    /**
     * @param $param
     * @return mixed
     */
    public function create($param){
        return $this->categoryRepository->store($param);
    }

    /**
     * @param $id
     * @param $param
     * @return mixed
     */
    public function update($id, $param){
        return $this->categoryRepository->update($this->categoryRepository->find($id), $param);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id){
        return $this->categoryRepository->destroy($this->categoryRepository->find($id));
    }
}
