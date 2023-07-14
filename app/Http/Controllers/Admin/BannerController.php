<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helpers;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerStoreRequest;
use App\Http\Requests\BannerUpdateRequest;
use App\Models\Banner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $user = Auth::user();
        $banners = Banner::orderBy('id', 'desc')->get();
        return view('adm-banner-index', compact('banners', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $user = Auth::user();
        return view('adm-banner-create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BannerStoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['image'] = Helpers::processImages($validated['image'], 1920, 500, 'banner');
        Banner::create($validated);
        return redirect()->route('banner.index')->with('success', 'Banner adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner): View
    {
        $user = Auth::user();
        return view('adm-banner-show', compact('banner', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner): View
    {
        $user = Auth::user();
        return view('adm-banner-edit', compact('banner', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BannerUpdateRequest $request, Banner $banner): RedirectResponse
    {
        $validated = $request->validated();
        if (isset($validated['image'])) {
            $validated['image'] = Helpers::processImages($validated['image'], 1920, 500, 'banner');
        }
        $banner->update($validated);
        return redirect()->route('banner.index')->with('success', 'Banner atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner): RedirectResponse
    {
        $banner->delete();
        return redirect()->route('banner.index')->with('success', 'Banner excluído com sucesso!');
    }
}
