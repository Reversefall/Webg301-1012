<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
public function index()
{
$phongbans = User::all();
return view('phongban.index', compact('phongbans'));
}
public function create()
{
return view('phongban.create');
}
public function store(Request $request)
{

$request->validate([
'ten_phongban' => 'required|string|max:255',
]);
User::create($request->all());
return redirect()->route('phongban.index')->with('success', 'Phòng ban đã được tạo.');
}
public function edit($id)
{
$phongban = User::findOrFail($id);
return view('phongban.edit', compact('phongban'));
}
public function update(Request $request, $id)
{
$request->validate([
'ten_phongban' => 'required|string|max:255',
]);
$phongban = User::findOrFail($id);
$phongban->update($request->all());
return redirect()->route('phongban.index')->with('success', 'Phòng ban đã được cập nhật.');
}
public function destroy($id)
{
$phongban = User::findOrFail($id);
$phongban->delete();
return redirect()->route('phongban.index')->with('success', 'Phòng ban đã được xóa.');
}
}