<?php namespace App\Http\Controllers;

use App\Models\MARoles;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Ramsey\Uuid\Uuid;
use Tymon\JWTAuth\Facades\JWTAuth;

class MARolesController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /maroles
     *
     * @return Response
     */
    public function index()
    {



        $roles = MARoles::all();
//        formating data to rsponse angular
        $response = ['roles' => $roles];

        return response()->json($response, 200);
	}

    /**
     * Show the form for creating a new resource.
     * GET /maroles/create
     *
     * @return Response
     */
    public function create()
    {
        //front-end only
    }

    /**
     * Store a newly created resource in storage.
     * POST /maroles
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $role = new MARoles();


        $role->id = Uuid::uuid4();

        $role->name = $request->name;

        if ($role->save()) {
            return response()->json(['role' => $role], 201);
        } else {
            return response()->json(['error' => 'New role not saved '], 400);

        }
    }

    /**
     * Display the specified resource.
     * GET /maroles/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $role = MARoles::find($id);

        if ($role) {
            return response()->json(['role' => $role], 200);

        } else {
            return response()->json(['error' => 'User not found'], 400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     * GET /maroles/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //front-end only
    }

    /**
     * Update the specified resource in storage.
     * PUT /maroles/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $role = MARoles::find($id);

        $role->name = $request->name;

        if ($role->save()) {
            return response()->json(['role' => $role], 200);
        }
        return response()->json(['error' => 'User not updated'], 400);
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /maroles/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //roles
        $role = MARoles::where('id', $id)->delete();


        return response()->json(['success' => $role], 200);

    }

}