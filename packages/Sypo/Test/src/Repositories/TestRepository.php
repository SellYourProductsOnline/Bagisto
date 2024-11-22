<?php

namespace Sypo\Test\Repositories;

use Webkul\Core\Eloquent\Repository;

class TestRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Sypo\Test\Contracts\Test';
    }
}