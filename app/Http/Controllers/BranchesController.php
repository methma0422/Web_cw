<?php

namespace App\Http\Controllers;

use App\Services\BranchService;
use Illuminate\Http\Request;

class BranchesController extends Controller
{
    private BranchService $service;
    public function __construct(BranchService $service){
        $this->service = $service;
    }
    public function index(){
        $branches=$this->service->getAll();
        return view('modules.branches.index',compact('branches'));
    }
    public function create(){
        return view('modules.branches.create');
    }

    public function store(Request $request){
        $validated=$request->validate([
            'name'=>'required|string|max:255',
            'province'=>'required|string|max:255',
            'district'=>'required|string|max:255',
        ]);
        $this->service->create($validated);
        return redirect(url('/branches'))->with('success','Branch created successfully');
    }
    public function show($id){
        $branch=$this->service->findById($id);
        return view('modules.branches.update',compact('branch'));
    }
    public function update(Request $request){
        $validated=$request->validate([
            'id'=>'required|integer',
            'name'=>'required|string|max:255',
            'province'=>'required|string|max:255',
            'district'=>'required|string|max:255',
        ]);
        $this->service->update($validated);
        return redirect(url('/branches'))->with('success','Branch updated successfully');
    }
    public function destroy($id){
        $this->service->delete($id);
        return redirect(url('/branches'))->with('success','Branch deleted successfully');
    }
}
