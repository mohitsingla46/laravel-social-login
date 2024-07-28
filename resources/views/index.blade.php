<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social Logins</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="d-grid gap-2 position-absolute top-50 start-50 translate-middle">
        <a href="{{url('/github/redirect')}}" class="btn btn-primary">Continue with GitHub</a>
        <a href="{{url('/facebook/redirect')}}" class="btn btn-primary">Continue with Facebook</a>
        <a href="{{url('')}}" class="btn btn-primary">Continue with Instagram</a>
        <a href="{{url('')}}" class="btn btn-primary">Continue with Google</a>
        <a href="{{url('')}}" class="btn btn-primary">Continue with LinkedIn</a>
        <a href="{{url('')}}" class="btn btn-primary">Continue with X</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
