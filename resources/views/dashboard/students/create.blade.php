@extends('layouts.dashboard')
@section('title', 'Pages')
@section('content')
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Voucher</h3>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block nk-block-lg">
        <div class="card card-bordered">
            <div class="card-inner">
                <form method="POST" action="{{ route('dashboard.voucher.store') }}" class="form-validate"
                    novalidate="novalidate" method="post" enctype="multipart/form-data">
                    @csrf
                    <span class="preview-title-lg overline-title">Fullname</span>
                    <div class="row gy-4">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control @error('title') error @enderror"
                                        id="fullname" name="fullname" placeholder="Sardor Sattorov" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="preview-hr">
                    <span class="preview-title-lg overline-title">Pasport seriya</span>
                    <div class="row gy-4">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control @error('title') error @enderror"
                                        id="pseries" name="pseries" placeholder="AB" maxlength="2" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="preview-hr">
                    <span class="preview-title-lg overline-title">Pasport raqam</span>
                    <div class="row gy-4">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control @error('title') error @enderror"
                                        id="pnumber" name="pnumber" placeholder="1234567" maxlength="7" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="preview-hr">
                    <div class="card-inner border-top">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Print</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
