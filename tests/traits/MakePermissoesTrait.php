<?php

use Faker\Factory as Faker;
use App\Models\Permissoes;
use App\Repositories\PermissoesRepository;

trait MakePermissoesTrait
{
    /**
     * Create fake instance of Permissoes and save it in database
     *
     * @param array $permissoesFields
     * @return Permissoes
     */
    public function makePermissoes($permissoesFields = [])
    {
        /** @var PermissoesRepository $permissoesRepo */
        $permissoesRepo = App::make(PermissoesRepository::class);
        $theme = $this->fakePermissoesData($permissoesFields);
        return $permissoesRepo->create($theme);
    }

    /**
     * Get fake instance of Permissoes
     *
     * @param array $permissoesFields
     * @return Permissoes
     */
    public function fakePermissoes($permissoesFields = [])
    {
        return new Permissoes($this->fakePermissoesData($permissoesFields));
    }

    /**
     * Get fake data of Permissoes
     *
     * @param array $postFields
     * @return array
     */
    public function fakePermissoesData($permissoesFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'user' => $fake->word,
            'acesso' => $fake->randomDigitNotNull
        ], $permissoesFields);
    }
}
