@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row align-items-center">
		<div class="col">
			<div class="card">
				<div class="card-body">
					<form action="{{ url('content2') }}" class="w-100" method="post">
						@csrf
						<div class="form-group row">
							<div class="col-12">
								<label for="">Content</label>
								<textarea class="form-control" type="text" name="content" required></textarea>
							</div>
							<div class="col-12">
								<label for="">Posation</label>
								<input class="form-control" type="number" name="posation" required>
							</div>
							<div class="col-12 mt-3">
								<input type="submit" class="btn btn-success">
							</div>
						</div>
					</form>
				</div>
		 	</div>
		</div>
	</div>
</div>
@endsection
