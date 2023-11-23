<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{
    public function index()
    {
            $clients = User::with('client') // Assuming 'client' is the name of the relationship in the User model
            ->where('role', 'client') // Filter if you have a 'role' column to differentiate users
            ->get();

            return view('CRM.clients-page', compact('clients'));
    }


    public function storeClient(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|max:255|min:3',
            'lastname' => 'required|max:255|min:3',
            'company' => 'required|max:255|min:3',
            'field' => 'required|max:255|min:3',
            'phone' => ['required', 'min:6', 'max:255', 'unique:users,phone'],
            'position' => 'max:255|min:2',
            'email' => 'required|email|max:255',
            'addressZu' => 'max:255',
            'street' =>'max:255',
            'zip'=> 'required|min:5|max:6',
            'city'=> 'required|min:2|max:255',
            'extraEmail'=>'max:255',
            'web'=>'max:255',
            'notes'=>'max:255'

            ]);
        $existingUser = User::where('phone', '+49'. $request->input('phone'))->first();
        if ($existingUser) {
            return redirect()->back()->with('error', 'A user with this phone number already exists.');
        }
        else{
            $user = User::create([
            'company' => $request->input('company'),
            'phone' => '+49'.$request->input('phone'),
            'field' => $request->input('field'),
            'email' => $request->input('email'),
            'role' => 'Client',
            ]);

            $user_id = $user->id;
            $client = Client::create([
                'user_id' => $user_id,
                'contact_firstname' => $request->input('firstname'),
                'contact_lastname' => $request->input('lastname'),
                'Address_zusatz' => $request->input('addressZu'),
                'position' => $request->input('position'),
                'street' => $request->input('street'),
                'zip_code' => $request->input('zip'),
                'city' => $request->input('city'),
                'email' => $request->input('email'),
                'extra_emails' => $request->input('extraEmail'),
                'web_site' => $request->input('web'),
                'notes' => $request->input('notes'),
                // Add other client fields here
            ]);
            return redirect()->back()->with('success', 'Client created successfully');
        }
    }
    public function show(Client $client)
    {
        return new ClientResource($client);
    }

    public function update(Request $request, Client $client)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|max:255|min:3',
            'lastname' => 'required|max:255|min:3',
            'company' => 'required|max:255|min:3',
            'field' => 'required|max:255|min:3',
            'phone' => ['required', 'min:6', 'max:255', Rule::unique('users', 'phone')->ignore($client->user->id),],
            'position' => 'max:255|min:2',
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($client->user->id),],
            'addressZu' => 'max:255',
            'street' =>'max:255',
            'zip'=> 'required|min:5|max:6',
            'city'=> 'required|min:2|max:255',
            'extraEmail'=>'max:255',
            'website'=>'max:255',
            'notes'=>'max:255'
         ]);

        DB::beginTransaction();

        // Update the existing User associated with the Client
        $user = $client->user;
        $user-> field= $validatedData['field'];
        $user->company = $validatedData['company'];
        $user->phone = $validatedData['phone'];
        $user->email = $validatedData['email'];
        $user->role = 'Client';
        $user->save(); // Saving the updated user

        // Update the existing Client
        $client->contact_firstname = $validatedData['firstname'];
        $client->contact_lastname = $validatedData['lastname'];
        $client->position = $validatedData['position'];
        $client->Address_zusatz = $validatedData['addressZu'];
        $client->street = $validatedData['street'];
        $client->zip_code = $validatedData['zip'];
        $client->city = $validatedData['city'];
        $client->extra_emails = $validatedData['extraEmail'];
        $client->web_site = $validatedData['website'];
        $client->notes = $validatedData['notes'];
        $client->save(); // Saving the updated client

        $user->refresh();
        $client->refresh();
        DB::commit();
        if ($request->ajax()) {
            return response()->json(['success' => 'Client updated successfully!']);
        } else {
            return redirect()->back()->with('success', 'Client updated successfully!');
        }

    }


    public function destroy(Client $client)
    {
        try {
            // Begin transaction
            DB::beginTransaction();

            // Get the associated User model
            $user = $client->user;

            // Check if user exists before attempting to delete
            if ($user) {
                $user->delete(); // Delete the user
            }

            $client->delete(); // Delete the client

            // Commit the transaction
            DB::commit();

            return response()->json(['success' => 'Client and associated user successfully deleted.']);
        } catch (\Exception $e) {
            // Rollback the transaction in case of error
            DB::rollback();

            return response()->json(['error' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }

}
