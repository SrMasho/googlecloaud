@extends('layouts.admin')

@section ('content')

<div class="col-12 col-md-12 col-sm-12 col-lg-10">
    <h5>ADD PRODUCTO</h5>
    <hr>

    <form method="POST" action="{{ route('product.create') }}" enctype="multipart/form-data">
        @csrf
        <div class="row ">

            <div class="col-12">
                <label for="name" class="">{{ __('Nombre') }}</label>
                <div class="form-group">
                    <div>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="price" class="">{{ __('Precio') }}</label>
                <div class="form-group">
                    <div>
                        <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price')  }}" required autocomplete="price" autofocus>
                        @error('price')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="brand" class="">{{ __('Marca') }}</label>
                <div class="form-group">
                    <div>
                        <select name="brand" id="addproductbrand" class="form-control">
                            <option selected="true" value="" disabled hidden>Selecciona marca del producto</option>
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="New Balance">Converse</option>
                            <option value="Asics">Asics</option>
                            <option value="Puma">Puma</option>
                            <option value="Skechers">Skechers</option>
                            <option value="Fila">Fila</option>
                            <option value="Bata">Bata</option>
                            <option value="Burberry">Burberry</option>
                            <option value="Converse">Otros</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="gender" class="">{{ __('Género') }}</label>
                <div class="form-group">
                    <div>
                        <select name="gender" id="addproductgender" class="form-control">
                            <option selected="true" value="" disabled hidden>Selecciona preferencia</option>
                            <option value="Male">Mujer</option>
                            <option value="Female">Hombre</option>
                            <option value="Unisex">Unisex</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <label for="category" class="">{{ __('Categoría') }}</label>
                <div class="form-group">
                    <div>
                        <select name="category" id="addproductcategory" class="form-control">
                            <option value="Shoes">Shoes</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <label for="image" class="">Imagen del Producto</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @error('image')

                    <div style="color:red; font-weight:bold; font-size:0.7rem;">{{ $message }}</div>

                    @enderror
                </div>
            </div>



        </div>

        <button type="submit" class="btn btn-success w-100">ADD PRODUCTO</button>

    </form>

</div>

@endsection
