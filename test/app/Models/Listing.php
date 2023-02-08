<?php 

namespace App\Models;

class Listing {
    public function all(){
        return
        [
            [
                'id' => 1,
                'title' => 'fkdfasfwerwqerwqwer',
                'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente provident est quibusdam, repellat 
                impedit assumenda nulla quod cum atque aliquam eveniet ratione voluptate neque rem! Ratione sunt quos fugiat recusandae 
                quam at earum rerum incidunt temporibus sint, veniam nobis quae! Nam enim odio accusamus, dolorum quod harum atque commodi unde.'
            ],
            [
                'id' => 2,
                'title' => 'fkdrga47we8rfhwe',
                'text' => 'Lorem ipsum dolor sit aveniet ratione voluptate neque rem! Ratione sunt quos fug! Nam enim odio accusamus, dolorum quod harum atque commodi unde.'
            ]
        ];
    }
    public static function find($id){
        $listings = self::all();

        foreach($listings as $listing)
        if($listing['id'] == $id) {
            return $listing;
        }
    }
};
?>