<?php


namespace Yunxuan\LightingDemo\Controller\Index;


use Yunxuan\Lighting\Controller;
use Yunxuan\LightingDemo\Model\StudentModel;

class Index extends Controller
{
    public function main()
    {
        $result = StudentModel::getInstance()
            ->fields('age', 'name')
            ->in('age', [14,16])
            ->asc('age')
            ->page(1)
            ->count(2)
            ->select();

        $this->response->json($result);
    }
}