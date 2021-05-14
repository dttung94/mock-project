<?php

namespace App\Repositories;

use App\Contracts\Repositories\DepartmentRepositoryInterface;

use App\Models\Department;


class DepartmentRepository extends BaseRepository implements DepartmentRepositoryInterface
{
    /**
     * DepartmentRepository constructor.
     * @param Department $department
     */
    public function __construct(Department $department)
    {
        parent::__construct($department);
    }
}
