@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header">{{ __('Add new item') }}</div>

			<div class="card-body">
				<form method="POST" action="{{ route('items.store') }}" enctype='multipart/form-data'>
					@csrf

					<div class="form-group row">
						<label for="name" class="col-md-4 col-form-label text-md-right">
							{{ __('Nombre de la comida') }}
						</label>
						<div class="col-md-6">
							<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value='{{ old('name') }}' autocomplete="name" autofocus>
							@error('name')	
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>

					<div class="form-group row">
						<label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion de la comida') }}</label>
						<div class="col-md-6">
							<textarea id="description" type="text" class="form-control" name="description" autocomplete="description">{{ old('description') }}</textarea>
							@error('description')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>

					<div class="form-group row">
						<label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Imagen de la comida') }}</label>

						<div class="col-md-6">
							<input id="image" type="file" class="form-control-file @error('image') is-invalid @enderror" name="image">

							@error('image')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>

					<div class="form-group row">
						<label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio de la comida') }}</label>

						<div class="col-md-6">
							<input id="price" type="number" step='0.01' class="form-control @error('description') is-invalid @enderror" name="price" autocomplete="price" value='{{ old('price') }}'>
							@error('price')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror

						</div>
					</div>

					<div class="form-group row mb-0">
						<div class="col-md-6 offset-md-4">
							<button type="submit" class="btn btn-primary">
								{{ __('Guardar') }}
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
