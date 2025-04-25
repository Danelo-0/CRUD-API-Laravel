<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Корневые категории
        $electronics = ProductCategory::create(['title' => 'Сматфоны и гаджеты']);
        $componentsAndPс= ProductCategory::create(['title' => 'Комплектующие и ПК']);

        // Подкатегории
        $phones = ProductCategory::create(['title' => 'Смартфоны', 'parent_id' => $electronics->id]);
        $smartphoneAccessories = ProductCategory::create(['title' => 'Аксессуары для смартфонов', 'parent_id' => $phones->id]);
        $headphones = ProductCategory::create(['title' => 'Наушники и гарнитуры', 'parent_id' => $electronics->id]);
        $headphonesAccessories = ProductCategory::create(['title' => 'Аксессуары для наушников', 'parent_id' => $headphones->id]);

        $mainComponents = ProductCategory::create(['title' => 'Основные комплектующие', 'parent_id' => $componentsAndPс->id]);
        $motherboards = ProductCategory::create(['title' => 'Материнские платы', 'parent_id' => $mainComponents->id]);
        $processors = ProductCategory::create(['title' => 'Процессоры', 'parent_id' => $mainComponents->id]);
        $videoCards = ProductCategory::create(['title' => 'Видеокарты', 'parent_id' => $mainComponents->id]);
        $powerSupplies = ProductCategory::create(['title' => 'Блоки питания', 'parent_id' => $mainComponents->id]);
        $cases = ProductCategory::create(['title' => 'Корпуса', 'parent_id' => $mainComponents->id]);
    }
}
