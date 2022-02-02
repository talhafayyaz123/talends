<?php
/**
 * Class AdminModelHasRoleSeeder
 *
 * @category Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @link    http://www.amentotech.com
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;

/**
 * Class AdminModelHasRoleSeeder
 */
class AdminModelHasRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('model_has_roles')->insert(
            [
                [
                    'role_id' => '1',
                    'model_id' => '1',
                    'model_type' => 'App\User',
                ],
            ]
        );
    }
}
