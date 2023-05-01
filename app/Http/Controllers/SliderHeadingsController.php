<?php

namespace App\Http\Controllers;

use App\Models\SliderHeading;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SliderHeadingsController extends Controller
{
    public function index()
    {
        try {
            $data = SliderHeading::withTrashed()->get();

            return view('elements.sliderHeadings.list', compact('data'));
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function create()
    {
        return view('elements.sliderHeadings.create');
    }

    public function store(Request $request)
    {
        try {
            $validate = Validator::make($request->all(), [
                'name' => 'required',
            ], [
                'name.required' => 'Name must be needed.',
            ]);

            if ($validate->fails()) {
                return redirect()->back()->withInput()->withErrors($validate->errors());
            } else {
                $sliderHeading = SliderHeading::create([
                    'name' => $request->name,
                ]);

                return redirect()->back()->with('success', 'Successfully created slider heading');
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
            $obj = SliderHeading::withTrashed()->find($id);
            return view('elements.sliderHeadings.edit' ,compact('obj'));
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validate = Validator::make($request->all(), [
                'name' => 'required',
            ], [
                'name.required' => 'Name must be needed.',
            ]);

            if ($validate->fails()) {
                return redirect()->back()->withInput()->withErrors($validate->errors());
            } else {
                $sliderHeading = SliderHeading::withTrashed()->find($id);

                $sliderHeading->update([
                    'name' => $request->name,
                ]);

                return redirect()->back()->with('success', 'Successfully updated slider heading');
            }
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function destroy(SliderHeading $sliderHeading)
    {
        try {
            $obj = $sliderHeading->delete();
            $type = $obj ? 'success' : 'fail';
            $message = $obj ? 'Successfully deactivated!' : 'Failed to deactivate';
            return redirect()->back()->with($type, $message);
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function restore(SliderHeading $sliderHeading, $id)
    {
        try {
            $obj = $sliderHeading->withTrashed()->find($id)->restore();
            $type = $obj ? 'success' : 'fail';
            $message = $obj ? 'Successfully re-activated!' : 'Failed to re-activate';
            return redirect()->back()->with($type, $message);
        } catch (Exception $e) {
            abort(503);
        }
    }
}
