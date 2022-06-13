<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\BloodGroup;
use App\Models\EmployeeDocument;
use App\Repositories\UserRepository;
use App\User;


use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class UserController extends Controller
{
    private $repository;
    private $indexRoute;

    public function __construct(UserRepository $repository, $indexRoute = 'user.index')
    {
        $this->repository = $repository;
        $this->indexRoute = $indexRoute;
    }

    public function index(Request $request)
    {
        $contentData = $this->repository->search($request);
        return view($this->indexRoute, compact('contentData'));
    }

    public function create()
    {
        $wards = $this->repository->getAllWards();
        $roles = $this->repository->getAllRoles();
        $bloodGroups = $this->repository->getAllBloodGroups();
        return view('user.create', compact('wards', 'roles', 'bloodGroups'));
    }

    public function store(CreateUserRequest $request)
    {
        try {
            $validated = $request->validated();
            if ($validated) {
                $checkPhoneDuplication = $this->repository->findByPhoneNumber($request->phone_number);
                $checkEmailDuplication = $this->repository->findByEmail($request->email);
                if ($checkEmailDuplication) {
                    throw new Exception('Email Should Be Unique ');
                } elseif ($checkPhoneDuplication) {
                    throw new Exception('Phone Number Should Be Unique ');
                } else {
                    $data = $this->repository->create($request);
                    return redirect()->route('employee.index')->with('success', 'Successfully Employee Created');
                }
            }
        } catch (Exception $exception) {
            return redirect()->route('employee.index')->with('error', $exception->getMessage());
        }
    }

    public function edit($slug)
    {
        $data = $this->repository->get($slug);
        $wards = $this->repository->getAllWards();
        $roles = $this->repository->getAllRoles();
        $bloodGroups = $this->repository->getAllBloodGroups();
        return view('user.edit', compact('data', 'wards', 'roles', 'bloodGroups'));
    }

    public function update(UpdateUserRequest $request, $slug)
    {
        $data = $this->repository->update($request, $slug);
        return redirect()->route('employee.index')->with('success', 'Successfully Employee Updated');
    }

    public function show($slug)
    {
        $data = $this->repository->get($slug);
        return view('user.info', compact('data'));
    }

    public function delete($slug)
    {
        $data = $this->repository->get($slug);
        return view('user.delete', compact('data'));
    }

    public function destroy($slug)
    {
        $data = $this->repository->delete($slug);
        return redirect()->route('employee.index')->with('success', 'Employee Deleted Successfully');
    }

    public function downloadImage($slug)
    {
        $document = User::where('slug', $slug)->firstOrFail();
        $pathToCover = storage_path('app/public/images/' . $document->cover);
        return response()->download($pathToCover);
    }

    public function downloadFile($id)
    {
//        $zip = new ZipArchive();
//        $fileName = 'employeeDocuments.zip';
//        $document = User::where('slug', $slug)->firstOrFail();
//        $pathToFile = storage_path('app/uploads/employeeDocuments/' . $document->file);
//        if ($zip->open(storage_path($fileName),ZipArchive::CREATE)==TRUE)
//        {
//            $files = File::files($pathToFile);
//            foreach ($files as $file)
//            {
//                $relativeName = basename($file);
//                $zip->addFile($file, $relativeName);
//            }
//            $zip->close();
//        }
//        return response()->download(storage_path($fileName));


        $document = EmployeeDocument::findOrFail($id);
        $pathToFile = storage_path('app/uploads/' . $document->file_name);
        return response()->download($pathToFile);
//        $filePath = '/app/uploads/' . $document->file_name;
////        return response()->download($filePath);
//        Storage::download($document->file_name);
//        return redirect()->back();
    }

//    public function downloadPDF($slug)
//    {
////        $document = User::where('slug', $slug)->firstOrFail();
//        $document = User::all();
//        $bloodGroups = BloodGroup::all('name');
//        $pdf = PDF::loadView('user.document.pdf', compact('document', 'bloodGroups'));
//
//        return $pdf->download('user.pdf');
//    }

//    public function documentCreate()
//    {
//        return view('user.document.create');
//    }
}
