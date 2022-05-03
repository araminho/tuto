@extends('brands.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Brands list</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('brands.create') }}"> Create New brand</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>

        @forelse ($brands as $brand)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $brand->name }}</td>
            <td>
                <form action="{{ route('brands.destroy',$brand->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('brands.show',$brand->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('brands.edit',$brand->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @empty
            <tr><td colspan=3> No brands </td></tr>
        @endforelse
    </table>

    {!! $brands->links() !!}

@endsection
