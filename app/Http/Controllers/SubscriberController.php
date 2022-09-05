<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
//    private $subscribers;
//    private $subscriber;
//
//    public function index()
//    {
//        return view('admin.subscriber.add');
//    }
//
//    public function create(Request $request)
//    {
//        Subscriber::newSubscriber($request);
//        return redirect()->back()->with('message', 'Subscriber info create successfully');
//    }
//
//    public function manage()
//    {
//        $this->subscribers = Subscriber::orderBy('id', 'desc')->get();
//        return view('admin.subscriber.manage', ['subscribers' => $this->subscribers]);
//    }
//
//    public function edit($id)
//    {
//        $this->subscriber = Subscriber::find($id);
//        return view('admin.subscriber.edit', ['subscriber' => $this->subscriber]);
//    }
//
//    public function update(Request $request, $id)
//    {
//        Subscriber::updateSubscriber($request, $id);
//        return redirect('/manage-subscriber')->with('message', 'Subscriber info update successfully');
//    }
//
//    public function delete(Request $request, $id)
//    {
//        Subscriber::deleteSubscriber($id);
//        return redirect('/manage-subscriber')->with('message', 'Subscriber info delete successfully');
//    }
}
