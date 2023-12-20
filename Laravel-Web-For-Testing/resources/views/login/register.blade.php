@extends('login.layouts.main')

@section('container')

<style>

/* Animasi Gradient */
.bg {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: 200% 200%;
    background-image: linear-gradient(-135deg, #504099 0%, #FE7BE5 50%, #504099 100%);
    animation: AnimateBG 15s ease infinite;
}

@keyframes AnimateBG {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

</style>

<div class="bg">
<div id="layoutAuthentication_content">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Registration Form</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control @error('name')
                                        is-invalid
                                    @enderror" name="name" id="name" type="text" placeholder="Name" autofocus required
                                        value="{{ old('name') }}" />
                                    <label for="name">Name</label>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control @error('username')
                                        is-invalid
                                    @enderror" name="username" id="username" type="text" placeholder="Username"
                                        required value="{{ old('username') }}" />
                                    <label for="username">Username</label>
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control @error('password')
                                                is-invalid
                                            @enderror" name="password" id="password" type="password"
                                                placeholder="Create a password" required
                                                value="{{ old('password') }}" />
                                            <label for="password">Password</label>
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control @error('password_confirmation')
                                                is-invalid
                                            @enderror" name="password_confirmation" id="password_confirmation"
                                                type="password" placeholder="Confirm password" required
                                                value="{{ old('password_confirmation') }}" />
                                            <label for="password_confirmation">Confirm Password</label>
                                            @error('password_confirmation')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid"><button type="submit"
                                            class="btn btn-primary btn-block">Register</button></div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 d-flex justify-content-between">
                        <a href="{{ route('cover') }}" class="text-decoration-none">
                        <i class="fas fa-home"></i>
                        </a>
                            <div class="small">Sudah daftar?<a class="text-decoration-none"
                                    href="{{ route('login') }}">
                                    Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</div>
@endsection