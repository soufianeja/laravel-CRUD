<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CRUD Laravel</title>
</head>
<body>

    <div class="container text-center">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-succes">
                    {{session('status')}}
                </div>
            @endif
            <div class="col s12">
                    <h1>AJOUTER UN ETUDIANT - CRUD Laravel</h1>
                    
                    <form action="/ajouter/traitement" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="email" class="form-control" id="nom" name="nom" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="pernom" class="form-label">Prenom</label>
                            <input type="password" class="form-control" id="pernom" name="prenom">
                        </div>
                        <div class="mb-3">
                            <label for="class" class="form-label">Class</label>
                            <input type="password" class="form-control" id="class" name="class">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>