@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.query.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.queries.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.query.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.query.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="mobile_number">{{ trans('cruds.query.fields.mobile_number') }}</label>
                <input class="form-control {{ $errors->has('mobile_number') ? 'is-invalid' : '' }}" type="text" name="mobile_number" id="mobile_number" value="{{ old('mobile_number', '') }}" required>
                @if($errors->has('mobile_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mobile_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.query.fields.mobile_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.query.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.query.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="courses">{{ trans('cruds.query.fields.courses') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('courses') ? 'is-invalid' : '' }}" name="courses[]" id="courses" multiple>
                    @foreach($courses as $id => $courses)
                        <option value="{{ $id }}" {{ in_array($id, old('courses', [])) ? 'selected' : '' }}>{{ $courses }}</option>
                    @endforeach
                </select>
                @if($errors->has('courses'))
                    <div class="invalid-feedback">
                        {{ $errors->first('courses') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.query.fields.courses_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="dealt_by_id">{{ trans('cruds.query.fields.dealt_by') }}</label>
                <select class="form-control select2 {{ $errors->has('dealt_by') ? 'is-invalid' : '' }}" name="dealt_by_id" id="dealt_by_id" required>
                    @foreach($dealt_bies as $id => $dealt_by)
                        <option value="{{ $id }}" {{ old('dealt_by_id') == $id ? 'selected' : '' }}>{{ $dealt_by }}</option>
                    @endforeach
                </select>
                @if($errors->has('dealt_by'))
                    <div class="invalid-feedback">
                        {{ $errors->first('dealt_by') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.query.fields.dealt_by_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.query.fields.address') }}</label>
                <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address" id="address">{{ old('address') }}</textarea>
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.query.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="comments_remarks">{{ trans('cruds.query.fields.comments_remarks') }}</label>
                <textarea class="form-control {{ $errors->has('comments_remarks') ? 'is-invalid' : '' }}" name="comments_remarks" id="comments_remarks">{{ old('comments_remarks') }}</textarea>
                @if($errors->has('comments_remarks'))
                    <div class="invalid-feedback">
                        {{ $errors->first('comments_remarks') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.query.fields.comments_remarks_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="interaction_type_id">{{ trans('cruds.query.fields.interaction_type') }}</label>
                <select class="form-control select2 {{ $errors->has('interaction_type') ? 'is-invalid' : '' }}" name="interaction_type_id" id="interaction_type_id">
                    @foreach($interaction_types as $id => $interaction_type)
                        <option value="{{ $id }}" {{ old('interaction_type_id') == $id ? 'selected' : '' }}>{{ $interaction_type }}</option>
                    @endforeach
                </select>
                @if($errors->has('interaction_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('interaction_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.query.fields.interaction_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="status_id">{{ trans('cruds.query.fields.status') }}</label>
                <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status_id" id="status_id">
                    @foreach($statuses as $id => $status)
                        <option value="{{ $id }}" {{ old('status_id') == $id ? 'selected' : '' }}>{{ $status }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.query.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection