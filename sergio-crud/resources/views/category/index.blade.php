<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sérgio Simple Crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .handwritten {
            font-family: Arial, sans-serif; /* Change the font family to Arial */
            font-size: 18px;
            text-align: right; /* Align the text to the right */
            margin-top: 20px;
        }
        .category-container {
            background-color: white;
            border-radius: 18px;
            padding: 18pxpx;
            margin-top: 18px;
        }
        .category-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }


    </style>
</head>
<body>
<video style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;" autoplay loop muted>
    <source src="media/background_video.mp4" type="video/mp4">
</video>

<div class="container mt-5">
    <h1 class="text-center text-white" style="text-shadow: 2px 2px 4px #000000;">All Categories</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card category-container">

                <div class="card-body">
                    <table class="table table-bordered table-striped rounded">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item)
                            <tr>
                                <td class="text-center">{{ $item->id }}</td>
                                <td class="text-center">{{ $item->name }}</td>
                                <td class="text-center">{{ $item->description }}</td>
                                <td class="text-center">
                                    <a href="{{ url('categories/'.$item->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                    <a href="{{ url('categories/'.$item->id.'/delete') }}" class="btn btn-danger mx-1" onclick="return confirm('Are you sure you want to delete this item?');">
                                        <i class="bi bi-trash"></i> Delete
                                    </a>
                                    <a href="{{ url('categories/'.$item->id.'/details') }}" class="btn btn-info mx-1">Details</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ url('categories/create') }}" class="btn btn-primary float-right">Add Category</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>