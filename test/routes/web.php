<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'descripiton' => 'Lorem ipsum dolor Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum quidem dolor nihil temporibus, odio minima voluptate dignissimos itaque rem omnis. Repudiandae quo adipisci, corporis voluptate veniam id vitae aperiam sequi consectetur sint! Quaerat, dolorum fugit.sit amet consectetur adipisicing elit. Eum omnis numquam, qui optio reprehenderit sequi eveniet doloribus. Illum alias soluta ratione quia maiores itaque est perferendis exercitationem placeat culpa aut magni possimus expedita dolorem facilis corporis commodi aliquid, dolore debitis explicabo harum ad beatae perspiciatis praesentium! Quae in laborum deleniti.'
            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'descripiton' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum omnis numquam, qui optio reprehenderit sequi eveniet doloribus. Illum alias soluta ratione quia maiores itaque est perferendis exercitationem placeat culpa aut magni possimus expedita dolorem facilis corporis commodi aliquid, dolore debitis explicabo harum ad beatae perspiciatis praesentium! Quae in laborum deleniti.'
            ],
            [
                'id' => 3,
                'title' => 'Listing three',
                'descripiton' => 'Lorem ipsum dolor Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, nulla eaque fugit tempora minus debitis repudiandae iusto ipsam dicta. Ex officia quibusdam cum fugiat nobis quo tempore dolorum asperiores deleniti eligendi pariatur vel omnis, minus provident labore quaerat explicabo, quis beatae quisquam placeat assumenda reprehenderit cumque saepe tenetur? Quas quae commodi autem impedit laboriosam provident unde eligendi porro dolores ducimus molestiae, libero, doloremque ad enim. Nulla provident quas quod mollitia unde sed in praesentium nobis eaque odio voluptates perspiciatis eligendi fugit, itaque soluta dolor et a molestiae voluptate magni maiores! Unde voluptatem pariatur, corporis repudiandae neque in, eius error, fugiat nisi deserunt quibusdam. Rerum aperiam ipsum id quisquam laudantium, excepturi, doloremque sapiente voluptas repudiandae fugiat deserunt beatae quam neque nemo molestiae necessitatibus rem eaque similique repellendus quo quaerat porro. Sapiente, quo nostrum sit quasi qui voluptatibus, quisquam possimus repellat animi excepturi hic ullam, suscipit corporis eveniet quidem aperiam. Expedita maiores eum aut, quo, labore molestias veniam, a provident alias accusantium odio explicabo doloremque distinctio fugit cupiditate qui. Necessitatibus eum unde ex? Maiores laborum laboriosam, ea sapiente et exercitationem aliquid rerum ullam voluptates fugit eaque voluptatibus dolorem iste obcaecati sed quia assumenda? Laudantium quod nobis hic dolorum explicabo quis necessitatibus sapiente libero eum sed voluptas veritatis ipsum quos, ad assumenda. Deleniti quibusdam sunt quod libero aut tenetur eligendi exercitationem incidunt provident! Quae earum numquam beatae iure. Saepe optio vero sit molestias eius possimus praesentium illum libero aliquam quo? Optio alias accusantium aut modi cupiditate ea! Id ea delectus debitis dicta quaerat provident, quod quo temporibus sunt, ullam facilis perferendis obcaecati nostrum eaque sed est exercitationem corporis assumenda necessitatibus? Cumque nihil quisquam eaque officia rerum iste dignissimos eum. Porro cupiditate veniam saepe in. Maiores omnis autem sint exercitationem dolorem ullam eum provident soluta dolore quaerat, minima minus rerum cupiditate! Dolores, enim quam?sit amet consectetur adipisicing elit. Eum omnis numquam, qui optio reprehenderit sequi eveniet doloribus. Illum alias soluta ratione quia maiores itaque est perferendis exercitationem placeat culpa aut magni possimus expedita dolorem facilis corporis commodi aliquid, dolore debitis explicabo harum ad beatae perspiciatis praesentium! Quae in laborum deleniti.'
            ]
        ]
    ]);
});
