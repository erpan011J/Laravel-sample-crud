@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Sub Sale</h1>

        <!-- Edit sub sale form -->
        <form action="{{ route('sub-sales.update', $subSale) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- ITEM_ID input -->
            <div class="form-group">
                <label for="item_id">Item ID</label>
                <select class="form-control" id="item_id" name="ITEM_ID" required>
                    @foreach ($items as $item)
                        <option value="{{ $item->ITEM_ID }}" {{ $item->ITEM_ID === $subSale->ITEM_ID ? 'selected' : '' }}>
                            {{ $item->ITEM_NAME }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- QTY_SALES input -->
            <div class="form-group">
                <label for="qty_sales">Quantity Sales</label>
                <input type="text" class="form-control" id="qty_sales" name="QTY_SALES" value="{{ $subSale->QTY_SALES }}"
                    required>
            </div>

            <!-- UNIT_PRICE input -->
            <div class="form-group">
                <label for="unit_price">Unit Price</label>
                <input type="text" class="form-control" id="unit_price" name="UNIT_PRICE"
                    value="{{ $subSale->UNIT_PRICE }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
