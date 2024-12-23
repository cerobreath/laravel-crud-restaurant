<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
        ]);
        // Categories
        DB::table('categories')->insert([
            ['name' => 'Drinks', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Main Courses', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Desserts', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Starters', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Snacks', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Menus
        DB::table('menus')->insert([
            [
                'name' => 'Coca-Cola',
                'price' => 1.50,
                'image' => 'coke.jpg',
                'description' => 'Refreshing Coca-Cola',
                'category_id' => 1, // Drinks
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sprite',
                'price' => 1.40,
                'image' => 'sprite.jpg',
                'description' => 'Crisp and clear Sprite',
                'category_id' => 1, // Drinks
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cheeseburger',
                'price' => 5.00,
                'image' => 'burger.jpg',
                'description' => 'Juicy cheeseburger with fresh lettuce and tomatoes',
                'category_id' => 2, // Main Courses
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chicken Alfredo',
                'price' => 8.50,
                'image' => 'alfredo.jpg',
                'description' => 'Creamy chicken Alfredo pasta',
                'category_id' => 2, // Main Courses
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Brownie',
                'price' => 3.00,
                'image' => 'brownie.jpg',
                'description' => 'Delicious chocolate brownie',
                'category_id' => 3, // Desserts
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'French Fries',
                'price' => 2.50,
                'image' => 'fries.jpg',
                'description' => 'Golden and crispy French fries',
                'category_id' => 4, // Starters
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nachos',
                'price' => 4.00,
                'image' => 'nachos.jpg',
                'description' => 'Crispy nachos with melted cheese',
                'category_id' => 5, // Snacks
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Latte',
                'price' => 3.50,
                'image' => 'latte.jpg',
                'description' => 'Rich and creamy latte coffee',
                'category_id' => 1, // Drinks
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ice Cream',
                'price' => 2.50,
                'image' => 'icecream.jpg',
                'description' => 'Vanilla ice cream with chocolate topping',
                'category_id' => 3, // Desserts
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Tables
        DB::table('tables')->insert([
            ['name' => 'Table 1', 'status' => 'available', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Table 2', 'status' => 'available', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Table 3', 'status' => 'occupied', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Table 4', 'status' => 'available', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Table 5', 'status' => 'reserved', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Table 6', 'status' => 'available', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Table 7', 'status' => 'available', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Table 8', 'status' => 'occupied', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Table 9', 'status' => 'reserved', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Table 10', 'status' => 'available', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
