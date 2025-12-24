<?php

namespace App\Http\Controllers;

use stdClass;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

/**
 * @author Tobias Maxham <git2018@maxham.de>
 */
class JsonController
{
    protected $jsonData;

    public function initJsonData()
    {
        $file = strtolower(class_basename($this));
        $file = str_replace('controller', '', $file);
        $this->jsonData = json_decode(file_get_contents(resource_path("json/{$file}s.json")));
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $this->initJsonData();

        $items = $this->jsonData;
        if (0 == count(\request()->all())) {
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
     */
    public function show(int $id): JsonResponse
    {
        $this->initJsonData();

        foreach ($this->jsonData as $item) {
            if ($item->id == $id) {
                return response()->jsonpretty($item);
            }
        }

        return response()->jsonpretty(new stdClass, 404);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $this->initJsonData();

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
        if ('PUT' != $request->method()) {
            return response()->jsonpretty(new stdClass, 404);
        }

        $data['id'] = $id;
        $data = array_merge($data, $request->all());

        return response()->jsonpretty($data, 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $this->initJsonData();

        $last = array_last($this->jsonData);
        if (isset($last->id)) {
            $id = $last->id + 1;
        } else {
            $id = 1;
        }
        $data['id'] = $id;
        $data = array_merge($data, $request->all());

        return response()->jsonpretty($data, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        return response()->jsonpretty(new stdClass);
    }
}
