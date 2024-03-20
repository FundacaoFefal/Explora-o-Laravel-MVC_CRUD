<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
    <!-- Bootstrap CSS -->
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
            position: relative; /* Added position relative */
            z-index: 2; /* Added z-index */
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
        .category-title {
            text-align: center;
            text-shadow: 2px 2px 4px #000000;
            color: white;
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
        body {
    background-image: url('media/image.jpg');
    background-size: cover;
    background-position: center; 

}
    </style>
</head>
<body>
    
<video style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" autoplay loop muted>
    <source src="{{ asset('media/background_video_3.mp4') }}" type="video/mp4">
</video>


<div class="edit-category">
<h1 class="category-title">Create Category</h1>
    <div class="container">
        <div class="card">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
                @endif
                <form action="{{ url('categories/create') }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="name">Name</label>
                        <br>
                        <input type="text" name="name" value="{{ old('name') }}"/>
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror 
                    </div>
                    <div class="mb-2">
                        <label for="description">Description</label>
                        <br>
                        <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror 
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ url('categories') }}" class="btn btn-primary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>