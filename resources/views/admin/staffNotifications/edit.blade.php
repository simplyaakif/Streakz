@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.staffNotification.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.staff-notifications.update", [$staffNotification->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">{{ trans('cruds.staffNotification.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $staffNotification->title) }}">
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staffNotification.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.staffNotification.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $staffNotification->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staffNotification.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="publish_at">{{ trans('cruds.staffNotification.fields.publish_at') }}</label>
                <input class="form-control date {{ $errors->has('publish_at') ? 'is-invalid' : '' }}" type="text" name="publish_at" id="publish_at" value="{{ old('publish_at', $staffNotification->publish_at) }}">
                @if($errors->has('publish_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('publish_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staffNotification.fields.publish_at_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="valid_till">{{ trans('cruds.staffNotification.fields.valid_till') }}</label>
                <input class="form-control date {{ $errors->has('valid_till') ? 'is-invalid' : '' }}" type="text" name="valid_till" id="valid_till" value="{{ old('valid_till', $staffNotification->valid_till) }}">
                @if($errors->has('valid_till'))
                    <div class="invalid-feedback">
                        {{ $errors->first('valid_till') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staffNotification.fields.valid_till_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="staff_members">{{ trans('cruds.staffNotification.fields.staff_members') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('staff_members') ? 'is-invalid' : '' }}" name="staff_members[]" id="staff_members" multiple>
                    @foreach($staff_members as $id => $staff_members)
                        <option value="{{ $id }}" {{ (in_array($id, old('staff_members', [])) || $staffNotification->staff_members->contains($id)) ? 'selected' : '' }}>{{ $staff_members }}</option>
                    @endforeach
                </select>
                @if($errors->has('staff_members'))
                    <div class="invalid-feedback">
                        {{ $errors->first('staff_members') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.staffNotification.fields.staff_members_helper') }}</span>
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