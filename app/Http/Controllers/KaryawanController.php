<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    // Method to show the list of karyawan
    public function index()
    {
        return Karyawan::all();
    }

    // Method to store the new karyawan data
    public function store(Request $request)
    {
        $request->validate([
            'nama'  => 'required|string|max:255',
            'email' => 'required|email|unique:karyawans,email',
        ]);

        $karyawan = Karyawan::create([
            'nama'  => $request->nama,
            'email' => $request->email,
        ]);

        return response()->json($karyawan, 201);
    }

    // Method to show a single karyawan
    public function show(string $id)
    {
        $karyawan = Karyawan::findOrFail($id);

        return response()->json($karyawan);
    }

    // Method to update existing karyawan data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'  => 'required|string|max:255',
            'email' => 'required|email|unique:karyawans,email,'.$id,
        ]);

        $karyawan = Karyawan::findOrFail($id);

        $karyawan->update([
            'nama'  => $request->nama,
            'email' => $request->email,
        ]);

        return response()->json($karyawan);
    }

    // Method to delete an existing karyawan
    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();

        return response()->json(null, 204);
    }
}
