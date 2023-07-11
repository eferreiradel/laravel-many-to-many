@extends('layouts.admin')
<body>
    @section('content')
    <div class="container-fluid">
        <div class="row main--height">
            <div class="col-2 bg-danger px-0">
                <div class="container-fluid px-0">
                    <div class="container px-2 py-5 text-white">
                        @include('admin.dashboard-aside')
                    </div>
                </div>
            </div>
            <div class="col-10 bg-light px-0">
                <div class="container-fluid">
                    <div class="container px-0">
                        <div class="row justify-content-center py-5">
                            <div class="col-6">
                                <div class="card border-0 shadow">
                                    <div class="container py-2">
                                        <h4>
                                            New Post
                                        </h4>
                                    </div>
                                    <form action="{{ route('post.store') }}" method="POST">
                                        @csrf
                                        <div class="container">
                                            <label for="title">Title:</label>
                                            <input type="text" name="title" id="title" required class="form-control">
                                        </div>
                                        <div class="container">
                                            <label for="content">Content:</label>
                                            <textarea name="content" id="content" required class="form-control"></textarea>
                                        </div>
                                        <div class="container py-3">
                                            <button class="btn btn-danger" type="submit">Create Post</button>
                                        </div>
                                        <!-- Add other form fields as needed -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection
</body>
