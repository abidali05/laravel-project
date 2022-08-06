<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
  use App\Models\Text;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Text::factory(1000)->create();
        $this->call([
            
        ]);
    }
}