<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit (Request $request)
        {
           $validated = $request->validate([
                'name' => 'required',
                'email' => ['required', 'email'],
                'message' => 'required'
            ]);
            //envoyer le mail
            Mail::to('mourad.boussiouf@laplateforme.io')
                ->send(new ContactMail($validated['name'],$validated['email'],$validated['message']));
            //envoyer lemail
            return ['success' => true];
        }
}
