<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VendorRequest;
use App\Models\MainCategory;
use App\Models\Vendor;
use App\Notifications\VendorCreated;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class VendorsController extends Controller
{
    public function index()
    {
        $vendors = Vendor::selection()->paginate(PAGINATION_COUNT);

        return view('admin.vendors.index', compact('vendors'));
    }

    public function create()
    {
        $categories = MainCategory::where('translation_of', 0)->active()->get();
        return view('admin.vendors.create', compact('categories'));
    }

    public function store(VendorRequest $request)
    {
        try {
            //make validation in file vendorsRequest

            //insert to DB
            if (!$request->has('active'))
                $request->request->add(['active' => 0]);
            else
                $request->request->add(['active' => 1]);

            // save image
            $filePath = "";
            if ($request->has('logo')) {
                $filePath = uploadImage('vendors', $request->logo);

            }

            $vendor = Vendor:: create([
                'name' => $request->name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'password' => $request->password,
                'active' => $request->active,
                'address' => $request->address,
                'logo' => $filePath,
                'category_id' => $request->category_id
            ]);

            Notification::send($vendor, new VendorCreated($vendor));


            //redirect Message
            return redirect()->route('admin.vendors')->with(['success' => 'Saved successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.vendors')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function edit($id)
    {
        try {
            $vendor = Vendor::selection()->find($id);
            if (!$vendor)
                return redirect()->route('admin.vendors')->with(['error' => 'This vendors doesn\'t not exist or is deleted']);

            $categories = MainCategory::where('translation_of', 0)->active()->get();

            return view('admin.vendors.edit', compact('vendor', 'categories'));

        } catch (\Exception $ex) {
            return redirect()->route('admin.vendors')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function update($id, VendorRequest $request)
    {
        try {
            $vendor = Vendor::selection()->find($id);
            if (!$vendor)
                return redirect()->route('admin.vendors')->with(['error' => 'This vendors doesn\'t not exist or is deleted']);

            DB::beginTransaction();
            //logo
            if ($request->has('logo')) {
                $filePath = uploadImage('vendors', $request->logo);
                Vendor::where('id', $id)
                    ->update([
                        'logo' => $filePath,
                    ]);
            }
            //password
            $data = $request->except('_token', 'id', 'logo', 'password');
            if ($request->has('password')) {
                $data['password'] = $request->password;
            }

            Vendor::where('id', $id)
                ->update($data);

            DB::commit();

            return redirect()->route('admin.vendors')->with(['success' => 'Modification successfully completed']);

        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()->route('admin.vendors')->with(['error' => 'Something went wrong, please try again later']);
        }
    }

    public function destroy($id)
    {
        try {

            $vendor = Vendor::find($id);

            if (!$vendor)
                return redirect()->route('admin.vendors')->with(['error' => 'This vendors doesn\'t not exist or is deleted ']);

            /*$vendors = $maincategory ->vendors();
            if(isset($vendors) &&  $vendors ->count()>0)
            {
                return redirect()->route('admin.vendors')->with(['error' => 'This section cannot be deleted ']);

            }*/

            //delete from folder
            $image = Str::after($vendor->logo, 'assets/');
            $image = base_path('assets/' . $image);
            unlink($image);

            /*/delete translation
            $maincategory -> categories()->delete();*/

            $vendor->delete();
            return redirect()->route('admin.vendors')->with(['success' => 'the vendors was deleted successfully']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.vendors')->with(['error' => 'Something went wrong, please try again later']);
        }

    }

    public function changeStatus($id)
    {
        try {
            $vendor = Vendor::find($id);

            if (!$vendor)
                return redirect()->route('admin.vendors')->with(['error' => 'This vendors doesn\'t not exist or is deleted ']);

            $status = $vendor->active == 0 ? 1 : 0;

            $vendor->update(['active' => $status]);

            return redirect()->route('admin.vendors')->with(['success' => 'Status changed successfully']);


        } catch (\Exception $ex) {

            return redirect()->route('admin.vendors')->with(['error' => 'Something went wrong, please try again later']);
        }
    }


}
