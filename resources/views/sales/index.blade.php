@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sales</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Sales No</th>
                    <th>Customer</th>
                    <th>Salesman</th>
                    <th>Created By</th>
                    <th>Input Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale)
                    <tr>
                        <td>{{ $sale->SALES_ID }}</td>
                        <td>{{ $sale->SALES_NO }}</td>
                        <td>{{ $sale->customer->CUSTOMER_NAME }}</td>
                        <td>{{ $sale->salesman->SALES_PERSON }}</td>
                        <td>{{ $sale->user->username }}</td>
                        <td>{{ $sale->INPUT_DATE }}</td>
                        <td>
                            <a href="{{ route('sales.show', $sale->SALES_ID) }}" class="btn btn-primary">Details</a>
                            <a href="{{ route('sales.edit', $sale->SALES_ID) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('sales.destroy', $sale->SALES_ID) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this sale?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('sales.create') }}" class="btn btn-success">Add Sale</a>
    </div>
@endsection
