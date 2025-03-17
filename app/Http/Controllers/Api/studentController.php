<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Requests\UpdateStudentPartialRequest;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\MockObject\ReturnValueNotConfiguredException;


class studentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        // if ($students->isEmpty()) {
        //    $data = [
        //        'message' => 'No se encontraron estudiantes',
        //        'status' => 200
        //    ];
        //    return response()->json($data, 404);
        //}

        $data = [
            'students' => $students,
            'status' => 200
        ];

        return response()->json($data, 200);
    }
    

    public function store(StoreStudentRequest $request)
    {
    $student = Student::create($request->validated());

    return response()->json([
        'message' => 'Estudiante creado correctamente',
        'student' => $student
        ], 201);
    }


    public function show(Student $student)
    {
        return response()->json([
            'student' => $student,
            'status'=> 200
        ], 200);
    }

    public function destroy(Student $student)
    {
        $student->delete();
    
        return response()->json([
            'message' => 'Estudiante eliminado correctamente'
        ], 200);
    }
    
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());

        return response()->json([
            'message' => 'Estudiante actualizado correctamente',
            'student' => $student
        ], 200);
    }

    public function updatePartial(UpdateStudentPartialRequest $request, Student $student)
    {
        $student->update($request->validated());

        return response()->json([
            'message' => 'Estudiante actualizado parcialmente',
            'student' => $student
        ], 200);
    }

}
