<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Contact;
use Validator;

class ContactController extends BaseController {
  public function index() {
    $contacts = Contact::all();
    return $this->sendSuccess($contacts->toArray(), 'Contacts retrieved successfully.');
  }

  public function show($id) {
    $contact = Contact::find($id);

    if (is_null($contact)) {
      return $this->sendError('Contact not found.');
    }

    return $this->sendSuccess($contact, '');
  }

  public function getContact(Request $request) {
    $restaurant = Contact::all();
    if(count($restaurant->toArray()) > 0) {
      return $this->sendSuccess($restaurant->toArray()[0], 'Contacts retrieved successfully.');
    }
    return $this->sendSuccess([], 'Contacts retrieved successfully.');
  }

  public function store(Request $request) {
    $validator = Validator::make($request->all(), [
      'address' => 'required',
      'phone' => 'required',
      'email' => 'required',
      'website' => 'required',
    ]);

    if ($validator->fails()) {
      return $this->sendFailed('Validation Error', $validator->errors());
    }

    $input = $request->all();

    $contact = Contact::create($input);

    return $this->sendSuccess($contact, 'Contact created successfully.');
  }

  public function update(Request $request, $id) {
    $input = $request->all();
    $contact = Contact::find($id);
    $contact->update($input);

    return $this->sendSuccess($contact, 'Contact updated successfully');
  }

  public function destroy($id) {
    $contact = Category::find($id);
    $contact->delete();

    return $this->sendSuccess('', 'Contact deleted successfully');
  }
}
