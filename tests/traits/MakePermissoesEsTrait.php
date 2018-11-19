<?php

use Faker\Factory as Faker;
use App\Models\PermissoesEs;
use App\Repositories\PermissoesEsRepository;

trait MakePermissoesEsTrait
{
    /**
     * Create fake instance of PermissoesEs and save it in database
     *
     * @param array $permissoesEsFields
     * @return PermissoesEs
     */
    public function makePermissoesEs($permissoesEsFields = [])
    {
        /** @var PermissoesEsRepository $permissoesEsRepo */
        $permissoesEsRepo = App::make(PermissoesEsRepository::class);
        $theme = $this->fakePermissoesEsData($permissoesEsFields);
        return $permissoesEsRepo->create($theme);
    }

    /**
     * Get fake instance of PermissoesEs
     *
     * @param array $permissoesEsFields
     * @return PermissoesEs
     */
    public function fakePermissoesEs($permissoesEsFields = [])
    {
        return new PermissoesEs($this->fakePermissoesEsData($permissoesEsFields));
    }

    /**
     * Get fake data of PermissoesEs
     *
     * @param array $postFields
     * @return array
     */
    public function fakePermissoesEsData($permissoesEsFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'user' => $fake->word,
            'acesso' => $fake->randomDigitNotNull
        ], $permissoesEsFields);
    }
}
