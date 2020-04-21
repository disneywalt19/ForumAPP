<?php


use Illuminate\Database\Seeder;
use App\Channel;



class ChannelsTableSeeder extends Seeder {
    
	/**
     * Run the database seeds.
     *
     * @return void
     */
	
    public function run() {
		
		$channels= Channel::create([
			
			'name' => 'Laravel 7.0',
			
			'slug' => Str::slug('Laravel 7.0')
			
		]);
		
		$channels= Channel::create([
			
			'name' => 'Vue js 3',
			
			'slug' => Str::slug('Vue js 3')
			
		]);
		
		$channels= Channel::create([
			
			'name' => 'Angular 7.0',
			
			'slug' => Str::slug('Angular 7.0')
			
		]);
		
		$channels= Channel::create([
			
			'name' => 'Node js',
			
			'slug' => Str::slug('Node js')
			
		]);
        
    }
}
