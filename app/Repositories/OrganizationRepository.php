<?php 

namespace App\Repositories;

use Lakshmaji\Repository\Contracts\RepositoryInterface;
use Lakshmaji\Repository\Eloquent\Repository;

/**
 * Class OrganizationRepository
 * @package App\Repositories
 */
class OrganizationRepository extends Repository
{

    /**
     * @return string
     */
    public function model()
    {
        return 'App\Models\Organization';
    }
}