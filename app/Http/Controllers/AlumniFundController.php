<?php

namespace App\Http\Controllers;

use App\Models\AlumniFund;
use App\Models\Saldo;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\File;

class AlumniFundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saldo = Saldo::latest('saldo')->first();
        return view('dashboard.dana-alumni.index', [
            'navbar' => 'Dana Alumni',
            'funds' => AlumniFund::all(),
            'saldo' => $saldo,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dana-alumni.create', [
            'navbar' => 'Tambah Transaksi',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlumniFundRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $saldo_terakhir = Saldo::latest('saldo')->first();
        if ($saldo_terakhir == null) {
            $saldo_terakhir['saldo'] = 0;
        }
        $validatedData = $request->validate([
            'tgl_transaksi' => 'required',
            'jenis_transaksi' => 'required',
            'jumlah' => 'required',
            'image' => 'image|file|max:2048',
            'keterangan' => 'required',
        ]);

        // Mengecek apakah uang masuk atau keluar
        if ($request->jenis_transaksi == 'pemasukan') {
            $validatedData['uang_masuk'] = $request->jumlah;
            $validatedData['uang_keluar'] = null;
            $saldo['saldo'] = $saldo_terakhir['saldo'] + $request->jumlah;
        } else {
            $validatedData['uang_keluar'] = $request->jumlah;
            $validatedData['uang_masuk'] = null;
            $saldo['saldo'] = $saldo_terakhir['saldo'] - $request->jumlah;
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['slug'] = SlugService::createSlug(AlumniFund::class, 'slug', $request->jenis_transaksi);

        // Mengecek gambar
        if ($image = $request->file('image')) {
            $destinationPath = 'fund-images/';
            $postImg = date('YmdHis') . auth()->user()->id . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImg);
            $validatedData['image'] = "$postImg";
        }

        // dd($validatedData, $saldo);
        AlumniFund::create($validatedData);
        // Mengecek apakah sudah ada data saldo, jika sudah ada update data yang lama
        $last_saldo = Saldo::latest('saldo')->first();
        if ($last_saldo == null) {
            Saldo::create($saldo);
        } else {
            Saldo::where('id', $last_saldo->id)
                ->update($saldo);
        }

        return redirect('/dashboard/dana-alumni')->with('success', 'Berhasil mengunggah transaksi baru!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AlumniFund  $alumniFund
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('dashboard.dana-alumni.show', [
            'navbar' => 'Detail Transaksi',
            'fund' => AlumniFund::where('slug', $slug)->firstOrFail(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AlumniFund  $alumniFund
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $this->authorize('admin');
        return view('dashboard.dana-alumni.edit', [
            'navbar' => 'Edit Transaksi',
            'fund' => AlumniFund::where('slug', $slug)->firstOrFail(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlumniFundRequest  $request
     * @param  \App\Models\AlumniFund  $alumniFund
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $this->authorize('admin');
        // dd($request->all());
        $fund = AlumniFund::where('slug', $slug)->firstOrFail();
        $saldo_terakhir = Saldo::latest('saldo')->first();
        // dd($saldo_terakhir);
        if ($saldo_terakhir == null) {
            $saldo_terakhir['saldo'] = 0;
        }
        $validatedData = $request->validate([
            'tgl_transaksi' => 'required',
            'image' => 'image|file|max:2048',
            'keterangan' => 'required',
        ]);

        // Mengecek apakah uang masuk atau keluar
        if ($request->jenis_transaksi == 'pemasukan') {
            $validatedData['uang_masuk'] = $request->jumlah;
            $validatedData['uang_keluar'] = null;
            if ($request->oldPemasukan == null) {
                $saldo['saldo'] = $saldo_terakhir['saldo'] + $request->oldPengeluaran + $request->jumlah;
            } else {
                $saldo['saldo'] = $saldo_terakhir['saldo'] + $request->jumlah - $request->oldPemasukan;
            }
        } else {
            $validatedData['uang_keluar'] = $request->jumlah;
            $validatedData['uang_masuk'] = null;
            if ($request->oldPengeluaran == null) {
                $saldo['saldo'] = $saldo_terakhir['saldo'] - $request->oldPemasukan - $request->jumlah;
            } else {
                $saldo['saldo'] = $saldo_terakhir['saldo'] - $request->jumlah + $request->oldPengeluaran;
            };
        }

        $validatedData['user_id'] = auth()->user()->id;

        // Mengecek gambar apakah sama
        if ($image = $request->file('image')) {
            if ($request->oldImage) {
                File::delete('fund-images/' . $request->oldImage);
            }
            $destinationPath = 'fund-images/';
            $postImg = date('YmdHis') . auth()->user()->id . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImg);
            $validatedData['image'] = "$postImg";
        }

        AlumniFund::where('id', $fund->id)->update($validatedData);
        // Mengecek apakah sudah ada data saldo, jika sudah ada update data yang lama
        $last_saldo = Saldo::latest('saldo')->first();
        Saldo::where('id', $last_saldo->id)
            ->update($saldo);

        return redirect('/dashboard/dana-alumni')->with('success', 'Berhasil mengubah data transaksi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlumniFund  $alumniFund
     * @return \Illuminate\Http\Response
     */
    public function destroy(AlumniFund $alumniFund)
    {
        $this->authorize('admin');
    }
}
