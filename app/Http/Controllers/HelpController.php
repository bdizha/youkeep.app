<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    /**
     * Show the help group
     *
     * @return \Illuminate\Http\Response
     */
    public function show($group, $slug)
    {
        $faqs = Faq::where('is_active', true)
            ->where('group', $group)
            ->orderBy('created_at', 'DESC')
            ->get();

        $sectionsArray = Faq::$sections;
        $groupsArrary = Faq::$groups;
        $sections = [];

        $groupName = !empty($groupsArrary[$group]) ? $groupsArrary[$group] : null;

        foreach ($sectionsArray as $s => $section) {
            $sections[$s] = ['name' => $section['name']];
            foreach ($groupsArrary as $g => $group) {
                if (in_array($g, $section['group_ids'])) {
                    $sections[$s]['groups'] = [
                        'name' => $group,
                        'slug' => str_slug($group)
                    ];
                }
            }
        }

        if (request()->ajax()) {
            return response()->json([
                'group' => $groupName,
                'faqs' => $faqs,
                'status' => 'success'
            ], 200);
        }

        return view('help.show', ['group' => $groupName, 'faqs' => $faqs]);
    }

    /**
     * Show the help center page
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sectionsArray = Faq::$sections;
        $groupsArrary = Faq::$groups;
        $sections = [];

        foreach ($sectionsArray as $s => $section) {
            $sections[$s] = ['name' => $section['name']];
            $sections[$s]['groups'] = [];
            foreach ($groupsArrary as $g => $group) {
                if (in_array($g, $section['group_ids'])) {
                    $sections[$s]['groups'][] = [
                        'id' => $g,
                        'name' => $group,
                        'slug' => str_slug($group)
                    ];
                }
            }
        }

        if ($request->ajax()) {
            return response()->json([
                'sections' => $sections,
                'status' => 'success'
            ], 200);
        }

        return view('help.index', ['sections' => $sections]);
    }
}
