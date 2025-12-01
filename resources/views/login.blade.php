<x-layout>
    <div class="d-flex justify-content-center align-items-center mt-5">
        <section class="login-box bg-white p-4 rounded shadow w-100 login mt-3" style="max-width: 400px">
            <h1 class="text-center mb-4">Login User</h1>
            <form method="POST" action="/loginUser">
                @csrf
                <div class="form-group mb-3">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" autocomplete="off">
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" autocomplete="off">
                </div>

                <div class="text-center mb-2">
                    <p>Not a member? <a href="/register">Register</a></p>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </section>
    </div>

</x-layout>
