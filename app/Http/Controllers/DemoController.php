<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Objective;

class DemoController extends Controller
{
    
	public function objectiveTraverse($node)
	{
	    $tree = collect([]);
	    $traverse = function ($categories, $depth = 0) use (&$traverse, &$tree) {
	        foreach ($categories as $category) {
	            $categoryInfo = [
	                'name' => $category->name,
	                'id' => $category->id,
	                'parent_id' => $category->parent_id,
	                'depth' => $depth,
	            ];
	            $tree->push($categoryInfo);
	            $traverse($category->children, $depth + 1);
	        }
	    };
	    $traverse($node);
	    return $tree;
	}

	public function demo()
    {
    	$node = Objective::get()->toTree();
    	$objectives = $this->objectiveTraverse($node);
    	return response()->json($objectives);
    	// return view('apps.home',compact('objectives'));
    }
}
