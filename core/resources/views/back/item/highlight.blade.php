@extends('master.back')
@section('styles')
	<link rel="stylesheet" href="{{asset('assets/back/css/datepicker.css')}}">
@endsection
@section('content')

<div class="container-fluid">

<!-- Page Heading -->
<div class="card mb-4">
    <div class="card-body">
        <div class="d-sm-flex align-items-center justify-content-between">
            <h3 class="mb-0 bc-title"><b>{{ __('Highlight Product') }}</b></h3>
            <a class="btn btn-primary btn-sm" href="{{route('back.item.index')}}"><i class="fas fa-chevron-left"></i> {{ __('Back') }}</a>
        </div>
    </div>
</div>


<!-- Form -->
<div class="row">

<div class="col-xl-12 col-lg-12 col-md-12">
	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body ">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-12">
								<form class="admin-form" action="{{ route('back.item.highlight.update',$item->id) }}"
									method="POST" enctype="multipart/form-data">

                                    @csrf

                                    @method('POST')

									@include('alerts.alerts')

									<div class="form-group">
										<label for="is_type"> حدد القسم*</label>
										<select name="is_type" id="is_type" class="form-control" >
											<option value="undefine" {{$item->is_type == 'undefine' ? 'selected' : ''}}>غير محدد</option>
											<option value="new" {{$item->is_type == 'new' ? 'selected' : ''}} > جوالات سامسونج </option>
											<option value="feature" {{$item->is_type == 'feature' ? 'selected' : ''}} >   جوالات أيفون15 </option>
											<option value="top" {{$item->is_type == 'top' ? 'selected' : ''}} >     أيفون 14 برو ماكس </option>
											<option value="best" {{$item->is_type == 'best' ? 'selected' : ''}} >     جوالات ايفون  13</option>
 											<option value="healthy_and_beauty" {{$item->healthy_and_beauty == 'healthy_and_beauty' ? 'selected' : ''}} >الصحة والجمال</option>
										</select>
									</div>

									<div class="form-group show-datepicker {{$item->is_type =='flash_deal' ? '' : 'd-none'}}">
										<label for="slug">{{ __('Enter Date') }} *</label>
										<input type="text" name="date" class="form-control datepicker" id="datepicker"
											id="slug"
											placeholder="{{ __('Enter Date') }}"
											value="{{ $item->date }}" >
									</div>



									<div class="form-group">
											<button type="submit" class="btn btn-secondary ">{{ __('Submit') }}</button>
									</div>
									<div>
								</form>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

</div>

</div>

@endsection
