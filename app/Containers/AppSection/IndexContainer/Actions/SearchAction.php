<?php

namespace App\Containers\AppSection\IndexContainer\Actions;

use App\Containers\AppSection\BrandContainer\Models\Brand;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;
use Exception;

use function Amp\Iterator\toArray;

class SearchAction extends ParentAction
{
    public function __construct(
        //  protected IndexRepository $repository
    )
    {
    }


    /**
     * @param $data
     * @return mixed
     * @throws NotFoundException
     */
    public function run($data): mixed
    {
        try {
            $result['search'] = Brand::query()->whereRaw('LOWER(name) LIKE ?', ['%' . strtolower($data['search']) . '%'])->orWhereRaw('LOWER(description) LIKE ?', ['%' . strtolower($data['search']) . '%'])->get();
            $result['forsearch'] = $data['search'];
            return $result;
        } catch (Exception $e) {
            throw new NotFoundException();
        }
    }
}
