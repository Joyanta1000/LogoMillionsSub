<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderCategory;
use App\Models\Product;
use App\Models\SliderHeading;
use App\Notifications\OrderNotification;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;
use Usernotnull\Toast\Concerns\WireToast;

class WebController extends Controller
{
    public function index()
    {
        try {
            $data['sliderHeading'] = SliderHeading::with(['sliderHeadingsMenu' => fn ($query) => $query->inRandomOrder()->limit(4)])
                ->orderBy('updated_at', 'DESC')
                ->first();

            $data['products'] =  Product::inRandomOrder()->limit(4)->get();

            $data['orders'] = OrderCategory::with('orderCategoryAmenities')->inRandomOrder()->limit(3)->get();

            return view('front.index', compact('data'));
        } catch (Exception $e) {
            abort(503);
        }
    }

    public function order($id)
    {
        $data['orders'] = OrderCategory::with('orderCategoryAmenities')->find($id);
        return view('front.layouts.includes.modals.includes.orderModalSub', compact('data'));
    }

    public function orderStore(Request $request, $id)
    {
        try {
            $data['orders'] = OrderCategory::with('orderCategoryAmenities')->find($id);
            $senderInfo = $request->all();
            $view = 'mailable.order.orderMail';

            Notification::route('mail', 'logomillions99@gmail.com')->notify(new OrderNotification($data, $senderInfo, $view));

            $order = Order::create([
                'order_category_id' => $id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'msg' => $request->msg,
            ]);

            $notification = array(
                'message' => 'Order created successfully!',
                'alert-type' => 'success'
            );
            

            return redirect()->back()->with($notification);

        } catch (Exception $e) {
            abort(503);
        }
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
