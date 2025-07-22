<?php

namespace App\Services;

use App\Models\Branch;

class BranchService
{
    public function create(array $data){
        $branch_data=[
            'name'=>$data['name'],
            'province'=>$data['province'],
            'district'=>$data['district'],
        ];
        Branch::create($branch_data);
    }
    public function getAll(){
        $branches=Branch::all();
        return $branches;
    }
    public function findById($id){
        $branch=Branch::find($id);
        return $branch;
    }
    public function update(array $data){
        $id=$data['id'];
        $branch=Branch::find($id);
        $branch->name=$data['name'];
        $branch->province=$data['province'];
        $branch->district=$data['district'];
        $branch->save();
    }
    public function delete($id){
        $branch=Branch::find($id);
        $branch->delete();
    }
}
