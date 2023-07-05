@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Sale</h1>
        <form action="{{ route('sales.update', $sales->SALES_ID) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="sales_no">Sales No:</label>
                <input type="text" name="SALES_NO" class="form-control" value="{{ $sales->SALES_NO }}" required>
            </div>
            <div class="form-group">
                <label for="customer_id">Customer:</label>
                <select name="CUSTOMER_ID" class="form-control" required>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->CUSTOMER_ID }}"
                            {{ $customer->CUSTOMER_ID == $sales->CUSTOMER_ID ? 'selected' : '' }}>
                            {{ $customer->CUSTOMER_NAME }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="salesman_id">Salesman:</label>
                <select name="SALESMAN_ID" class="form-control" required>
                    @foreach ($salesmen as $salesman)
                        <option value="{{ $salesman->SALESMAN_ID }}"
                            {{ $salesman->SALESMAN_ID == $sales->SALESMAN_ID ? 'selected' : '' }}>
                            {{ $salesman->SALES_PERSON }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
