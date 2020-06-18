<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function category()
    {
        $category = Category::all();
        return view ('admin.category.category',compact('category'));
    }

    public function storecategory (Request $request){
        $validateData= $request->validate([
            'categtory_name' => 'required|unique:category|max:233',
            
            ]);

            $data =array();
            $data ['categtory_name']=$request->categtory_name;
            $data['slug']=Str::slug($request->categtory_name);
            DB::table('category')->insert($data);
            return redirect()->back()->with('success','Ketegori berhasil disimpan');



    }


    public function Delletcategory($id)
            {
                DB::table('category')->where('id',$id)->delete();
                return redirect()->back()->with('success','hapus');

            }


            public function editcategory($id){
                $category= DB::table('category')->where('id',$id)->first();
                return view('admin.category.edit',compact('category'));
            
            }

            public function updatecategory(Request $request,$id) 
            {
                $validateData= $request->validate([
                    'categtory_name' => 'required|unique:category|max:233',
                    
                    ]);

                    $data=array();
                    $data['categtory_name']=$request->categtory_name;
                    $data['slug']=$request->categtory_name;
                    $update=DB::table('category')->where('id',$id)->update($data);
                    
                        return redirect()->route('category')->with('success','Ketegori berhasil disimpan');
                


            }





}
