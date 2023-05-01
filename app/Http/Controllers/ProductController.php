<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function index()
    {
        try {
            $data = Product::withTrashed()->get();

            return view('elements.product.list', compact('data'));
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function create()
    {
        return view('elements.product.create');
    }

    public function store(Request $request)
    {
        try {
            $validate = Validator::make($request->all(), [
                'name' => 'required',
                'url' => 'mimes:jpeg,jpg,png|required|max:6000',
                'description' => 'required',
            ], [
                'name.required' => 'Name must be needed.',
                'url.required' => 'Image must be needed.',
                'description.required' => 'Description must be needed.',
            ]);

            if ($validate->fails()) {
                return redirect()->back()->withInput()->withErrors($validate->errors());
            } else {
                $product = Product::create([
                    'name' => $request->name,
                    'description' => $request->description
                ]);

                if ($request->hasFile('url') && $request->file('url')->isValid()) {
                    $product->addMediaFromRequest('url')->toMediaCollection('images');
                } else {
                    return redirect()->back()->with('fail', 'Successfully created product info without image, please check that at list.');
                }

                return redirect()->back()->with('success', 'Successfully created product info');
            }
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function show(Product $product)
    {
        
    }

    public function edit($id)
    {
        try {
            $obj = Product::withTrashed()->find($id);
            return view('elements.product.edit' ,compact('obj'));
        } catch (Exception $e) {
            abort(503);
        }

    }

    public function update(Request $request, $id)
    {
        try {
            $validate = Validator::make($request->all(), [
                'name' => 'required',
                'url' => 'mimes:jpeg,jpg,png|max:6000',
                'description' => 'required',
            ], [
                'name.required' => 'Name must be needed.',
                'description.required' => 'Description must be needed.',
            ]);

            if ($validate->fails()) {
                return redirect()->back()->withInput()->withErrors($validate->errors());
            } else {
                $product = Product::withTrashed()->find($id);

                $product->update([
                    'name' => $request->name,
                    'description' => $request->description
                ]);

                if ($request->hasFile('url') && $request->file('url')->isValid()) {
                    $product->clearMediaCollection('images');
                    $product->addMediaFromRequest('url')->toMediaCollection('images');
                } else {
                    return redirect()->back()->with('fail', 'Successfully updated product info without image, please check that at list.');
                }

                return redirect()->back()->with('success', 'Successfully updated product info');
            }
        } catch (Exception $e) {
            abort(503);
        }

    }

    public function destroy(Product $product)
    {
        try {
            $obj = $product->delete();
            $type = $obj ? 'success' : 'fail';
            $message = $obj ? 'Successfully Deactivated!' : 'Failed to deactivate';
            return redirect()->back()->with($type, $message);
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function restore(Product $product, $id)
    {
        try {
            $obj = $product->withTrashed()->find($id)->restore();
            $type = $obj ? 'success' : 'fail';
            $message = $obj ? 'Successfully Re-activated!' : 'Failed to re-activate';
            return redirect()->back()->with($type, $message);
        } catch (Exception $e) {
            abort(503);
        }
    }
}
