<?php

use App\User;
use App\Role;
use App\Country;
use App\Gender;
use App\Education;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Admin User
        if(User::where('email','admin@admin.com')->get()->isEmpty()) {

            $user = User::create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('1234590')
            ]);

            $role = Role::create([
                'name' => 'admin'
            ]);

            $user->roles()->save($role);;
        }

        // Genders
        Gender::truncate();
        $gender = new Gender();
        $gender->name = 'Masculino';
        $gender->save();

        $gender = new Gender();
        $gender->name = 'Femenino';
        $gender->save();

        $gender = new Gender();
        $gender->name = 'Otros';
        $gender->save();

        // Education Levels
        $education = new Education();
        $education->name = 'Inicial';
        $education->save();

        $education = new Education();
        $education->name = 'Primaria';
        $education->save();
        
        $education = new Education();
        $education->name = 'Secundaria';
        $education->save();

        $education = new Education();
        $education->name = 'Superior';
        $education->save();
        
        // Countries
        Country::truncate();
        $client = new Client();
        $res = $client->request('GET', 'https://restcountries.eu/rest/v1/all');
        $result = $res->getBody();
        $countries = json_decode($result, true);
        $url = 'https://restcountries.eu/rest/v1/name/[COUNTRY]?fullText=true';
        $url_var = '';
        $countries_final = [];

        // Spanish name
        foreach ($countries as $cntry) {
            $name = strtolower($cntry['name']);
            $url_var = str_replace("[COUNTRY]",$name,$url);
            $res = $client->request('GET', $url_var);
            $result = $res->getBody();
            $data = json_decode($result, true);

            $countries_final[] = empty($data[0]['translations']['es']) ? $cntry['name'] : $data[0]['translations']['es'];
        }

        sort($countries_final);

        // Store countries
        foreach ($countries_final as $cntry) {
            $country = new Country();
            $country->name = $cntry;
            $country->save();
        }

        Model::reguard();
    }
}
