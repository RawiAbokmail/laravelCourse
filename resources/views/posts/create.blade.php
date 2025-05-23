<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>create new post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  </head>
  <body>

<div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0">Create New Post</h1>
            <a href="{{ route('posts.index') }}" class="btn btn-dark">
                <i class="fa fa-arrow-left"></i> All Posts
            </a>

        </div>

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="p-4 rounded shadow bg-light">
            @csrf

            <x-form.input
                name="title"
                label="Title"
                placeholder="Enter post title"
                class="mb-3"
                required
            />

            <x-form.textarea
                name="content"
                label="Content"
                placeholder="Write your post here..."
                rows="6"
                class="mb-3"
            />

            <x-form.input
                type="file"
                name="image"
                label="Upload Image"
                class="mb-4"
            />

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary px-4 py-2">
                    <i class="fa fa-paper-plane me-2"></i> Publish Post
                </button>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
