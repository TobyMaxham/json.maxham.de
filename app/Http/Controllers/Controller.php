<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * Class Controller
 * @package App\Http\Controllers
 * @author Tobias Maxham <git2018@maxham.de>
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $jsonData;

    public function __construct()
    {
        $file = strtolower(class_basename($this));
        $file = str_replace('controller', '', $file);
        $this->jsonData = json_decode(file_get_contents(storage_path("app/public/{$file}s.json")));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = $this->jsonData;
        if (count(\request()->all()) == 0) {
            return response()->jsonpretty($items);
        }

        foreach ($items as $key => $item) {
            foreach (\request()->all() as $searchKey => $searchValue) {

                if (isset($item->{$searchKey}) && $item->{$searchKey} != $searchValue) {
                    unset($items[$key]);
                }
            }
        }

        return response()->jsonpretty($items);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        foreach ($this->jsonData as $item) {
            if ($item->id == $id) {
                return response()->jsonpretty($item);
            }
        }
        return response()->jsonpretty(new \stdClass(), 404);
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
        $rItem = null;
        foreach ($this->jsonData as $item) {
            if ($item->id == $id) {
                $rItem = $item;
                break;
            }
        }

        if ($rItem) {
            $data = array_merge((array) $rItem, $request->all());
            return response()->jsonpretty($data);
        }

        // only put will create new instance
        if ($request->method() != 'PUT') {
            return response()->jsonpretty(new \stdClass(), 404);
        }

        $data['id'] = $id;
        $data = array_merge($data, $request->all());
        return response()->jsonpretty($data, 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $last = array_last($this->jsonData);
        if (isset($last->id)) {
            $id = $last->id+1;
        } else {
            $id = 1;
        }
        $data['id'] = $id;
        $data = array_merge($data, $request->all());
        return response()->jsonpretty($data, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->jsonpretty(new \stdClass());
    }
}
