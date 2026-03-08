@extends('admin.layout.app')

@section('title', 'blog create page')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add News</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">News</li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add details</h5>

                            <form method="POST" action="{{route('admin.settings.store')}}" enctype="multipart/form-data">
                                @csrf

                                <!-- News Title -->
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">Logo</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="logo" class="form-control"
                                            placeholder="Enter news title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">twitter link</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="twitter" class="form-control"
                                            placeholder="Enter news title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">facebook link</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="facebook" class="form-control"
                                            placeholder="Enter news title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">website link</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="website" class="form-control"
                                            placeholder="Enter news title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label">instagram link</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="instagram" class="form-control"
                                            placeholder="Enter news title">
                                    </div>
                                </div>

                                <!-- Buttons -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    {{-- <a href="{{route('blog.index')}}" class="btn btn-secondary">back</a> --}}
                               </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
