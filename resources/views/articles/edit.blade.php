<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    @extends('layouts.app')
    @section('content')
    <div class="container">
        <form method="post">
            @csrf
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{$article->title}}">
            </div>
            <div class="mb-3">
                <label>Body</label>
                <input type="text" name="body" class="form-control" value="{{$article->body}}">
            </div>
            <div class="mb-3">
                <label>Category</label>
                <p></p>
                <select name="category_id" class="form-select">
                    @if($article->category_id == 1)
                    <option value="" class="text-muted" selected>News</option>
                    @elseif($article->category_id == 2)
                    <option value="" class="text-muted" selected>Tech</option>
                    @elseif($article->category_id == 3)
                    <option value="" class="text-muted" selected>Edu</option>
                    @elseif($article->category_id == 4)
                    <option value="" class="text-muted" selected>University</option>
                    @else
                    <option value="" class="text-muted" selected>Business</option>
                    @endif
                    <option value="1">News</option>
                    <option value="2">Tech</option>
                    <option value="3">Edu</option>
                    <option value="4">University</option>
                    <option value="5">Business</option>

                </select>
            </div>
            <button class="btn btn-success">Update</button>
            <a class="btn btn-primary"
                href="{{ url ("/articles/detail/$article->id")}}">
                Back
            </a>
        </form>
    </div>


    @endsection

</body>

</html>