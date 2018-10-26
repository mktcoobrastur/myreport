<?php

use Faker\Factory as Faker;
use App\Models\Foto;
use App\Repositories\FotoRepository;

trait MakeFotoTrait
{
    /**
     * Create fake instance of Foto and save it in database
     *
     * @param array $fotoFields
     * @return Foto
     */
    public function makeFoto($fotoFields = [])
    {
        /** @var FotoRepository $fotoRepo */
        $fotoRepo = App::make(FotoRepository::class);
        $theme = $this->fakeFotoData($fotoFields);
        return $fotoRepo->create($theme);
    }

    /**
     * Get fake instance of Foto
     *
     * @param array $fotoFields
     * @return Foto
     */
    public function fakeFoto($fotoFields = [])
    {
        return new Foto($this->fakeFotoData($fotoFields));
    }

    /**
     * Get fake data of Foto
     *
     * @param array $postFields
     * @return array
     */
    public function fakeFotoData($fotoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'id' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $fotoFields);
    }
}
