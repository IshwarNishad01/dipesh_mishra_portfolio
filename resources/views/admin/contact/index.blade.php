@extends('admin.layout.app')
@section('title', 'contact page')
@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>General Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">messages </h5>
                            <!-- Table with hoverable rows -->
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">name</th>
                                        <th scope="col">email</th>
                                        <th scope="col">phone</th>
                                        <th scope="col">message</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <th scope="row">{{ $i++ }}</th>
                                            <td>{{ $contact->name ?? 'N/A' }}</td>
                                            <td>{{ $contact->email ?? 'N/A' }}</td>
                                            <td>{{ $contact->phone ?? 'N/A' }}</td>
                                            <td>{{ $contact->message ?? 'N/A' }}</td>
                                            <td>
                                              {{-- <a href="{{ route('admin.blog.destroy', $contact->id) }}" class="ms-3">
                                                    <i class="bi bi-trash-fill text-danger fs-5"></i>
                                                </a> --}}
                                                
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with hoverable rows -->

                        </div>
                    </div>


                </div>
        </section>

    </main><!-- End #main -->





@endsection
