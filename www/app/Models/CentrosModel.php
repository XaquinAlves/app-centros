<?php

declare(strict_types=1);

namespace Com\Daw2\Models;

use Com\Daw2\Core\BaseDbModel;

class CentrosModel extends BaseDbModel
{
    public function getCentrosByFilter(array $filters)
    {
        $sql = "SELECT centro_educativo, concello, codigo
                FROM centros.centros";
    }

    private function buildQuery(array $filters)
    {
        $params = [];
        $conditions = [];


    }
}