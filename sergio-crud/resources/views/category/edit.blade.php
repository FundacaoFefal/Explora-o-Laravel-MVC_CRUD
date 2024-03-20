<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .float-end {
            float: right;
        }
        .text-center {
            text-align: center;
        }
        .edit-category {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 20px; /* Updated border-radius */
            text-align: center; /* Added text-align */
            margin: 0 auto; /* Added margin */
        }
        .mb-3 {
            margin-bottom: 20px;
        }
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .category-title {
            text-align: center;
            text-shadow: 2px 2px 4px #000000;
            color: white;
            z-index: 9999; /* Added z-index */
        }
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }
        .button-container button {
            margin-right: 10px;
        }
    </style>
</head>
<body>
<video style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" autoplay loop muted>
    <source src="{{ asset('media/background_video_2.mp4') }}" type="video/mp4">
</video>

<div class="edit-category">
    <h1 class="category-title">Edit Category</h1> <!-- Updated title -->

    <div class="container">
        <div class="card">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                @endif

                <form action="{{ url('categories/'.$category->id.'/edit') }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <br>
                        <input type="text" name="name" id="name" value="{{ $category->name }}" style="margin: 0 auto; text-align: center; display: block;"/>
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror 
                    </div>
                    <br>    
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <br>
                        <textarea name="description" id="description" class="form-control" rows="3" style="margin: 0 auto; text-align: center; display: block;">{{ $category->description }}</textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror 
                    </div>
                    <div class="button-container">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('categories') }}" class="btn btn-primary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>