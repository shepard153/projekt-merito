<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesAndPermissionsSeeder::class
        ]);

         $admin = \App\Models\User::factory()->create([
             'name'     => 'Test User',
             'email'    => 'test@example.com',
             'password' => 'test',
         ])->assignRole('admin');

         $users = \App\Models\User::factory(50)->create()->each(function (\App\Models\User $user) {
             $user->assignRole('user');
         });

         \App\Models\Post::factory(100)->create([
             'author_id' => $admin
         ])->each(function (\App\Models\Post $post) use ($users) {
             $post->comments()->saveMany(\App\Models\Comment::factory(rand(21, 37))->state([
                 'post_id' => $post->getAttribute('id')
             ])->sequence(fn () => [
                 'user_id' => $users->random()->getAttribute('id')
             ])->create());
         });
    }
}
