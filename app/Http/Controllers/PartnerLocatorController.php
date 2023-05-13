<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PartnerLocator;
use App\Services\GetItemsService;

class PartnerLocatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetItemsService $service, Request $request): object
    {
            if($request->data['data'] === 'null')
            {
                $partners = $service->getItemsOrdered(PartnerLocator::class, 'company');
            }else
            {
                if($request->data['type'] == 'search_text')
                {
                    $partners = PartnerLocator::where('company', 'like', '%' .  $request->data['data'] . '%' )->orWhere('address', 'like', '%' .  $request->data['data'] . '%' )->get();
                };

                if($request->data['type'] == 'status')
                {
                    $partners = PartnerLocator::where('status', $request->data['data'])->get();
                };

                if($request->data['type'] == 'country')
                {
                    $partners = PartnerLocator::whereJsonContains('countries_covered', $request->data['data'])->get();
                };

                if($request->data['type'] == 'state')
                {
                    $partners = PartnerLocator::whereJsonContains('states_covered', $request->data['data'])->get();
                };
            }
            

        return $this->createSuccessResponse(compact('partners'));
    }

    public function types(): object
    {
        $types = PartnerLocator::select('status') ->distinct()->get();
        
        return $this->createSuccessResponse(compact('types'));
    }
}
