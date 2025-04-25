<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'iPhone 15',
            'slug' => 'iphone-15',
            'description' => 'Новый iPhone 15 с отличной камерой',
            'category_id' => 3, // Смартфоны
        ]);

        Product::create([
            'title' => 'Чехол для iPhone',
            'slug' => 'chehol-iphone',
            'description' => 'Силиконовый чехол для iPhone',
            'category_id' => 4, // Аксессуары
        ]);

        Product::create([
            'title' => 'Наушники AirPods Pro',
            'slug' => 'naushniki-airpods-pro',
            'description' => 'Беспроводные наушники с активным шумоподавлением',
            'category_id' => 5, // Наушники
        ]);

        Product::create([
            'title' => 'Кейс для наушников',
            'slug' => 'keis-dlya-naushnikov',
            'description' => 'Кейс для хранения и зарядки наушников',
            'category_id' => 6, // Аксессуары для наушников
        ]);
            

        Product::create([
            'title' => 'Материнская плата ASUS',
            'slug' => 'mat-plata-asus',
            'description' => 'Материнская плата для сборки ПК',
            'category_id' => 8, // Материнские платы
        ]);

        Product::create([
            'title' => 'Процессор Intel Core i7',
            'slug' => 'protsessor-intel-core-i7',
            'description' => 'Процессор Intel Core i7 10-го поколения',
            'category_id' => 9, // Процессоры
        ]);

        Product::create([
            'title' => 'Видеокарта NVIDIA GeForce RTX 3080',
            'slug' => 'videokarta-nvidia-geforce-rtx-3080',
            'description' => 'Видеокарта для игр и работы с графикой',
            'category_id' => 10, // Видеокарты
        ]);

        Product::create([
            'title' => 'Блок питания Corsair 650W',
            'slug' => 'blok-pitaniya-corsair-650w',
            'description' => 'Блок питания мощностью 650W',
            'category_id' => 11, // Блоки питания
        ]);
        
        Product::create([
            'title' => 'Корпус Cooler Master',
            'slug' => 'korpus-cooler-master',
            'description' => 'Корпус для сборки ПК с хорошей вентиляцией',
            'category_id' => 12, // Корпуса
        ]);
    }
}

