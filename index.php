<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
</head>
<body>
    <div class="container mt-5">
        <form action="script.php" method="get">
            <div class="mb-3">
            <label for="paragraph" class="form-label">Text</label>
            <input type="text" name="paragraph" id="paragraph" class="form-control" placeholder="..." aria-describedby="helpId">
            <small id="nameHelper" class="text-muted">Just type your Text</small>
            </div>
            <div class="mb-3">
            <label for="censured" class="form-label">Censured Text</label>
            <input type="text" name="censured" id="censured" class="form-control" placeholder="..." aria-describedby="helpId">
            <small id="nameHelper" class="text-muted">Just type your censured Text</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</body>
</html>