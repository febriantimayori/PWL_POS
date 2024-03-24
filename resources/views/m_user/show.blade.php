@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'M_User')
@section('content_header_title', 'Show')
@section('content_header_subtitle', 'M_User')

@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Show Data M_User</h3>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>User_id:</strong>
                        {{ $useri->user_id }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Level_id:</strong>
                        {{ $useri->level_id }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Username:</strong>
                        {{ $useri->username }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama:</strong>
                        {{ $useri->nama }}
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <a class="btn btn-secondary" href="{{ route('m_user.index') }}"> Back</a>
            </div>
        </div>
    </div>
</div>
@endsection