<?php

namespace App\Http\Controllers;

use App\Models\OrderCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderCategoryController extends Controller
{
    
    public function index()
    {
        try {
            $data = OrderCategory::withTrashed()->get();

            return view('elements.order.category.list', compact('data'));
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function create()
    {
        return view('elements.order.category.create');
    }

    public function store(Request $request)
    {
        try {
            $validate = Validator::make($request->all(), [
                'name' => 'required',
                'icon' => 'mimes:jpeg,jpg,png,gif,svg|required|max:6000',
                'price' => 'required',
                'info' => 'required',
            ], [
                'name.required' => 'Name must be needed.',
                'icon.required' => 'Image/Icon must be needed.',
                'price.required' => 'Price must be needed.',
                'info.required' => 'Description must be needed.',
            ]);

            if ($validate->fails()) {
                return redirect()->back()->withInput()->withErrors($validate->errors());
            } else {
                $product = OrderCategory::create([
                    'name' => $request->name,
                    'info' => $request->info,
                    'price' => $request->price
                ]);

                if ($request->hasFile('icon') && $request->file('icon')->isValid()) {
                    $product->addMediaFromRequest('icon')->toMediaCollection('images/icon');
                } else {
                    return redirect()->back()->with('fail', 'Successfully created order category without image, please check that at list.');
                }

                return redirect()->back()->with('success', 'Successfully created order category');
            }
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        try {
            $obj = OrderCategory::withTrashed()->find($id);
            return view('elements.order.category.edit' ,compact('obj'));
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validate = Validator::make($request->all(), [
                'name' => 'required',
                'icon' => 'mimes:jpeg,jpg,png,gif,svg|max:6000',
                'price' => 'required',
                'info' => 'required',
            ], [
                'name.required' => 'Name must be needed.',
                'price.required' => 'Price must be needed.',
                'info.required' => 'Info must be needed.',
            ]);

            if ($validate->fails()) {
                return redirect()->back()->withInput()->withErrors($validate->errors());
            } else {
                $orderCategory = OrderCategory::withTrashed()->find($id);

                $orderCategory->update([
                    'name' => $request->name,
                    'price' => $request->price,
                    'info' => $request->info
                ]);

                if ($request->hasFile('icon') && $request->file('icon')->isValid()) {
                    $orderCategory->clearMediaCollection('images/icon');
                    $orderCategory->addMediaFromRequest('icon')->toMediaCollection('images/icon');
                } else {
                    return redirect()->back()->with('fail', 'Successfully updated product info without image, please check that at list.');
                }

                return redirect()->back()->with('success', 'Successfully updated product info');
            }
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function destroy(OrderCategory $orderCategory)
    {
        try {
            $obj = $orderCategory->delete();
            $type = $obj ? 'success' : 'fail';
            $message = $obj ? 'Successfully deactivated!' : 'Failed to deactivate';
            return redirect()->back()->with($type, $message);
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function restore(OrderCategory $orderCategory, $id)
    {
        try {
            $obj = $orderCategory->withTrashed()->find($id)->restore();
            $type = $obj ? 'success' : 'fail';
            $message = $obj ? 'Successfully re-activated!' : 'Failed to re-activate';
            return redirect()->back()->with($type, $message);
        } catch (Exception $e) {
            abort(503);
        }
    }
}
