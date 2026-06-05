<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Seed a Generation
        $generationId = DB::table('generations')->insertGetId([
            'name' => 'Generation 10',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2. Seed a Term linked to that generation
        $termId = DB::table('terms')->insertGetId([
            'name' => 'Term 1',
            'generation_id' => $generationId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 3. Seed a Class
        $classId = DB::table('classes')->insertGetId([
            'name' => 'Class WBD-A',
            'Description' => 'Web Development Advanced Class Bootcamp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 4. Seed a Subject
        $subjectId = DB::table('subjects')->insertGetId([
            'name' => 'Laravel Framework',
            'Description' => 'Backend development course using PHP Laravel MVC.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 5. Seed a Teacher
        $teacherId = DB::table('teachers')->insertGetId([
            'Frist_name' => 'Sopheap',
            'Last_name' => 'Chan',
            'email' => 'teacher.sopheap@school.edu.kh',
            'Phone' => '012345678',
            'Profile' => 'https://placehold.co/100',
            'password' => Hash::make('password123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 6. Seed a Student linked to the generation
        $studentId = DB::table('students')->insertGetId([
            'Student_id' => 'STU-2026-001',
            'profile' => 'https://placehold.co/100',
            'first_name' => 'Samnang',
            'last_name' => 'Sim',
            'gender' => 'male',
            'email' => 'samnang.sim@student.com',
            'password' => Hash::make('password123'),
            'province' => 'Phnom Penh',
            'generation_id' => $generationId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 7. Attach relationships into pivot tables
        DB::table('add_class_to_terms')->insert([
            'term_id' => $termId,
            'class_id' => $classId,
        ]);

        DB::table('student_classes')->insert([
            'student_id' => $studentId,
            'class_id' => $classId,
        ]);

        DB::table('teacher_class_subjects')->insert([
            'teacher_id' => $teacherId,
            'class_id' => $classId,
            'subject_id' => $subjectId,
        ]);
    }
}