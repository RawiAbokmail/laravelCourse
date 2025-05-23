<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0">All Posts</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-dark">
                <i class="fa fa-plus"></i> Add New Post
            </a>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        </div>
        <table class="table table-hover table-striped">
            <tr class="table-dark">
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Actions</th>
            </tr>
           @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>
                    @if ($post->image)
                        <img src="{{ asset( $post->image) }}" alt="Post Image" width="50" height="50">
                    @else
                        No Image
                    @endif
                </td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td>
                    <a href="" class="btn btn-sm btn-primary">
                        <i class="fa fa-edit"></i> Edit
                    </a>

                        <button type="submit" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> Delete</button>

                </td>
            </tr>
           @endforeach

        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
