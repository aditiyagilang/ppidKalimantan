@extends('admin.layouts')

@section('content')
    <h2 class="mt-3">{{__('product.products')}}</h2>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">{{__('product.add')}}</a>
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#importModal">
        {{__('product.import')}}
    </button>
    <a href="{{ route('export.product') }}" class="btn btn-success mb-3">{{__('product.export')}}</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table id="productTable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>{{__('product.name')}}</th>
                <th>{{__('product.description')}}</th>
                <th>{{__('product.price')}}</th>
                <th>{{__('product.stock')}}</th>
                <th>{{__('product.images')}}</th>
                <th>{{__('product.actions')}}</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
    <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('import.product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="importModalLabel">{{__('product.import')}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="mb-3">
                    <label for="file" class="form-label">Choose Excel File</label>
                    <input type="file" class="form-control" name="file" required>
                </div>
                <a href="{{ asset('templates/product_template.xlsx') }}">Download Template</a>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
