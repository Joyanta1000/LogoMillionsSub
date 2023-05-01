<?php

namespace App\Http\Controllers;

use App\Models\OrderCategory;
use App\Models\OrderCategoryAmenities;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderCategoryAmenitiesController extends Controller
{
    public function index()
    {
        try {
            $data = OrderCategoryAmenities::withTrashed()->get();

            return view('elements.order.amenities.list', compact('data'));
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function create()
    {
        $orderCategories = OrderCategory::all();
        return view('elements.order.amenities.create', compact('orderCategories'));
    }

    public function store(Request $request)
    {
        try {
            $validate = Validator::make($request->all(), [
                'order_category_id' => 'required',
                'name' => 'required',
                'icon' => 'mimes:jpeg,jpg,png,gif,svg|required|max:6000',
                'info' => 'required',
            ], [
                'order_category_id.required' => 'Order category must be needed.',
                'name.required' => 'Name must be needed.',
                'icon.required' => 'Image/Icon must be needed.',
                'info.required' => 'Description must be needed.',
            ]);

            if ($validate->fails()) {
                return redirect()->back()->withInput()->withErrors($validate->errors());
            } else {
                $q = OrderCategoryAmenities::create([
                    'order_category_id' => $request->order_category_id,
                    'name' => $request->name,
                    'info' => $request->info
                ]);

                if ($request->hasFile('icon') && $request->file('icon')->isValid()) {
                    $q->addMediaFromRequest('icon')->toMediaCollection('images/icon');
                } else {
                    return redirect()->back()->with('fail', 'Successfully created order category amenity without image, please check that at list.');
                }

                return redirect()->back()->with('success', 'Successfully created order category amenity');
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
            $obj = OrderCategoryAmenities::withTrashed()->find($id);
            $orderCategories = OrderCategory::withTrashed()->get();
            return view('elements.order.amenities.edit' ,compact('obj', 'orderCategories'));
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validate = Validator::make($request->all(), [
                'order_category_id' => 'required',
                'name' => 'required',
                'icon' => 'mimes:jpeg,jpg,png,gif,svg|max:6000',
                'info' => 'required',
            ], [
                'order_category_id.required' => 'Order category must be needed.',
                'name.required' => 'Name must be needed.',
                'info.required' => 'Info must be needed.',
            ]);

            if ($validate->fails()) {
                return redirect()->back()->withInput()->withErrors($validate->errors());
            } else {
                $orderCategory = OrderCategoryAmenities::withTrashed()->find($id);

                $orderCategory->update([
                    'order_category_id' => $request->order_category_id,
                    'name' => $request->name,
                    'info' => $request->info
                ]);

                if ($request->hasFile('icon') && $request->file('icon')->isValid()) {
                    $orderCategory->clearMediaCollection('images/icon');
                    $orderCategory->addMediaFromRequest('icon')->toMediaCollection('images/icon');
                } else {
                    return redirect()->back()->with('fail', 'Successfully updated order category amenities info without image, please check that at list.');
                }

                return redirect()->back()->with('success', 'Successfully order category amenities info');
            }
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function destroy(OrderCategoryAmenities $orderCategoryAmenities, $id)
    {
        try {
            $obj = $orderCategoryAmenities->find($id)->delete();
            $type = $obj ? 'success' : 'fail';
            $message = $obj ? 'Successfully deactivated!' : 'Failed to deactivate';
            return redirect()->back()->with($type, $message);
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function restore(OrderCategoryAmenities $orderCategoryAmenities, $id)
    {
        try {
            $obj = $orderCategoryAmenities->withTrashed()->find($id)->restore();
            $type = $obj ? 'success' : 'fail';
            $message = $obj ? 'Successfully re-activated!' : 'Failed to re-activate';
            return redirect()->back()->with($type, $message);
        } catch (Exception $e) {
            abort(503);
        }
    }
}
