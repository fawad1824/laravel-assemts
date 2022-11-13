@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">
                <h4>Products Create</h4>
            </div>
            <div class="row row-eq-height justify-content-center">
                <form action="{{ route('product.store') }}" method="post">
                    @csrf
                    <div class="form-group m-3 pl-3 pr-3">
                        <label for="title">Title</label>
                        <input type="text" required class="form-control" name="title" placeholder="Enter Title">
                    </div>
                    <div class="form-group m-3 pl-3 pr-3">
                        <label for="desc">Description</label>
                        <textarea name="desc" required class="form-control" id="" cols="30" rows="8"
                            placeholder="Enter Desc"></textarea>
                    </div>
                    <div class="form-group m-3 pl-3 pr-3">
                        <label for="price">Base Price</label>
                        <input type="price" required class="form-control" name="price" placeholder="Enter Price">
                    </div>
                    <div class="form-group m-3 pl-3 pr-3">
                        <label for="price">Special Price</label>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Special Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="AddList">
                                <tr>
                                    <td id="namesAdd">
                                        <select name="namelist" class="form-control namelist">
                                            <option value="">Please Select User</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->name }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td><input type="number" name="pricess" id="" class="form-control pricess"
                                            placeholder="Enter Price">
                                    </td>
                                    <td><button class="btn btn-primary addnew">+</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group m-3 pl-3 pr-3">
                        <button class="btn btn-primary">Add Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
