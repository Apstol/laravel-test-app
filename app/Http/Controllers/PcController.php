<?php

namespace App\Http\Controllers;

use App\Models\Pc;
use App\Models\Model;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PcController extends Controller
{
    public function index(): View
    {
        $pcs = Pc::with('model')
            ->orderBy('id')
            ->cursorPaginate(5);

        return view('pcs.index', compact('pcs'));
    }

    public function create(): View
    {
        $models = Model::all();

        return view('pcs.create')
                ->with('models', $models);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'ram'         => 'required|numeric|gt:0',
            'hd'          => 'required|numeric|gt:0',
            'price'       => 'required|numeric|gt:0',
            'model_id'    => ['exists:App\Models\Model,id']
        ]);

        Pc::create($request->all());

        return redirect()
                    ->route('pcs.index')
                    ->with('success', 'PC created successfully.');
    }

    public function show(Pc $pc): View
    {
        return view('pcs.show', compact('pc'));
    }

    public function edit(Pc $pc): View
    {
        $models = Model::all();

        return view('pcs.edit', compact('pc'))
                ->with('models', $models);
    }

    public function update(Request $request, Pc $pc): RedirectResponse
    {
        $request->validate([
            'ram'         => 'required|numeric|gt:0',
            'hd'          => 'required|numeric|gt:0',
            'price'       => 'required|numeric|gt:0',
            'model_id'    => ['exists:App\Models\Model,id']
        ]);

        $pc->update($request->all());

        return redirect()
                    ->route('pcs.index')
                    ->with('success', 'PC updated successfully.');
    }

    public function destroy(Pc $pc): RedirectResponse
    {
        $pc->delete();

        return redirect()
                    ->route('pcs.index')
                    ->with('success', 'PC deleted successfully.');
    }
}
