<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        [
        [
            'SSN'       => 'RDZFNC96D23D548N',
            'name'      => 'Paolo',
            'role'  => 'yes',
            'surname'       => 'Rossi',
            'address'       => 'via passeggiata goethe, 28',
            'gender'        => 'male',
            'telephone_number'  => '3452377520',
            'date_of_birth'     => '1950-03-23',
            'email'     => 'owner@slurp.com',
            'password'  => bcrypt('password'),
            'created_at'    => date('Y-m-d h:i:s'),
            'updated_at'    => date('Y-m-d h:i:s')
            ],
            [
            'SSN'       => 'RDZFNC96D23D548N',
            'name'      => 'Francesco',
            'role'  => 'no',
            'surname'       => 'Ardizzoni',
            'address'       => 'corso italia, 95',
            'gender'        => 'male',
            'telephone_number'  => '3452377513',
            'date_of_birth'     => '1996-04-23',
            'email'     => 'ardi@slurp.com',
            'password'  => bcrypt('password'),
             'created_at'    => date('Y-m-d h:i:s'),
             'updated_at'    => date('Y-m-d h:i:s')
        ],
        [
            'SSN'       => 'BRBMNC98L61C469Y',
            'name'      => 'Monica',
            'role'  => 'no',
            'surname'       => 'Barbieri',
            'address'       => 'via croce, 67',
            'gender'        => 'female',
            'telephone_number'  => '3441677914',
            'date_of_birth'     => '1999-07-21',
            'email'     => 'monica@slurp.com',
            'password'  => bcrypt('password'),
             'created_at'    => date('Y-m-d h:i:s'),
             'updated_at'    => date('Y-m-d h:i:s')
           ],
           [
           'SSN'       => 'RDZFNC96D23D548N',
           'name'      => 'Greta',
           'role'  => 'no',
           'surname'       => 'Cottica',
           'address'       => 'corso francia, 98',
           'gender'        => 'female',
           'telephone_number'  => '3452357513',
           'date_of_birth'     => '1998-04-23',
           'email'     => 'greta@slurp.com',
           'password'  => bcrypt('password'),
            'created_at'    => date('Y-m-d h:i:s'),
            'updated_at'    => date('Y-m-d h:i:s')
        ],
        [
            'SSN'       => 'DNSBRT2064TH92S7',
            'name'      => 'Denis',
            'role'  => 'no',
            'surname'       => 'Brotti',
            'address'       => 'via statale, 114',
            'gender'        => 'male',
            'telephone_number'  => '3628677914',
            'date_of_birth'     => '2000-01-01',
            'email'     => 'denis@slurp.com',
            'password'  => bcrypt('password'),
             'created_at'    => date('Y-m-d h:i:s'),
             'updated_at'    => date('Y-m-d h:i:s')
        ],
        [
            'SSN'       => 'MRCNCLV69Y86DIJC',
            'name'      => 'Maria',
            'role'  => 'no',
            'surname'       => 'Conclave',
            'address'       => 'via stalingrado, 3',
            'gender'        => 'female',
            'telephone_number'  => '3441687360',
            'date_of_birth'     => '1994-09-13',
            'email'     => 'maria@slurp.com',
            'password'  => bcrypt('password'),
             'created_at'    => date('Y-m-d h:i:s'),
            'updated_at'    => date('Y-m-d h:i:s')
        ],
        [
            'SSN'       => 'NCLBRN90P375DHC7',
            'name'      => 'Nicola',
            'role'  => 'no',
            'surname'       => 'Bruni',
            'address'       => 'via degli orologi, 16',
            'gender'        => 'male',
            'telephone_number'  => '3874966885',
            'date_of_birth'     => '1990-12-22',
            'email'     => 'nicola@slurp.com',
            'password'  => bcrypt('password'),
             'created_at'    => date('Y-m-d h:i:s'),
             'updated_at'    => date('Y-m-d h:i:s')
        ],
        [
            'SSN'       => 'GFGBRT87H65F435T',
            'name'      => 'Gianfilippo',
            'role'  => 'no',
            'surname'       => 'Brutti',
            'address'       => 'via delle carceri, 647',
            'gender'        => 'male',
            'telephone_number'  => '3454345614',
            'date_of_birth'     => '1995-03-01',
            'email'     => 'gianfilippo@slurp.com',
            'password'  => bcrypt('password'),
             'created_at'    => date('Y-m-d h:i:s'),
            'updated_at'    => date('Y-m-d h:i:s')
        ],
        [
            'SSN'       => 'LRRSCC56G67H543F',
            'name'      => 'Laura',
            'role'  => 'no',
            'surname'       => 'Secchi',
            'address'       => 'via dei contrari, 7',
            'gender'        => 'female',
            'telephone_number'  => '3554322914',
            'date_of_birth'     => '2009-02-22',
            'email'     => 'laura@slurp.com',
            'password'  => bcrypt('password'),
             'created_at'    => date('Y-m-d h:i:s'),
             'updated_at'    => date('Y-m-d h:i:s')
        ],
        [
            'SSN'       => 'LGBRCH00K52F375G',
            'name'      => 'Luigi',
            'role'  => 'no',
            'surname'       => 'Branchi',
            'address'       => 'via del fisco, 77',
            'gender'        => 'male',
            'telephone_number'  => '3444567814',
            'date_of_birth'     => '1989-07-01',
            'email'     => 'luigi@slurp.com',
            'password'  => bcrypt('password'),
            'created_at'    => date('Y-m-d h:i:s'),
            'updated_at'    => date('Y-m-d h:i:s')
        ],
        [
            'SSN'       => 'STTTDS65G43R027Y',
            'name'      => 'Isotta',
            'role'  => 'no',
            'surname'       => 'Tedeschi',
            'address'       => 'viale germania, 9',
            'gender'        => 'female',
            'telephone_number'  => '3478900914',
            'date_of_birth'     => '1993-01-28',
            'email'     => 'isotta@slurp.com',
            'password'  => bcrypt('password'),
             'created_at'    => date('Y-m-d h:i:s'),
             'updated_at'    => date('Y-m-d h:i:s')
        ]]
        );
    }
}
