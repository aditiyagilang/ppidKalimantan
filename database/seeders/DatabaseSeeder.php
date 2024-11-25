<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('11223344'),
            'address' => '123 Main Street, New York, NY',
            'phone' => '1234567890',
            'photo' => 'default-photo.jpg',
            'remember_token' => \Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('public_information_requests')->insert([
                'request_category' => $faker->randomElement(['individual', 'organization', 'group']),
                'code' => 'PIP' . $faker->bothify('#######'),
                'nik' => $faker->numerify('##############'),
                'full_name' => $faker->name,
                'file' => null,
                'ktp_url' => $faker->optional()->imageUrl(640, 480, 'business', true, 'KTP'),
                'address' => $faker->address,
                'detail_information' => $faker->sentence(10),
                'reason' => $faker->sentence(10),
                'email' => $faker->unique()->safeEmail,
                'phone_number' => $faker->numerify('08###########'),
                'job' => $faker->jobTitle,
                'status' => $faker->randomElement(['approved', 'checking', 'rejected']),
                'reject_reason' => $faker->sentence(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // $requestIds = DB::table('public_information_requests')->pluck('id')->toArray();

        foreach (range(1, 10) as $index) {
            DB::table('objection')->insert([
                // 'request_id' => $faker->optional()->randomElement($requestIds),
                'code' => 'PKB' . $faker->bothify('#######'),
                'nik' => $faker->numerify('##############'),
                'full_name' => $faker->name,
                'address' => $faker->address,
                'phone_number' => $faker->numerify('08###########'),
                'case_position' => $faker->sentence(15),
                'reason' => $faker->sentence(10),
                'file' => $faker->optional()->imageUrl(640, 480, 'business', true, 'Objection File'),
                'status' => $faker->randomElement(['approved', 'rejected', 'checking']),
                'reject_reason' => $faker->sentence(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
