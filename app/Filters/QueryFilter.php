<?php

namespace App\Filters;

use Illuminate\Http\Request;

abstract class QueryFilter {
    
    protected $request;
    protected $query;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply($query)
    {
        $this->query = $query;

        foreach ($this->request->all() as $filter => $value) {
            if (! method_exists($this, $filter)) {
                continue;
            }
            
            if ($this->request->filled($filter)) {
                $this->$filter($value);
            } else {
                $this->$filter();
            }
        }

        return $query;
    }

}