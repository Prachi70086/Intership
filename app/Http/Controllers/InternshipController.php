<?php
namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Container\Attributes\DB as AttributesDB;
use Illuminate\Support\Facades\Hash as FacadesHash;

class InternshipController extends Controller
{
    public function create()
    {
        $districts = District::select('DSM_DSCD', 'DSM_DSNM')
            ->orderBy('DSM_DSNM', 'asc')
            ->get();

        return view('internshipform', compact('districts'));
    }

 public function getBlocks($district_code)
{
    $blocks = DB::table('blk_mst')
        ->where('BLM_DSCD', $district_code) 
        ->orderBy('BLM_BLNM')
        ->get();

    return response()->json($blocks);
}

    public function store(Request $request)
    {
        $request->validate([
            'fullName' => 'required|string',
            'email' => 'required|email|unique:student,email',
            'phone' => 'required|digits:10',
            'password' => 'required',
            'confirmPassword' => 'required|same:password',
            'district' => 'required',
            'block' => 'required',
            'college' => 'required',
            'educationStatus' => 'required',
            'address' => 'required|string',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048'
        ]);

        $resumePath = $request->file('resume')->store('resumes', 'public');

        Students::create([
            'full_name' => $request->fullName,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'district_id' => $request->district,
            'block_id' => $request->block,
            'college' => $request->college,
            'education_status' => $request->educationStatus,
            'address' => $request->address,
            'resume_path' => $resumePath,
            'status' => 'pending',
        ]);
    
        
        return back()->with('success', 'Application submitted successfully');
    }
}