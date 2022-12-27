<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Interfaces\CommonInterface;
use App\Models\CompanyInfo;
use App\Repository\CommonRepository;
use Illuminate\Http\Request;

class CompanyInfoController extends Controller
{
    private $commonInterface;
    private $commonRepository;
    private $company_info;

    public function __construct(CommonInterface $commonInterface,CommonRepository $commonRepository,CompanyInfo $company_info)
    {
        $this->commonInterface = $commonInterface;
        $this->commonRepository = $commonRepository;
        $this->company_info = $company_info;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            //
        ]);


        $items = $request->except([
            '_token'
        ]);

        foreach ($items as $key => $item) {
            $this->commonInterface->updateSettings($this->company_info,$key, $item);
        }

        return 'Settings Saved Successfully';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
