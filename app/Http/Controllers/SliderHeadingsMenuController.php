<?php

namespace App\Http\Controllers;

use App\Models\SliderHeading;
use App\Models\SliderHeadingsMenu;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;

class SliderHeadingsMenuController extends Controller
{
    public function index()
    {
        try {
            $data = SliderHeadingsMenu::withTrashed()->get();

            return view('elements.sliderHeadingsMenus.list', compact('data'));
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function create()
    {
        $sliderHeading = SliderHeading::all();
        return view('elements.sliderHeadingsMenus.create', compact('sliderHeading'));
    }

    public function store(Request $request)
    {
        try {
            $validate = Validator::make($request->all(), [
                'heading_id' => 'required',
                'icon' => 'mimes:jpeg,jpg,png,gif,svg|required|max:6000',
                'details' => 'required',
            ], [
                'heading_id.required' => 'Heading must be needed.',
                'icon.required' => 'Image/Icon must be needed.',
                'details.required' => 'Description must be needed.',
            ]);

            if ($validate->fails()) {
                return redirect()->back()->withInput()->withErrors($validate->errors());
            } else {
                $q = SliderHeadingsMenu::create([
                    'heading_id' => $request->heading_id,
                    'details' => $request->details,
                ]);

                if ($request->hasFile('icon') && $request->file('icon')->isValid()) {
                    $q->addMediaFromRequest('icon')->toMediaCollection('images/icon');
                } else {
                    return redirect()->back()->with('fail', 'Successfully created slider heading menu without image, please check that at list.');
                }

                return redirect()->back()->with('success', 'Successfully created slider heading menu');
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
            $obj = SliderHeadingsMenu::withTrashed()->find($id);
            $sliderHeading = SliderHeading::withTrashed()->get();
            return view('elements.sliderHeadingsMenus.edit' ,compact('obj', 'sliderHeading'));
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validate = Validator::make($request->all(), [
                'heading_id' => 'required',
                'icon' => 'mimes:jpeg,jpg,png,gif,svg|max:6000',
                'details' => 'required',
            ], [
                'heading_id.required' => 'Order category must be needed.',
                'details.required' => 'Info must be needed.',
            ]);

            if ($validate->fails()) {
                return redirect()->back()->withInput()->withErrors($validate->errors());
            } else {
                $orderCategory = SliderHeadingsMenu::withTrashed()->find($id);

                $orderCategory->update([
                    'heading_id' => $request->heading_id,
                    'details' => $request->details,
                ]);

                if ($request->hasFile('icon') && $request->file('icon')->isValid()) {
                    $orderCategory->clearMediaCollection('images/icon');
                    $orderCategory->addMediaFromRequest('icon')->toMediaCollection('images/icon');
                } else {
                    return redirect()->back()->with('fail', 'Successfully updated info without image, please check that at list.');
                }

                return redirect()->back()->with('success', 'Successfully info');
            }
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function destroy(SliderHeadingsMenu $sliderHeadingsMenu, $id)
    {
        try {
            $obj = $sliderHeadingsMenu->find($id)->delete();
            $type = $obj ? 'success' : 'fail';
            $message = $obj ? 'Successfully deactivated!' : 'Failed to deactivate';
            return redirect()->back()->with($type, $message);
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function restore(SliderHeadingsMenu $sliderHeadingsMenu, $id)
    {
        try {
            $obj = $sliderHeadingsMenu->withTrashed()->find($id)->restore();
            $type = $obj ? 'success' : 'fail';
            $message = $obj ? 'Successfully re-activated!' : 'Failed to re-activate';
            return redirect()->back()->with($type, $message);
        } catch (Exception $e) {
            abort(503);
        }
    }
}
