@extends('layouts.app')

@section('content')
    <div class="bg-black text-green-lighter h-screen">
        <form method="POST" action="{{ route('admin.postLogin') }}" class="flex flex-col items-center justify-center h-screen">
            {{ csrf_field() }}
            <input type="password" name="password">
            <button type="submit" class="text-red-light font-hairline tracking-tight">Ne click pas</button>
        </form>
    </div>
@endsection