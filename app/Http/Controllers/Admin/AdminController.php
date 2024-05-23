<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Profile\UpdateProfile;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function dashboard()
    {
//        $users_count = User::toBase()
//            ->selectRaw("count(case when type = 'technician' then 1 end) as technicians")
//            ->selectRaw("count(case when type = 'user' then 1 end) as users")
//            ->selectRaw("count(case when type in ('admin','super_admin') then 1 end) as admins")
//            ->first();
//        $orders_count = Order::toBase()
//            ->selectRaw("count(case when status = 'pending' then 1 end) as pending")
//            ->selectRaw("count(case when status = 'in-progress' then 1 end) as in_progress")
//            ->selectRaw("count(case when status = 'completed' then 1 end) as completed")
//            ->first();
//        $inProgressOrders = Order::where('status', 'in-progress')->latest()->get();
//        $pendingOrders = Order::where('status', 'pending')->latest()->get();
        return view('admin.dashboard', [
//            'users_count' => $users_count,
//            'orders_count' => $orders_count,
//            'inProgressOrders' => $inProgressOrders,
//            'pendingOrders' => $pendingOrders,
        ]);
    }

    public function editProfile($id)
    {
        return view('admin.profile.update_profile', ['data' => User::findOrFail($id)]);
    }

    public function updateProfile(UpdateProfile $request, User $user)
    {
        $user->update($request->validated());
        Session::flash('message', __('messages.updated'));
        return redirect()->back();
    }
}
