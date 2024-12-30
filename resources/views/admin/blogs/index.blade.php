@extends('admin.layout.app')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1>Blogs</h1>
                    <a href="{{ route('blogs.create') }}" class="btn btn-success">Add Blog</a>
                </div>
                <form id="bulkDeleteForm" action="{{ route('blogs.bulkDelete') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mb-3" id="bulkDeleteButton" disabled>Delete Selected</button>
                    <table class="table table-striped" id="BlogsTable">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" id="selectAll">
                                </th>
                                <th>#</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>
                                    <input type="checkbox" name="selected_blogs[]" value="{{ $blog->id }}" class="blog-checkbox">
                                </td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>
                                    @if($blog->image)
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" width="70px" height="70px" style="object-fit: contain;">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>{{ $blog->created_at->format('d-m-Y') }}</td>
                                <td>
                                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
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
        // Initialize DataTable
        $('#BlogsTable').DataTable({
            responsive: true,
            autoWidth: false,
            columnDefs: [{
                orderable: false,
                targets: [0, 5] // Disable sorting on the checkbox and actions columns
            }]
        });

        const selectAllCheckbox = $('#selectAll');
        const blogCheckboxes = $('.blog-checkbox');
        const bulkDeleteButton = $('#bulkDeleteButton');

        // Handle "Select All" functionality
        selectAllCheckbox.on('change', function() {
            const isChecked = $(this).prop('checked');
            blogCheckboxes.prop('checked', isChecked);
            toggleBulkDeleteButton();
        });

        // Enable or disable the bulk delete button
        blogCheckboxes.on('change', toggleBulkDeleteButton);

        function toggleBulkDeleteButton() {
            const anyChecked = blogCheckboxes.is(':checked');
            bulkDeleteButton.prop('disabled', !anyChecked);
        }

        // Confirm bulk delete before submission
        $('#bulkDeleteForm').on('submit', function(event) {
            if (!confirm('Are you sure you want to delete the selected blogs?')) {
                event.preventDefault();
            }
        });
    });
</script>
@endsection
