@extends('backend.layouts.app')
@section('title', __('labels.backend.tests.title').' | '.app_name())

@push('after-styles')
<style>
.select2-container--default .select2-selection--single {
    height: 35px;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 35px;
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 35px;
}
</style>
@endpush
@section('content')
<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">


<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

{!! Form::open(['method' => 'POST', 'route' => ['admin.tests.store']]) !!}

<div class="card">
    <div class="card-header">
        <h3 class="page-title float-left mb-0">@lang('labels.backend.tests.create')</h3>
        <div class="float-right">
            <a href="{{ route('admin.tests.index') }}" class="btn btn-success">@lang('labels.backend.tests.view')</a>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-lg-6 form-group">
                {!! Form::label('course_id', trans('labels.backend.tests.fields.course'), ['class' => 'control-label'])
                !!}
                {!! Form::select('course_id', $courses, old('course_id'), ['class' => 'form-control select2']) !!}

            </div>

            <div class="col-12 col-lg-6  form-group">
                {!! Form::label('title',trans('labels.backend.tests.fields.title'), ['class' => 'control-label']) !!}
                {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' =>
                trans('labels.backend.tests.fields.title')]) !!}

            </div>
        </div>

        <div class="row">
            <div class="col-12 form-group">
                {!! Form::label('description',trans('labels.backend.tests.fields.description'), ['class' =>
                'control-label']) !!}
                {!! Form::textarea('description', old('description'), ['class' => 'form-control ', 'placeholder' =>
                trans('labels.backend.tests.fields.description')]) !!}
            </div>
        </div>
        <div>
            <div class="card">
                <div class="card-header">
                    <h3 class="page-title float-left mb-0">Question Deatils</h3>
                </div>
                <div id="question_edit" class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row">
                                <div class="form-group form-md-line-input has-info col-6" style="margin-top:10px">
                                    <textarea name="question_content" id="question_content"
                                        class="form-control ckeditor"></textarea>
                                    <!-- <input type="text" class="form-control"   id="question_content"> -->

                                    {{--{!! Form::textarea('content', '', ['class' => 'form-control editor', 'placeholder' => '','name'=>'question_content','id' => 'question_content']) !!}--}}
                                    <label for="question_content">Question</label>
                                </div>
                                <div class="form-group form-md-line-input has-info col-6"  style="margin-top:10px">
                                    <textarea name="help-editor" id="help-editor"
                                        class="form-control ckeditor"></textarea>
                                    {{--{!! Form::textarea('content', '', ['class' => 'form-control editor', 'placeholder' => '','id' => 'help-editor']) !!}--}}
                                    <label for="question_help_info">Question Help or Information</label>
                                    
                                </div>
                                @if($errors->has('question'))
                                <p class="help-block">
                                    {{ $errors->first('question') }}
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group form-md-line-input has-info col-6"  style="margin-top:10px">
                                <input type="color" name="" value="">
                                <label for="question_help_info">Color 1</label>
                            </div>
                            <div class="form-group form-md-line-input has-info col-6"  style="margin-top:10px">
                                <input type="color" name="" value="">
                                <label for="question_help_info">Color 2</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-group">
                {!! Form::hidden('published', 0) !!}
                {!! Form::checkbox('published', 1, false, []) !!}
                {!! Form::label('published', trans('labels.backend.tests.fields.published'), ['class' => 'control-label
                font-weight-bold']) !!}

            </div>
        </div>
    </div>
</div>

{!! Form::submit(trans('strings.backend.general.app_save'), ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
@stop