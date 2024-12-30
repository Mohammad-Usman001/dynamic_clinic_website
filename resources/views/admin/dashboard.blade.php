@extends('admin.layout.app')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="container px-4 mx-auto">
                    <!-- Stats Cards -->
                    <div class="row mb-4">
                        <!-- Contact Stats Card -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="bg-primary p-3 rounded-circle">
                                        <svg class="text-white" width="32" height="32" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div class="ms-4">
                                        <h4 class="fs-4 fw-semibold text-secondary">{{ $contactCount }}</h4>
                                        <p class="text-muted">Total Contacts Form</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Blog Stats Card -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center">
                                    <div class="bg-success p-3 rounded-circle">
                                        <svg class="text-white" width="32" height="32" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H15" />
                                        </svg>
                                    </div>
                                    <div class="ms-4">
                                        <h4 class="fs-4 fw-semibold text-secondary">{{ $blogCount }}</h4>
                                        <p class="text-muted">Total Blogs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Data Section -->
                    <div class="row mb-4">
                        <!-- Recent Contacts -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="fs-5 fw-semibold text-secondary mb-0">Recent Contacts</h2>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="ContactsTable">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($recentContacts as $contact)
                                                    <tr>
                                                        <td>{{ $contact->name }}</td>
                                                        <td>{{ $contact->created_at->format('Y-m-d') }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Blogs -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="fs-5 fw-semibold text-secondary mb-0">Recent Blogs</h2>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped" id="BlogsTable">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($recentBlogs as $blog)
                                                    <tr>
                                                        <td>{{ Str::limit($blog->title, 30) }}</td>
                                                        <td>{{ $blog->created_at->format('Y-m-d') }}</td>
                                                        <td>
                                                            <a href="{{ route('blogs.edit', $blog->id) }}"
                                                                class="btn btn-primary">Edit</a>
                                                            <form action="{{ route('blogs.destroy', $blog->id) }}"
                                                                method="POST" style="display:inline-block;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DataTables and Scripts -->
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable for Contacts Table
            $('#ContactsTable').DataTable({
                responsive: true,
                autoWidth: false,
                order: [[1, 'desc']] // Order by Date descending
            });

            // Initialize DataTable for Blogs Table
            $('#BlogsTable').DataTable({
                responsive: true,
                autoWidth: false,
                columnDefs: [{
                    orderable: false,
                    targets: [2] // Disable sorting on the Action column
                }],
                order: [[1, 'desc']] // Order by Date descending
            });
        });
    </script>
@endsection
