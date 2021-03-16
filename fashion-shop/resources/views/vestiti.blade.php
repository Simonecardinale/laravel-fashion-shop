@extends('layouts.app')

@section('db_vestiti')
    @foreach ($shop_vestiti as $item)
        <ul>
            <li>ID: {{ $item -> ID }}</li>
            <li>Colore: {{ $item -> Colore }}</li>
            <li>Taglia: {{ $item -> Taglia }}</li>
            <li>Brand: {{ $item -> Brand }}</li>
        </ul>
    @endforeach
@endsection
