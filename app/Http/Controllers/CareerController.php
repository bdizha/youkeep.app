<?php

namespace App\Http\Controllers;

use App\Position;
use App\PositionApplicant;
use Illuminate\Http\Request;

class CareerController extends Controller
{

    /**
     * Show the career page
     */
    public function index()
    {
        return view('index', ['component' => 'page-careers']);
    }

    /**
     * Show the career openings page
     *
     */
    function openings(Request $request)
    {
        $today = date('Y-m-d H:s:i');
        $positions = Position::with('city')
            ->where('is_active', 1)
            ->where('expired_at', ">=", $today)
            ->get();


        $departments = [];
        foreach ($positions as $key => $position) {
            if (!isset($departments[$position->department_type])) {
                $departments[$position->department_type] = [
                    'id' => $position->department_type,
                    'name' => $position->department,
                    'positions' => []
                ];
            }

            $departments[$position->department_type]['positions'][] = $position;
        }

        return response()->json([
            'departments' => array_values($departments),
            'positions' => $positions,
            'status' => 'success'
        ], 200);
    }

    /**
     *  Show the position details
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $position = Position::with('city')
            ->where('is_active', true)
            ->where('slug', $slug)
            ->first();

        return response()->json([
            'position' => $position,
            'status' => 'success'
        ], 200);
    }

    /**
     * Show the position apply form
     *
     * @return \Illuminate\Http\Response
     */
    public function apply($slug)
    {
        $position = Position::with('city')
            ->where('is_active', true)
            ->where('slug', $slug)
            ->first();

        return response()->json([
            'position' => $position,
            'status' => 'success'
        ], 200);
    }

    /**
     * Send the position application
     *
     * @param Request $request
     * @return Response
     */
    public function send(Request $request)
    {
        $rules = array(
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'company' => 'required',
            'resume' => 'required',
            'public_url' => 'required',
            'cover_letter' => 'required',
        );

        $request->validate($rules);
        $validatedData = $request->all();

        $position = PositionApplicant::create($validatedData);

        return response()->json(['status' => 'success', 'position' => $position]);
    }

    /**
     * Save the position application's resume
     *
     * @param Request $request
     * @return Response
     */
    public function resume(Request $request)
    {
        $path = $request->file('resume')->store('', 'position');

        return response()->json(['status' => 'success', 'page' => $path]);
    }
}
