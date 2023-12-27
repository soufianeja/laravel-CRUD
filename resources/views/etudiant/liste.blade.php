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
            <div class="col s12">
                    <h1>CRUD Laravel</h1>
                    <hr>
                    <a href="/ajouter" class="btn btn-primary"> ajouter un etudiant</a>
                    <hr>
                    <table class="table table-striped-columns">
                        <thead>
                            <tr class="table-active">
                                <th>id</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Class</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-active">
                                <td>1</td>
                                <td>lakjf</td>
                                <td>rl;ajd</td>
                                <td>5eme</td>
                                <td>
                                    <a href="#" class="btn btn-info">Update</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr class="table-active">
                                <td>2</td>
                                <td>ladskjf</td>
                                <td>rl;asafdsjd</td>
                                <td>5eme</td>
                                <td>
                                    <a href="#" class="btn btn-info">Update</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>