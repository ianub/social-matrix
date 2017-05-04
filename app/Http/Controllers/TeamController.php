<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teams;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        // Get most popular team
        $allTeam = Teams::all();
        // Show the most popular team
        return view('team.index', compact('allTeam'));

    
        // return view ('team.index');
    
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        // Get all the categories to show on the form
        $allTeam = Teams::pluck('id', 'image', 'first_name', 'last_name', 'position', 'description');
        return view('team.create', compact('allTeam'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the data
        $this->Validate($request, [
            'image'         => 'required|image',
            'first_name'          => 'required|min:2',
            'last_name'           => 'required|min:2',
            'position'   => 'required|min:2',
            'description'   => 'required|min:20'
        ]);

        // Making a copy of the file that was uploaded
        $image = Image::make($request->image);

        switch($image->mime){
            case 'image/jpeg':
            case 'image/jpg':
                $fileExtension = '.jpg';
            break;

            case 'image/png':
                $fileExtension = '.png';
            break;

            case 'image/gif':
                $fileExtension = '.gif';
            break;
        }

        // Generate new file name
        $filename = uniqid().'$fileExtension';

        // Save the image
        $image->save("images/team/$filename");

        $newMember = $request->all();
        $newMember['image'] = $filename;

        

        // Save the data
        $member = Member::create($newMember);

        $member->save();
        // Redirect away to some other pages
        return redirect('team/'.$member->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
