<?php

namespace App\Http\Controllers\Fontend;

use Illuminate\Support\Facades\Log;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use DrewM\MailChimp\MailChimp;
use App\Http\Controllers\Controller;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     // dd($request->all());
    //     $request->validate([
    //         'email' => 'required|email|unique:subscribers,email',
    //     ]);

    //     Subscriber::create([
    //         'email' => $request->email,
    //     ]);

    //     return redirect()->back()->with('success', 'Subscription successful!');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

    try {
        // Save locally in the subscribers table
        $subscriber = Subscriber::create([
            'email' => $request->email,
        ]);

        // Send to Mailchimp
        $mailchimp = new MailChimp(env('MAILCHIMP_API_KEY'));
        $listId = env('MAILCHIMP_LIST_ID');

        $response = $mailchimp->post("lists/$listId/members", [
            'email_address' => $request->email,
            'status'        => 'subscribed',
        ]);

        if (!$mailchimp->success()) {
            // If Mailchimp fails, roll back local DB insert
            // $subscriber->delete();
            return redirect()->back()->with('success', 'You have subscribed successfully ' );
        }
        else {
            Log::error("Mailchimp API Error: " . $mailchimp->getLastError());
            // If Mailchimp is successful, return success message
            return redirect()->back()->with('warning', 'Subscription successful!');
        }

        // return redirect()->back()->with('success', 'Subscription successful!');
    } catch (\Exception $e) {
        // Log the error for debugging
        Log::error("Subscription Error: " . $e->getMessage());
        // return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
