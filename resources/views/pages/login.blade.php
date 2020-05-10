<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">


    <title>Hello, world!</title>
</head>
<body>
<div class="main-header">
    <div class="main-header-logo">
        <div id="animated-example" class="animated bounceIn">
            <h3><a href="#">Skillbox</a></h3>
        </div>
    </div>
    <div class="main-header-text">
        <h4>Образовательная онлайн платформа SkillBox</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati et veniam ipsam quo placeat perspiciatis natus porro distinctio beatae ullam totam amet provident fuga quis, consectetur consequatur eum hic est.</p>
        <p><img src="img/skillbox.png" alt=""></p>
    </div>
    <div class="main-header-form">
        <h3>Порталға кіру</h3>
        <hr>
        <form method="POST" action="{{ route('signin') }}">
            @csrf
            <div class="form-group">

                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Эл пошта">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror

            </div>
            <div class="form-group">

                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Құпиясөз">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <p><a href="#" class="forgotthepass">Құпиясөзді ұмыттым</a></p>
            <button type="submit" class="btn btn-primary">Кіру</button>
            <p class="ff2"><a href="{{url('user/register')}}">Порталға тіркелу</a></p>

        </form>

    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
