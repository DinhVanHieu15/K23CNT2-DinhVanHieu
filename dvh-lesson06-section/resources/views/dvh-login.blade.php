<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DVH-Login</title>
</head>
<body>
    <section class='container my-3'>
        <form action="">
            <div class="card-header">
                <h1> DVH-Login</h1>
            </div>

            <div class="card-body">
                <div class="mb-3">
                    <label for="dvhemail" class=""form-label>Email</label>
                    <input type="email" class="form-controller"
                    id="dvhemail" name="dvhemail"
                    planceholder="dvhemail@example.com"/>
                    @error('email')

                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="dvhpassword" class="form-label">Password</label>
                    <input type="password" class="form-controller"
                    id="dvhpassword" name="dvhemail"
                    planceholder="xxxx"/>
                    <span id="email-error"></span>
                </div>
            </div>      

            <div class="card-footer">
                <button class="btn btn-primary">Submit</button>
                @if (Session::has('dvh-error'))
                    <div class="alert alert-danger">
                        {{ Session::get('dvh-error')}}
                    </div>                     
                @endif
            </div>
        </form>
    </section>
</body>
</html>





