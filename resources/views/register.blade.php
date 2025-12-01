<x-layout>
    <div class="d-flex justify-content-center align-items-center mt-5">
        <section class="login-box bg-white p-4 rounded shadow w-100 mt-3 login" style="max-width: 400px">
            <h1 class="text-center m-auto ">Register User</h1>
            <form method="POST" action="/registUser" class="p-3">
                @csrf
                <div class="form-group my-1">
                    <label for="name">Name</label>
                    <input type="text" class="form-control my-2" id="name" name="name" autocomplete="off">
                </div>
                <div class="form-group my-1">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control my-2" id="email" name="email"
                        aria-describedby="emailHelp" autocomplete="off">
                </div>
                <div class="form-group my-2">
                    <label for="password">Password</label>
                    <input type="password" class="form-control my-2" id="password" name="password" autocomplete="off">
                </div>
                <div class="text-center">
                    <p>Already register? <a href="/">Login</a></p>
                </div>
                <button type="submit" class="btn btn-primary my-3 w-100">Register</button>
            </form>
        </section>
    </div>
</x-layout>
