@extends('admin.layout.app')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <h2>Contact Messages</h2>
                <form id="bulkDeleteForm" action="{{ route('contacts.bulkDelete') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger mb-3" id="bulkDeleteButton" data-toggle="modal"
                        data-target="#bulkDeleteModal" disabled>Delete Selected</button>
                    <table id="ContactTable" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" id="selectAll">
                                </th>
                                <th>Sr.no</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($contacts as $contact)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="selected_contacts[]" value="{{ $contact->id }}"
                                            class="contact-checkbox">
                                    </td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->message }}</td>
                                    <td>{{ $contact->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#viewMessageModal{{ $contact->id }}">
                                            View
                                        </button>

                                        <!-- View Modal -->
                                        <div class="modal fade" id="viewMessageModal{{ $contact->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="viewMessageModalLabel{{ $contact->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="viewMessageModalLabel{{ $contact->id }}">Message from
                                                            {{ $contact->name }}</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>{{ $contact->message }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#deleteModal{{ $contact->id }}">
                                            Delete
                                        </button>

                                        <!-- Delete Confirmation Modal -->
                                        <div class="modal fade" id="deleteModal{{ $contact->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="deleteModalLabel{{ $contact->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel{{ $contact->id }}">
                                                            Confirm Deletion</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete this message from
                                                        <strong>{{ $contact->name }}</strong>?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Cancel</button>
                                                        <form action="{{ route('contacts.destroy', $contact->id) }}"
                                                            method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No contact messages found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <!-- DataTables and Script -->
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#ContactTable').DataTable({
                responsive: true,
                autoWidth: false,
                columnDefs: [{
                    orderable: false,
                    targets: [0, 6] // Disable sorting on the checkbox and action columns
                }]
            });

            const selectAllCheckbox = $('#selectAll');
            const contactCheckboxes = $('.contact-checkbox');
            const bulkDeleteButton = $('#bulkDeleteButton');

            // Select All functionality
            selectAllCheckbox.on('change', function() {
                const isChecked = $(this).prop('checked');
                contactCheckboxes.prop('checked', isChecked);
                toggleBulkDeleteButton();
            });

            // Toggle bulk delete button
            contactCheckboxes.on('change', toggleBulkDeleteButton);

            function toggleBulkDeleteButton() {
                const anyChecked = contactCheckboxes.is(':checked');
                bulkDeleteButton.prop('disabled', !anyChecked);
            }
        });
    </script>
@endsection
