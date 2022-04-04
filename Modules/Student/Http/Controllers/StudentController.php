<?php

namespace Modules\Student\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Student\Http\Requests\StudentCreate;
use Modules\Student\Http\Requests\StudentUpdate;
use Modules\Student\Entities\Student;
use Modules\Student\Repository\StudentRepository;
use Modules\Student\Repository\ImageRepository;

class StudentController extends Controller
{
    protected  $studentRepository;
    protected  $imageRepository;
    public function __construct(StudentRepository $studentRepository, ImageRepository $imageRepository)
    {
        $this->studentRepository = $studentRepository;
        $this->imageRepository = $imageRepository;
    }
   

    public function index()
    {
        return view('student::index');
    }

    public function add()
    {
        return view('student::admin.body.student.add_student');
    }

    public function store(StudentCreate $request)
    {

       $student_image = $this->imageRepository->uploadImage($request, 'student_image' , '/images/student/');

        $data =[
            'fullname' => $request->fullname,
            'address' => $request->address,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'pincode' => $request->pincode,
            'classes' => $request->classes,
            'student_image' => $student_image
        ];

        $this->studentRepository->create($data);

        $notification = array(
            'message' => 'Student Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('student.add')->with($notification);

        
    }

    public function manage()
    {
        $students = $this->studentRepository->getAll();
        return view('student::admin.body.student.manage_student',compact('students'));
    }

    public function edit($id)
    {
        $student = $this->studentRepository->getById($id);
        return view('student::admin.body.student.edit_student',compact('student'));
    }

    public function update(StudentUpdate $request)
    {
       
       $student = $this->studentRepository->getById($request->id);

       $data = [
        'fullname' => $request->fullname,
        'address' => $request->address,
        'email' => $request->email,
        'phone_number' => $request->phone_number,
        'pincode' => $request->pincode,
        'classes' => $request->classes,
        ];


       if($request->hasFile('student_image')){
           $student_image = $this->imageRepository->uploadImage($request, 'student_image' , '/images/student/');
           $this->imageRepository->deleteImage($student->student_image);
            $data['student_image'] = $student_image;
        }

        $this->studentRepository->update($request->id,$data);

        $notification = array(
            'message' => 'Student Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('student.manage')->with($notification);

    }

    public function delete(Request $request){

        $student = Student::findorfail($request->id);
        unlink(public_path($student->student_image));
        $student->delete();
        $notification = array(
            'message' => 'Student Delete Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('student.manage')->with($notification);

    }

    public function view($id)
    {
        $student = Student::findorfail($id);
        return view('student::admin.body.student.view_student',compact('student'));
    }

}
