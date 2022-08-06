@extends("dashboard.dashboard")
@section("content")

<div class="row">
	<h3 class="text-center mb-3">All Texts</h3>
        <a href="{{ url('create-text') }}" style="width: 190px"><button class="btn btn-primary" style="width: 190px">Add
                Text</button></a>
				<div>
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif
                </div>
				<table class="table table-hover my-0" id="myTable">
					<thead>
						<tr>
							<th>Sr #</th>
							<th>Title</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						@if(isset($texts))
						@foreach($texts as $text)
							<tr>
								<td>{{ $text->id }}</td>
								<td>{{ $text->title }}</td>
								<td>{{ $text->description }}</td>

								<td>
								<a href="{{url('destory-text')}}/{{ $text->id }}" class="btn btn-danger"><i class="align-middle" data-feather="trash"></i> <span class="align-middle"></span></a>	

									<a href="{{url('edit-text')}}/{{ $text->id }}" class="btn btn-info"><i class="align-middle" data-feather="edit"></i> <span class="align-middle"></span></a>
								</td>
							</tr>
							@endforeach
							{{$texts->links()}}
							@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>


@endsection