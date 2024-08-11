<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\OcAccountStoreRequest;
use App\Http\Requests\OcAccountUpdateRequest;
use App\Models\OcAccountModel;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class OcAccountController extends Controller
{

    public function index(): View
    {
        $oc_accounts = OcAccountModel::latest()->paginate(5);
        $user = Auth::user();

        return view('panel.oc.account.index',compact('oc_accounts'))
            ->with('i', (request()->input('page', 1) - 1) * 5)->with('user', $user);
    }

    public function create(): View
    {
        $user = Auth::user();
        return view('panel.oc.account.create')->with('user', $user);
    }

    public function store(OcAccountStoreRequest $request): RedirectResponse
    {

       $request->validated();
       $request_inputs = $request->all();
//       $request_inputs['user_id'] = Auth::user()->getAuthIdentifier();
       $request_inputs['created_at'] = \Morilog\Jalali\Jalalian::now()->getTimestamp();

       $res = OcAccountModel::create($request_inputs);

       return redirect()->route('ocaccounts.index')
           ->with('success','OC Account created successfully.');

    }

    public function edit(OcAccountModel $ocaccount): View
    {
        $x = $ocaccount;
        return view('panel.oc.account.edit', compact('x'))->with('user', Auth::user());
    }

    public function update(OcAccountUpdateRequest $request, OcAccountModel $ocaccount): RedirectResponse
    {
        $request->validated();
        $inputs = $request->all();
        $inputs['updated_at'] = \Morilog\Jalali\Jalalian::now()->getTimestamp();
        $ocaccount->update($inputs);

        return redirect()->route('ocaccounts.index')
            ->with('success','OC Account update successfully.');
    }

    public function show()
    {

    }

}
