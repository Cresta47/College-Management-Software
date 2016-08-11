<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;


class install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product-install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("Migrating...");
        Artisan::call("migrate", ['--force' => 'y']); // No Confirmation
        $this->info("Seeding...");
        $this->info("Seeding 'users' Table");
        Artisan::call("db:seed" , ['--class'=>'UsersTableSeeder']);
        $this->info("Seeding 'classes' Table");
        Artisan::call("db:seed" , ['--class'=>'ClassesTableSeeder']);
        $this->info("Seeding 'grades' Table");
        Artisan::call("db:seed" , ['--class'=>'GradesTableSeeder']);
        $this->info("Seeding 'user_details' Table");
        Artisan::call("db:seed" , ['--class'=>'UserDetailsTableSeeder']);
        $this->info("Seeding 'courses' Table");
        Artisan::call("db:seed" , ['--class'=>'CoursesTableSeeder']);
        $this->info("Seeding 'course_user' Table");
        Artisan::call("db:seed" , ['--class'=>'CourseUserTableSeeder']);
        $this->info("Seeding 'grade_user' Table");
        Artisan::call("db:seed" , ['--class'=>'GradeUserTableSeeder']);
    }
}
