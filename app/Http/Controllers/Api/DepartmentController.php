<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\Users\IndexRequest;
use App\Services\Api\DepartmentService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends ApiController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param DepartmentService $departmentService
     * @return \Illuminate\Http\JsonResponse
     * @throws \App\Exceptions\CheckAuthenticationException
     * @throws \App\Exceptions\CheckAuthorizationException
     * @throws \App\Exceptions\NotFoundException
     * @throws \App\Exceptions\QueryException
     * @throws \App\Exceptions\ServerException
     * @throws \App\Exceptions\UnprocessableEntityException
     */
    public function index(DepartmentService $departmentService){
        return $this->getData(function () use ($departmentService){
            return $departmentService->index();
        });
    }

    /**
     * @param IndexRequest $request
     * @param DepartmentService $departmentService
     * @return \Illuminate\Http\JsonResponse
     * @throws \App\Exceptions\CheckAuthorizationException
     * @throws \App\Exceptions\NotFoundException
     * @throws \App\Exceptions\QueryException
     * @throws \App\Exceptions\ServerException
     * @throws \App\Exceptions\UnprocessableEntityException
     */
    public function create(IndexRequest $request, DepartmentService $departmentService){
        $param = $request->all();
        return $this->doRequest(function () use ($param, $departmentService){
            return $departmentService->create($param);
        });
    }

    /**
     * @param IndexRequest $request
     * @param DepartmentService $departmentService
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \App\Exceptions\CheckAuthorizationException
     * @throws \App\Exceptions\NotFoundException
     * @throws \App\Exceptions\QueryException
     * @throws \App\Exceptions\ServerException
     * @throws \App\Exceptions\UnprocessableEntityException
     */
    public function edit(IndexRequest $request, DepartmentService $departmentService, $id){
        $param = $request->all();
        return $this->doRequest(function () use ($param, $departmentService, $id){
            return $departmentService->update($id, $param);
        });
    }

    /**
     * @param $id
     * @param DepartmentService $departmentService
     * @return \Illuminate\Http\JsonResponse
     * @throws \App\Exceptions\CheckAuthorizationException
     * @throws \App\Exceptions\NotFoundException
     * @throws \App\Exceptions\QueryException
     * @throws \App\Exceptions\ServerException
     * @throws \App\Exceptions\UnprocessableEntityException
     */
    public function destroy($id, DepartmentService $departmentService){
        return $this->doRequest(function () use ($id, $departmentService){
            return $departmentService->delete($id);
        });
    }


}
