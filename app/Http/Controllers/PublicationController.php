<?php

namespace App\Http\Controllers;

use App\Publication;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function listPublication()
    {
        $publication = new Publication();
    
        $publication = title->find();
        $publication = description->find();
        $publication->save();

        return view('application.infraestrutura', [
            'publications' => $publications
        ]);
        
    }
    
}
