<?php

use Faker\Factory as Faker;
use App\Models\table;
use App\Repositories\tableRepository;

trait MaketableTrait
{
    /**
     * Create fake instance of table and save it in database
     *
     * @param array $tableFields
     * @return table
     */
    public function maketable($tableFields = [])
    {
        /** @var tableRepository $tableRepo */
        $tableRepo = App::make(tableRepository::class);
        $theme = $this->faketableData($tableFields);
        return $tableRepo->create($theme);
    }

    /**
     * Get fake instance of table
     *
     * @param array $tableFields
     * @return table
     */
    public function faketable($tableFields = [])
    {
        return new table($this->faketableData($tableFields));
    }

    /**
     * Get fake data of table
     *
     * @param array $postFields
     * @return array
     */
    public function faketableData($tableFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            
        ], $tableFields);
    }
}
