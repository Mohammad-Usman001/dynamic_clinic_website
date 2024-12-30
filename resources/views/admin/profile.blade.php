@extends('admin.layout.app')
@section('page-title', 'Profile')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- Main content -->
                <style>
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #52ab63 !important;
}
                    </style>
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">Profile</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="mdi mdi-home-outline"></i></a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container">
                        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="true">Profile</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="password-tab" data-bs-toggle="tab" href="#password" role="tab"
                                    aria-controls="password" aria-selected="false">Change Password</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <!-- Profile Tab -->
                            <div class="tab-pane fade show active" id="profile" role="tabpanel"
                                aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Update Your Profile</h4>
                                                <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data"
                                                      onsubmit="return disableButton(this)">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="name" class="form-label">Name</label>
                                                            <input type="text" name="name" id="name" class="form-control" value="{{ $admin->name }}">
                                                        </div>
     
                                                        <div class="col-md-6">
                                                            <label for="email" class="form-label">Email</label>
                                                            <input type="email" name="email" id="email" class="form-control" value="{{ $admin->email }}">
                                                        </div>
                                                    </div>
                                                    <div><br></div>
                                                    <button type="submit" class="btn btn-success" id="profile-update-btn">Update Profile</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Change Password Tab -->
                            <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Change Password</h4>
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                <form action="{{ route('admin.profile.password') }}" method="POST" onsubmit="return disableButton(this)">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <label for="current_password" class="form-label">Current Password</label>
                                                        <input type="password" name="current_password" id="current_password" class="form-control">
                                                        @error('current_password')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="new_password" class="form-label">New Password</label>
                                                        <input type="password" name="new_password" id="new_password" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="new_password_confirmation" class="form-label">Confirm Password</label>
                                                        <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
                                                    </div>
                                                    <button type="submit" class="btn btn-success" id="password-update-btn">Change Password</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        function disableButton(form) {
            const submitButton = form.querySelector('button[type="submit"]');
            submitButton.disabled = true;
            submitButton.innerHTML = 'Processing... <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>';
            return true;
        }

        @if(session('success'))
            toastr.success('{{ session('success') }}');
        @endif

        @if(session('error'))
            toastr.error('{{ session('error') }}');
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                toastr.error('{{ $error }}');
            @endforeach
        @endif
    </script>
@endsection

