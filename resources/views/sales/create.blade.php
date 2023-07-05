@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Sale</h1>
        <form action="{{ route('sales.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="sales_no">Sales No:</label>
                <input type="text" name="SALES_NO" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="customer_id">Customer:</label>
                <select name="CUSTOMER_ID" class="form-control" required>
                    <option value="">Select Customer</option>
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->CUSTOMER_ID }}">{{ strtoupper($customer->CUSTOMER_NAME) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="salesman_id">Salesman:</label>
                <select name="SALESMAN_ID" class="form-control" required>
                    <option value="">Select Salesman</option>
                    @foreach ($salesmen as $salesman)
                        <option value="{{ $salesman->SALESMAN_ID }}">{{ strtoupper($salesman->SALES_PERSON) }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
