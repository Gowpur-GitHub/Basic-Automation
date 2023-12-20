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
                <div class="col-lg-4">
                    <div class="card shadow-lg border-0 rounded-lg mt-0">
                        <div class="card-header">
                            <h3 class="text-center font-weight-white my-4">Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control @error('username')
                                        is-invalid
                                    @enderror" id="username" name="username" type="text" placeholder="Username"
                                        autofocus required value="{{ old('username') }}" />
                                    <label for="username">Username</label>
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="password" name="password" type="password"
                                        placeholder="Password" required />
                                    <label for="password">Password</label>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer d-flex justify-content-between py-3">
                        <a href="{{ route('cover') }}" class="text-decoration-none">
                        <i class="fas fa-home"></i>
                        </a>
                        <div class="small">
                        Belum Daftar? <a class="text-decoration-none" href="{{ route('register') }}">Klik Disini!</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</div>
@endsection

