<!-- resources/views/sub_sales/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Sub Sale</h1>

        <!-- Create sub sale form -->
        <form action="{{ route('sub-sales.store', $salesId) }}" method="POST">
            @csrf

            <!-- ITEM_ID input -->
            <div class="form-group">
                <label for="item_id">Item</label>
                <select class="form-control" id="item_id" name="ITEM_ID" required>
                    @foreach ($items as $item)
                        <option value="{{ $item->ITEM_ID }}">{{ $item->ITEM_NAME }}</option>
                    @endforeach
                </select>
            </div>

            <!-- QTY_SALES input -->
            <div class="form-group">
                <label for="qty_sales">Quantity Sales</label>
                <input type="number" step="0.1" class="form-control" id="qty_sales" name="QTY_SALES" required>
            </div>

            <!-- UNIT_PRICE input -->
            <div class="form-group">
                <label for="unit_price">Unit Price</label>
                <input type="number" step="0.1" class="form-control" id="unit_price" name="UNIT_PRICE" required>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
