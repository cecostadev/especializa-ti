<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSupportRequest;

use App\Models\Support;
use Illuminate\Http\Request;
use App\Services\SupportService;
use App\DTO\CreateSupport;
use \stdClass;

class SupportController extends Controller
{   

    public function __construct(protected SupportService $service)
    {

    }

    public function index(Request $request)
    {
        $supports = $this->service->getAll($request->filter);

        return view('/site/supports/index', compact('supports'));
    }

    public function create()
    {
        return view('site/supports/create');
    }

    public function store(StoreSupportRequest $request, Support $support)
    {   
        $this->service->create(CreateSupport::parseRequestData($request));
        return redirect()->route('support.index');
    }

    public function show(string $id)
    {
        if(!$support = $this->service->getOne($id)) {
            return back();
        }

        return view('site/supports/show', compact('support'));
    }

    public function edit(string $id)
    {
        if(!$support = $this->service->getOne($id)) {
            return back();
        }

        return view('site/supports/edit', compact('support'));
    }

    public function update(StoreSupportRequest $request, Support $support, $id)
    {
        if(!$support = $support->find($id)) {
            return back();
        }

        $support->update($request->only([
            'subject',
            'body'
        ]));

        return redirect()->route('support.index');

    }

    public function destroy(string $id)
    {
        $this->service->delete($id);

        return redirect()->route('support.index');
    }

}
