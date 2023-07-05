@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sale Details</h1>

        <table class="table">
            <tbody>
                <tr>
                    <th>ID:</th>
                    <td>{{ $sales->SALES_ID }}</td>
                </tr>
                <tr>
                    <th>Sales No:</th>
                    <td>{{ $sales->SALES_NO }}</td>
                </tr>
                <tr>
                    <th>Customer:</th>
                    <td>{{ $sales->customer->CUSTOMER_NAME }}</td>
                </tr>
                <tr>
                    <th>Salesman:</th>
                    <td>{{ $sales->salesman->SALES_PERSON }}</td>
                </tr>
                <tr>
                    <th>Created By:</th>
                    <td>{{ $sales->user->username }}</td>
                </tr>
                <tr>
                    <th>Input Date:</th>
                    <td>{{ $sales->INPUT_DATE }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Show Sub Sales -->
        <h2>Sub Sales</h2>
        <a href="{{ route('sub-sales.create', $salesId) }}" class="btn btn-success">Add sub sales</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantity Sales</th>
                    <th>Unit Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subSales as $item)
                    <tr>
                        <td>{{ $item->item->ITEM_NAME }}</td>
                        <td>{{ $item->QTY_SALES }}</td>
                        <td>{{ $item->UNIT_PRICE }}</td>
                        <td>
                            <form action="{{ route('sub-sales.destroy', $item->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this sub sale?')">Delete</button>
                            </form>
                            <a href="{{ route('sub-sales.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
