@extends('layouts.app')
 
@section('title', 'Home Page')
 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<table class="table mt-3  text-left">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Name</th>
						<th scope="col" class="pr-5">Birthday</th>
						<th scope="col">Address</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@forelse($students as $student)
					<tr>
						<td>{!! $student->id !!}</td>
						<td>{!! $student->fullname !!}</td>
						<td class="pr-5 text-right">{!! $student->birthday !!}</td>
						<td>{!! $student->address !!}</td>
						<td><a href="edit/{!! $student->id !!}"
							class="btn btn-outline-primary">Edit</a>
					</tr>
					
					@empty
					<tr>
						<td colspan="3">No students found</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>

</script>
@endsection