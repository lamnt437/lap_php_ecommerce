@extends('layouts.master')
@section('content')
    <div class="container mb-2 text-success font-weight-bold">
        <div class="row">
            <div class="col-sm-1 ml-auto">
                <a href="{{ route('users.show', ['user' => auth()->id()]) }}" class="text-decoration-none">{{ __('user.account') }}</a>
                <a href="{{ route('users.showOrder', ['user' => auth()->id()]) }}" class="text-decoration-none">{{ __('user.order') }}</a>
                <a href="{{ route('suggests.listSuggest') }}" class="text-decoration-none">{{ __('user.suggest') }}</a>
            </div>
            <div class="col-sm-8 offset-4 ml-auto">
                <form>
                    @csrf
                    <div class="form-group">
                        <label for="image">{{ __('user.avatar') }}</label>
                        @if (!auth()->user()->image)
                            <img src="{{ asset('storage/images/member-default.jpg') }}" class="rounded-circle avatar-user">
                        @else
                            <img src="{{ asset('storage/images/' . $user->image) }}" class="rounded-circle avatar-user">
                        @endif
                        <div class="form-group mt-2">
                            <input type="file" class="form-control-file" name="image" id="image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="old-password">{{ __('user.old_password') }}</label>
                        <input type="password" class="form-control" id="old-password" name="old_password" placeholder="{{ __('user.enter_old_password') }}">
                    </div>
                    <div class="form-group">
                        <label for="new-password">{{ __('user.new_password') }}</label>
                        <input type="password" class="form-control" id="new-password" name="password" placeholder="{{ __('user.enter_new_password') }}">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">{{ __('user.confirm_password') }}</label>
                        <input type="password" class="form-control" id="confirm-password" name="password_confirmation" placeholder="{{ __('user.enter_confirm_password') }}">
                    </div>
                    <button type="submit" class="btn btn-success" id="user-btn-save" value="{{ auth()->id() }}">
                        <i class="fa fa-floppy-o pr-2" aria-hidden="true"></i>{{ __('user.save') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
