<?php

namespace App\Http\Controllers;

use App\Lookup;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    protected $term = null;

    /**
     * Find categories
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('category.search');
    }

    /**
     * Do search
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $this->term = $request->get('term', null);
        $this->storeId = $request->get('store_id', null);

        $query = Lookup::where('title', 'like', '%' . $this->term . '%');
        $query->where('count', '>', 0);

        if (!empty($storeId)) {
            $query->where('store_id', $storeId);
        }

        $results = $query->orderBy('created_at', 'DESC')
            ->paginate(18);

        if ($request->ajax()) {
            return response()->json($results, 200);
        }

        return view('home', ['results' => $results]);
    }
}
