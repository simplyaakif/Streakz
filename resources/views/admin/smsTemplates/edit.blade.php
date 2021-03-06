@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.smsTemplate.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sms-templates.update", [$smsTemplate->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.smsTemplate.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $smsTemplate->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.smsTemplate.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sms_template">{{ trans('cruds.smsTemplate.fields.sms_template') }}</label>
                <textarea class="form-control {{ $errors->has('sms_template') ? 'is-invalid' : '' }}" name="sms_template" id="sms_template">{{ old('sms_template', $smsTemplate->sms_template) }}</textarea>
                @if($errors->has('sms_template'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sms_template') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.smsTemplate.fields.sms_template_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('active') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="active" value="0">
                    <input class="form-check-input" type="checkbox" name="active" id="active" value="1" {{ $smsTemplate->active || old('active', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="active">{{ trans('cruds.smsTemplate.fields.active') }}</label>
                </div>
                @if($errors->has('active'))
                    <div class="invalid-feedback">
                        {{ $errors->first('active') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.smsTemplate.fields.active_helper') }}</span>
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