<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\Categories\IndexRequest;
use App\Services\Api\CategoryService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends ApiController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param CategoryService $categoryService
     * @return \Illuminate\Http\JsonResponse
     * @throws \App\Exceptions\CheckAuthenticationException
     * @throws \App\Exceptions\CheckAuthorizationException
     * @throws \App\Exceptions\NotFoundException
     * @throws \App\Exceptions\QueryException
     * @throws \App\Exceptions\ServerException
     * @throws \App\Exceptions\UnprocessableEntityException
     */
    public function index(CategoryService $categoryService){
        return $this->getData(function () use ($categoryService){
            return $categoryService->index();
        });
    }

    /**
     * @param IndexRequest $request
     * @param CategoryService $categoryService
     * @return \Illuminate\Http\JsonResponse
     * @throws \App\Exceptions\CheckAuthenticationException
     * @throws \App\Exceptions\CheckAuthorizationException
     * @throws \App\Exceptions\NotFoundException
     * @throws \App\Exceptions\QueryException
     * @throws \App\Exceptions\ServerException
     * @throws \App\Exceptions\UnprocessableEntityException
     */
    public function create(IndexRequest $request, CategoryService $categoryService){
        $param = $request->all();
        return $this->doRequest(function () use ($param, $categoryService){
            return $categoryService->create($param);
        });
    }

    /**
     * @param IndexRequest $request
     * @param CategoryService $categoryService
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \App\Exceptions\CheckAuthorizationException
     * @throws \App\Exceptions\NotFoundException
     * @throws \App\Exceptions\QueryException
     * @throws \App\Exceptions\ServerException
     * @throws \App\Exceptions\UnprocessableEntityException
     */
    public function edit(IndexRequest $request, CategoryService $categoryService, $id){
        $param = $request->all();
        return $this->doRequest(function () use ($param, $categoryService, $id){
            return $categoryService->update($id, $param);
        });
    }

    /**
     * @param $id
     * @param CategoryService $categoryService
     * @return \Illuminate\Http\JsonResponse
     * @throws \App\Exceptions\CheckAuthorizationException
     * @throws \App\Exceptions\NotFoundException
     * @throws \App\Exceptions\QueryException
     * @throws \App\Exceptions\ServerException
     * @throws \App\Exceptions\UnprocessableEntityException
     */
    public function destroy($id, CategoryService $categoryService){
        return $this->doRequest(function () use ($id, $categoryService){
            return $categoryService->delete($id);
        });
    }


}
