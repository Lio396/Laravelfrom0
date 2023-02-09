<?php

namespace App\Models\Listing;
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();

        Listing::create([
        'name'=>'gugus',
        'tags'=>'gugu',
        'title'=>'Acme statusca',
        'email'=>'jas@comar',
        'website'=>'https://www.acme.com',
        'location'=>'Lorem ipsum dolor sit amet consectetur 
        adipisicing elit. Facilis blanditiis rem numquam. Fugiat 
        corrupti alias, laudantium sunt nobis earum a magnam, odio 
        ut cumque impedit minima sit, esse at voluptate?'
        ]);
        Listing::create([
        'name'=>'gujf',
        'tags'=>'asfdsf',
        'title'=>'Acme dsfsdaeatusca',
        'email'=>'jas@comasdafdr',
        'website'=>'https://www.adfdsfadfcme.com',
        'location'=>'Lorem ipsum dolor sfdasfdasfasfasdfasfasfsdafsfsfafdasfdssasit amet consectetur 
        adipisicing elit. Facilis blanditiis rem numquam. Fugiat 
        corrupti alias, laudantium sunt nobis earum a magnam, odio 
        ut cumque impedit minima sit, esse at voluptate?'
        ]);
    }
}
